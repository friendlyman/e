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
        <script src="../js/MyScript.js"></script>
        <style type='text/css'>
/*            .ui-listview, .ui-li {
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
background: cornsilk;
color: darkslategray;
font-family: sans-serif;
font-size: 17px;
}

	 Show the table header rows and set all cells to display: table-cell  
	
	.ui-table-reflow.ui-responsive {
display: inline-table;
}*/
        </style>
<!--        <script type='text/javascript'>
            $(document).ready(function(){
    //alert("hai");
                  
         
             
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
    <div class="ui-block-a"><div class="ui-bar ui-bar-d" style="height:20px;text-align: right"> Complex Analysis</div></div>
    <div class="ui-block-b"><div class="ui-bar ui-bar-b" style="height:20px;text-align: center"><h1>Assignment Details</h1></div></div>
    <div class="ui-block-c"><div class="ui-bar ui-bar-d" style="height:20px;text-align: left"></div></div>
</div>
               
	        </div> 
            <div data-role="content" data-theme="c" class="teacherContent">
                <div id="tabContent" style="margin-left: 3%;margin-right: 3%;margin-top: 7%">
<!--               <ul data-role="listview" data-count-theme="b" data-inset="true" >
                   <li><a href="../teacher/SubmittedStudentList.php" data-transition='turn' onClick="">Submissions </a><span class="ui-li-count">17</span></li>
                   <li><a href="../teacher/UnsubmittedStudentList.php" data-transition='turn' onClick="unSubmittedStudentsList()">Non-Submissions <span class="ui-li-count">5</span></a></li>
                   <li><a href="../teacher/RevisedAssignments.php" data-transition='turn' onClick="revisedAssignments()">Reviewed Assignments <span class="ui-li-count">10</span></a></li>
                   <li><a href="../teacher/UnrevisedAssignments.php" data-transition='turn'>Unreviewed Assignments <span class="ui-li-count">7</span></a></li>
    
                </ul>-->
<ul data-role="listview" data-theme="c">
  <li><a href="../teacher/SubmittedStudentList.php">Submissions</a></li>
  <li><a href="../teacher/UnsubmittedStudentList.php">Non-Submissions</a></li>
  <li><a href="../teacher/RevisedAssignments.php">Reviewed Assignments</a></li>
  <li><a href="../teacher/UnrevisedAssignments.php">Unreviewed Assignments</a></li>
</ul>
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
