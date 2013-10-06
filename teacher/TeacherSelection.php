<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MOE Portal</title>
        <meta name="viewport" http-equiv="Content-Type" content="text/html; charset=UTF-8; width=device-width;
              initial-scale=1"/>
        <link rel="shortcut icon" href="../image/shortcut/By School.png">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
        <link rel="stylesheet" href="../css/custom.css" />
       <link rel="stylesheet" href="../css/MyStyles2.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
        <script src='../js/elpjs.js'></script>
        <script src='../js/MyScript.js'></script>
        
<!--        <style type='text/css'>
            .ui-listview, .ui-li {
list-style: none;
padding-left: 30px;
padding-right: 10px;
padding-top: 18px;
}
.subjectList{
 
 
padding-left: 25px;
font-size: 16px;
font-family: inherit;
}
    
.ui-li-heading {
font-size: 20px;
}
.ui-body-c, .ui-overlay-c {
/*background: cornsilk;*/
color: darkslategray;
font-family: sans-serif;
font-size: 17px;
}

	/* Show the table header rows and set all cells to display: table-cell */ 
	
	.ui-table-reflow.ui-responsive {
display: inline-table;
}
.ui-grid-b{
    text-align: center;
}
        </style>-->
<!--        <script type='text/javascript'>
            function createNew(){
              $.mobile.changePage("../teacher/CreateNewTask.php",{transition:"pop",reloadPage:true});
            }
              function publishedList(){
                   $.mobile.changePage("../teacher/publishedtasklist.php",{transition:"pop",reloadPage:true});
             
         }
         function revisedAssignments(){
              //$.mobile.changePage("../teacher/revisedAssignments.php",{transition:"pop",reloadPage:true});
         }
         
         function publishedTaskDetail(){
             $.mobile.changePage("../teacher/viewpublishedtaskdetail.php",{transition:"pop",reloadPage:true});
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
            </script>-->
    </head>
    <body>
        <div data-role="page" id="student_tasks" class="mp">   
            <div data-role="panel" id="mainmenupanel" data-theme="c">
                <ul id="panel_list"></ul>
            </div>
            <div data-role="header" data-position="fixed" data-theme="d" id="header">
                <div class="wrapper"> 
                    <div class="center-wrapper">
                        <img src="../image/School Logo/Rashid School Logo.png" alt="MOE Logo" id="moe_logo"/>
                        <h1>Al Rashid School</h1>
                    </div>
                    <div class="container_row">
                        <img src="../image/<?php echo $_SESSION['image']; ?>.jpg" alt="USER Logo" id="user_logo"/>
                        <h1 id="user_name">Welcome <?php echo $_SESSION['username']; ?></h1>
                    </div>
                    <select name="select-language" id="select-language" data-inline="true" data-theme="b" class="ui-btn-right">
                        <option value="English">English</option>
                        <option value="Arabic">Arabic</option>
                    </select>
                   <a href="#mainmenupanel" data-role="button" data-icon="bars" data-iconpos="left" data-theme="b" id="panel">Menu</a>
                </div>
            </div><!-- /header -->

<div data-role="header" id="subheader" data-theme="d">
	          <div class="ui-grid-b">
    <div class="ui-block-a"><div class="ui-bar ui-bar-d" style="height:20px"></div></div>
    <div class="ui-block-b"><div class="ui-bar ui-bar-b" style="height:20px;text-align: center"><h1>Assignments View</h1></div></div>
    <div class="ui-block-c"><div class="ui-bar ui-bar-d" style="height:20px"></div></div>
</div>
               
	        </div><!-- /Sub header -->
            <div data-role="content" data-theme="c" id="content" class="teacherContent">
                <div id="tabContent" style="margin-left: 10%;margin-right: 10%">
               <div data-role="collapsible" data-theme="b" data-content-theme="d" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u">
    <h4>Create Assignment</h4>
    <ul data-role="listview" data-inset="false">
        <a href="#" data-role="button"  data-icon="arrow-r" data-iconpos="right" data-theme="c" class="ui-btn-left" onClick="createNew()" >Create Assignment</a>
        <br>  <br>
    </ul>
</div>
                    
                    <div data-role="collapsible" data-theme="b" data-content-theme="d" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u">
    <h4>View Assignment</h4>
   
    <a href="#" data-role="button" data-icon="arrow-r" data-iconpos="right" data-theme="c" class="ui-btn-left" onClick="publishedList()" >  Published Assignment</a><br><br>
        <a href="#" data-role="button"  data-icon="arrow-r" data-iconpos="right" data-theme="c" class="ui-btn-left" onClick="unPublishedList()">Unpublished Assignment</a>
        
   
</div>
                    </div>
            </div><!-- /content -->
            <div data-role="footer" data-position="fixed" data-theme="d" id="footer">
                <a href="#" data-role="button" data-rel="back" data-icon="arrow-l" data-theme="b" class="ui-btn-left" data-direction="reverse">Back</a>
                <h1>Main User Page</h1>
                <a href="#" data-role="button" data-icon="delete" data-theme="b" class="ui-btn-right" data-transition="flow" id="logout">Logout</a>
            </div><!-- /footer -->
        </div><!-- /page -->
    </body>
</html>
