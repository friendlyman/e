function onSuccessa(data, status)
{
    data = $.trim(data);
    if (data == 'true')
    {
//$.mobile.changePage("index"+".php",{ transition: "slidefade" });
        $.mobile.hidePageLoadingMsg();
        $("#messagew").text('Your New Password sent to your Email,Please check it');
    }
    else
    {
        $.mobile.hidePageLoadingMsg();
        $("#messagew").text('Sorry, The Email you entered is not exist!!');
    }
}
function onErrora(data, status)
{
    $("#messagew").text('Error');
}
function successb() {
    $.mobile.changePage("http://30.10.1.192/elpproject/login.php", {transition: "slidedown"});
}
function onSuccess(data, status)
{
    data = $.trim(data);
    if (data == 'true')
    {
        $.mobile.changePage("index" + ".php", {transition: "pop"});
        $.mobile.hidePageLoadingMsg();
        $("#message").text('');
    }
    else
    {
        $.mobile.hidePageLoadingMsg();
        $("#message").text('Sorry, The login details you entered are invalid!');
    }
}
function onError(data, status)
{
    $("#message").text('Error');
}
function changescreen()
{
    $.mobile.changePage("http://30.10.1.192/elpproject/login.php", {transition: "slidedown"});
}
var timer = 0;
//var timer = 0;
function set_interval() {
//    var idleTime = 5000;
    timer = setInterval(function() {
        showalert()
    }, 40000);
}
function reset_interval() {
//resets the timer. The timer is reset on each of the below events:
// 1. mousemove   2. mouseclick   3. key press 4. scroliing
//first step: clear the existing timer

    if (timer != 0) {
        clearInterval(timer);
        timer = 0;
        // second step: implement the timer again
        timer = setInterval(function() {
            showalert()
        }, 40000);
        // completed the reset of the timer
    }
}
function stop_interval() {
    clearInterval(timer);
}
function showalert()
{
    var sastatus = confirm('Shall we Logout now?');
    if (sastatus == true)
    {
        $.mobile.changePage("http://30.10.1.192/elpproject/login.php", {transition: "slidedown"});
        $.ajax({
            type: "POST",
            cache: false,
            url: "ps/signouts.php", });
    }

}
//var splash_timer = 0;
////var timer = 0;
//function set_timeout() {
////    var idleTime = 5000;
//    splash_timer = setTimeout(function() {
//        changescreen()
//    }, 10000);
//}

//
//$(document).on("pageshow", "#index", function() {
//    set_interval();
//
//
//
//});
//$(document).mousemove(function() {
//
//    if (!($.mobile.activePage.attr("id") == 'main' || $.mobile.activePage.attr("id") == 'login')) {
//         reset_interval();
//       
//    }
//    else
//        {
//            stop_interval();
//        }
//});
$(document).on('pageshow',function() {
    if (!($.mobile.activePage.attr("id") == 'main' || $.mobile.activePage.attr("id") == 'login')){
        set_interval();
    }
});

