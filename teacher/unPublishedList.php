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
        <link rel="stylesheet" href="../css/MyStle.css" />
<!--        <script src="../js/MyScript2.js"></script>-->
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
   // alert("hai");
                  
         
             
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
    <div class="ui-block-a"><div class="ui-bar ui-bar-d" style="height:20px;text-align: right"></div></div>
    <div class="ui-block-b"><div class="ui-bar ui-bar-b" style="height:20px;text-align: center"><h1>UnPublished Assignments</h1></div></div>
    <div class="ui-block-c"><div class="ui-bar ui-bar-d" style="height:20px;text-align: left"></div></div>
</div>
               
	        </div><!-- /Sub header -->
            <div data-role="content" data-theme="c" id="content" class="teacherContent">
                <div id="tabContent" style="margin-left: 3%;margin-right: 2%">
               <table data-role="table" id="movie-table" data-mode="reflow" class="ui-responsive table-stroke">
      <thead>
        <tr>
          <th data-priority="1">Assigned To </th>
          <th data-priority="persist">Section</th>
          <th data-priority="2">Subject</th>
          <th data-priority="3"><abbr title="Rotten Tomato Rating">Unit</abbr></th>
          <th data-priority="4">Assignment Title</th>
          <th data-priority="4">Start Date</th>
          <th data-priority="4">Duedate</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td align="center">Grade:1</td>
          <td  align="center">&nbsp;&nbsp;A</td>
          <td>Mathematics</td>
          <td>&nbsp;&nbsp;I</td>
          <td>Complex Analysis</td>
          <td>
              03/Oct/2013
          </td>
          <td>
              <input type="date"  name="date-2" id="date-2" value="07/Oct/2013" data-inline="true">
          </td>
          <td> <a href="#popupDialogPublish" data-rel="popup" data-role="button" data-icon='arrow-r'  data-inline="true" data-theme="e" data-mini="true" data-position-to="window" onClick=''>Publish</a></td>
        </tr>
        <tr>
          <td align="center">Grade:2</td>
          <td align="center">&nbsp;&nbsp;A</td>
          <td>Statistics</td>
          <td>&nbsp;&nbsp;II</td>
          <td>Statistics Homework</td>
          <td>
               03/Oct/2013
          </td>
          <td>
              <input type="date"  name="date-2" id="date-2" value="07/Oct/2013" data-inline="true">
          </td>
          <td> <a href="#popupDialogPublish" data-rel="popup" data-role="button" data-icon='arrow-r'  data-inline="true" data-theme="e" data-mini="true" data-position-to="window">Publish</a></td>
        </tr>
       
         <tr>
          <td align="center">Grade:2</td>
          <td align="center">&nbsp;&nbsp;B</td>
          <td>English</td>
          <td>&nbsp;&nbsp;II</td>
          <td>Written essay on social issue</td>
          <td>
             03/Oct/2013
          </td>
          <td>
           <input type="date"  name="date-2" id="date-2" value="07/Oct/2013" data-inline="true">
          </td>
         <td> <a href="#popupDialogPublish" data-rel="popup" data-role="button" data-icon='arrow-r'  data-inline="true" data-theme="e" data-mini="true" data-position-to="window">Publish</a></td>
        </tr>
       
         <tr>
          <td align="center">Grade:3</td>
          <td align="center">&nbsp;&nbsp;A</td>
          <td>Chemistry</td>
          <td>&nbsp;&nbsp;I</td>
          <td>Salt Analysis</td>
          <td>
               03/Oct/2013
          </td>
          <td>
            <input type="date"  name="date-2" id="date-2" value="07/Oct/2013" data-inline="true">
          </td>
          <td> <a href="#popupDialogPublish" data-rel="popup" data-role="button" data-icon='arrow-r'  data-inline="true" data-theme="e" data-mini="true" data-position-to="window">Publish</a></td>
        </tr>
       
        
       
      </tbody>
    </table>
                    </div>
                 <div data-role="popup" id="popupDialogPublish" data-overlay-theme="a" data-theme="c" data-dismissible="false" style="max-width:400px;" class="ui-corner-all">
					<div data-role="header" data-theme="a" class="ui-corner-top">
						<h1>Publish ?</h1>
					</div>
					<div data-role="content" data-theme="d" class="ui-corner-bottom ui-content">
						<h3 class="ui-title">Are you sure , do you want to publish ?</h3>
						
						<a href="#" data-role="button" data-inline="true"  data-theme="d" onClick="onPublishClick()">Yes</a>    
						<a href="#" data-role="button" data-inline="true"  data-theme="d" onClick="OnCancelPublish()">No</a>  
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
