 
            function createNew(){
              $.mobile.changePage("../teacher/CreateNewTask.php",{transition:"flow",reloadPage:true});
            }
              function publishedList(){
                   $.mobile.changePage("../teacher/publishedtasklist.php",{transition:"flow",reloadPage:true});
             
         }
         function revisedAssignments(){
              //$.mobile.changePage("../teacher/revisedAssignments.php",{transition:"pop",reloadPage:true});
         }
         
         function publishedTaskDetail(){
             $.mobile.changePage("../teacher/viewpublishedtaskdetail.php",{transition:"flow",reloadPage:true});
         }
         function onPublishClick(){
              $( "#popupDialogPublish" ).popup( "close" );
             alert("Your Assignment Saved & Published Succesfully");
            
             clearControls();
         }
         function OnCancelPublish(){
             $( "#popupDialogPublish" ).popup( "close" );
             
         }
         function onSaveClick(){
             alert("Your Task Saved Succesfully");
             clearControls();
              $( "#popupDialogSave" ).popup( "close" );
         }
         function onCancelSave(){
             $( "#popupDialogSave" ).popup( "close" );
         }
         function unPublishedList(){

             $.mobile.changePage("../teacher/unpublishedlist.php",{transition:"flow",reloadPage:true});
         }
         function onClearClick(){
             clearControls();
         }
         function onCheckClick(){
             alert("Checking Completed...");
             $.mobile.changePage("../teacher/unrevisedassignments.php",{transition:"flow",reloadPage:true});
            
         }
         function onCheckCalcelClick(){
             $("#popupDoneDialog").popup("close");
         }
         function clearControls()
         {
             var elements = document.getElementsByTagName("input");
            for (var ii=0; ii < elements.length; ii++) {
            if (elements[ii].type == "text" || elements[ii].type=="date") {
            elements[ii].value = "";
                                   }
                               }
             var elements2=document.getElementsByTagName("textarea");
              for (var ii=0; ii < elements2.length; ii++) {
              if (elements2[ii].type == "textarea")  {
                elements2[ii].value = "";          }
              }
              var elements3=document.getElementsByTagName("select");
             
               for (var ii=0; ii < elements3.length; ii++) {
                  // alert(elements3[ii].id);
                   //alert(elements3[ii].type);
                   //alert(elements3[ii].value);
              if (elements3[ii].id == "selectSubject" ||elements3[ii].id == "selectGrade" || elements3[ii].id == "selectSection")  {
               //alert(elements3[ii].index);
              elements3[ii].value = "select";   
                //alert(elements3[ii].value);
            }
              }
         }
         
    $(document).ready(function(){
   
       
  $('#subjectListId').on('click', 'a', function() {
     
      var anchor = $(this).find('img');
      sessionStorage.setItem('subjectid', JSON.stringify(anchor.attr('id')));
      if(anchor.attr('class')=='open'){
        
        $.mobile.changePage("../pages/OpenedTaskList.html",{transition:"pop",reloadPage:true});
        }
        else{
            $.mobile.changePage("../pages/CloseTaskList.html",{transition:"pop",reloadPage:true});
        }
        
      });
      
     
});
            