$(document).on('pagehide',function() {
    stop_interval();
});
$(document).mousemove(function() {
     if (!($.mobile.activePage.attr("id") == 'main' || $.mobile.activePage.attr("id") == 'login')){
        reset_interval();
    } 
});
$(document).on('change', '#select-native-8', function() {
//        alert($(this).find("option:selected").val());
// $("#select-native-8").val();
    $('#select-native-9').empty();
    $.ajax(
            {
                url: "../ps/subject.php",
                type: 'post',
                data: 'field1value=' + $(this).val(),
                complete: function(xhr, result)
                {
                    if (result != "success")
                        return;
                    var response = xhr.responseText;
                    $('#select-native-9').empty();
                    $("#select-native-9").append(response);
                    $("#select-native-9").selectmenu('refresh', true);

                }
            });
    $.ajax(
            {
                url: "../ps/books.php",
                type: 'post',
                data: {field2value: $("#select-native-8").val(),
                    field3value: $("#select-native-9").val()},
                complete: function(xhr, result)
                {
                    if (result != "success")
                        return;
                    var response = xhr.responseText;
                    $("#books_list").empty();
                    $("#books_list").append(response);
                    $("#books_list").listview("refresh", true);
                }
            });
    $.ajax(
            {
                url: "../ps/videos.php",
                type: 'post',
                data: {field4value: $("#select-native-8").val(),
                    field5value: $("#select-native-9").val()},
                complete: function(xhr, result)
                {
                    if (result != "success")
                        return;
                    var response = xhr.responseText;
                    $("#videos_list").empty();
                    $("#videos_list").append(response);
                    $("#videos_list").listview("refresh", true);
                }
            });
});
$(document).on('change', '#select-native-9', function() {
//        alert($(this).find("option:selected").val());
// $("#select-native-8").val();
    $.ajax(
            {
                url: "../ps/books.php",
                type: 'post',
                data: {field2value: $("#select-native-8").val(),
                    field3value: $("#select-native-9").val()},
                complete: function(xhr, result)
                {
                    if (result != "success")
                        return;
                    var response = xhr.responseText;
                    $("#books_list").empty();
                    $("#books_list").append(response);
                    $("#books_list").listview("refresh", true);
                }
            });
    $.ajax(
            {
                url: "../ps/videos.php",
                type: 'post',
                data: {field4value: $("#select-native-8").val(),
                    field5value: $("#select-native-9").val()},
                complete: function(xhr, result)
                {
                    if (result != "success")
                        return;
                    var response = xhr.responseText;
                    $("#videos_list").empty();
                    $("#videos_list").append(response);
                    $("#videos_list").listview("refresh", true);
                }
            });
});
$(document).on('pagebeforecreate', function() {
    $("#form_login").submit(function() {
        $.mobile.showPageLoadingMsg();
        var formData = $("#form_login").serialize();
        $.ajax({
            type: "POST",
            url: "ps/signins.php",
            cache: false,
            data: formData,
            success: onSuccess,
            error: onError,
            complete: function() {
                $('#login').each(function() {
                    this.reset();
                    //Here form fields will be cleared.
                });
            }
        });
        return false;
    });
});
$(document).on('pagebeforeshow', function() {
    $.ajax(
            {
                url: "../ps/books.php",
                type: 'post',
                data: {field2value: $("#select-native-8").val(),
                    field3value: $("#select-native-9").val()},
                complete: function(xhr, result)
                {
                    if (result != "success")
                        return;
                    var response = xhr.responseText;
                    $("#books_list").empty();
                    $("#books_list").append(response);
                    $("#books_list").listview("refresh", true);
                }
            });
    $.ajax(
            {
                url: "../ps/videos.php",
                type: 'post',
                data: {field4value: $("#select-native-8").val(),
                    field5value: $("#select-native-9").val()},
                complete: function(xhr, result)
                {
                    if (result != "success")
                        return;
                    var response = xhr.responseText;
                    $("#videos_list").empty();
                    $("#videos_list").append(response);
                    $("#videos_list").listview("refresh", true);
                }
            });

    $.ajax(
            {
                url: "ps/ali.php",
                complete: function(xhr, result)
                {
                    if (result != "success")
                        return;
                    var response = xhr.responseText;
                    $("#index div:jqmData(role=content)").append(response);
                    $("#list").listview();
                }
            });
    $.ajax(
            {
                url: "http://30.10.1.192/elpproject/ps/ali_panel.php",
                complete: function(xhr, result)
                {
                    if (result != "success")
                        return;
                    var response = xhr.responseText;
                    $(".mp div:jqmData(role=panel)").append(response);
                    $("#panel_list").listview();
                }
            });

});
$(document).on('pageinit', function() {

    $("#form_reset").submit(function() {
        $.mobile.showPageLoadingMsg();
        var formDataa = $("#form_reset").serialize();
        $.ajax({
            type: "POST",
            url: "ps/prs.php",
            cache: false,
            data: formDataa,
            success: onSuccessa,
            error: onErrora
        });
        return false;
    });
});
//$(document).on("pageshow", "#main", function() {
////    set_timeout();
// //   stop_interval();
//});
//$(document).on("pageshow", "#login", function() {
// //   stop_interval();
//});
$(document).on('click', '#library', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/student/library.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#news', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#teacher_rating', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#reminder', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#my_profile', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#marks_report', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#inbox', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#hostel', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#file_report', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#compliant_box', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#classes', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#blog', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#assignment', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/student/AssignementsList.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#assignments', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/teacher/TeacherSelection.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#academic_calender', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#updates', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#task', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#student_mark_report', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#sms_alert', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#parent_teacher', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#dicussion', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#update_student_details', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#student_attandance', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#scholarship', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#parent_teacher_association', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#fee_collection', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#admission', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#transport', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#certificate_management', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#inbox', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#latest_happenings', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#my_profile', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#notification', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#notifications', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#registration', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#reports', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#by_school', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#uae', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#zonal', function() {
    $.mobile.showPageLoadingMsg();
    $.mobile.changePage("http://30.10.1.192/elpproject/uc.php", {transition: "slidefade"});
    $.mobile.hidePageLoadingMsg();
    return false;
});
$(document).on('click', '#logout', function() {
    $.ajax({
        type: "POST",
        cache: false,
        url: "http://30.10.1.192/elpproject/ps/signouts.php",
        success: successb,
        complete: function() {
            $('#login').each(function() {
                window.location.reload(); //Here form fields will be cleared.
            });
        }
    });
});




