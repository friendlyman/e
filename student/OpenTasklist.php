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
        <link rel="stylesheet" href="../css/MyStle.css" />
        <link rel="stylesheet" href="../css/custom.css" />
        <link rel="stylesheet" href="css/MyStyles2.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
        <script src='../js/elpjs.js'></script>
        <script src='../js/MyScript2.js'></script>
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
background: cornsilk;
color: darkslategray;
font-family: sans-serif;
font-size: 17px;
}

	/* Show the table header rows and set all cells to display: table-cell */ 
	
	.ui-table-reflow.ui-responsive {
display: inline-table;
}
        </style>-->
        <script type='text/javascript'>
            $(document).ready(function(){
   
                  
         
//             
//  $('#subjectListId').on('click', 'a', function() {
//     
//      var anchor = $(this).find('img');
//      sessionStorage.setItem('subjectid', JSON.stringify(anchor.attr('id')));
//      if(anchor.attr('class')=='open'){
//        
//        $.mobile.changePage("../pages/OpenedTaskList.html",{transition:"pop",reloadPage:true});
//        }
//        else{
//            $.mobile.changePage("../pages/CloseTaskList.html",{transition:"pop",reloadPage:true});
//        }
//        
//      });
//      
     
});
            </script>
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
                       <div class="ui-block-a" style="text-align: right"><div class="ui-bar ui-bar-d" style="height:20px">Grade : I </div></div>
                       <div class="ui-block-b" style="text-align: center"><div class="ui-bar ui-bar-b" style="height:20px">Opened Assignments List</div></div>
                       <div class="ui-block-c" style="text-align: left"><div class="ui-bar ui-bar-d" style="height:20px">Section : A</div></div>
</div>
               
	        </div><!-- /Sub header -->
            <div data-role="content" data-theme="c" id="content" class="StudentClass">
                <div id="tabContent" style="margin-left: 5%">
               <table data-role="table" id="movie-table" data-mode="reflow" class="ui-responsive table-stroke">
      <thead>
        <tr>
<!--          <th data-priority="1">Grade</th>-->
<!--          <th data-priority="persist">Section</th>-->
          <th data-priority="2">Subject</th>
          <th data-priority="3"><abbr title="Rotten Tomato Rating">Unit</abbr></th>
          <th data-priority="4">Title</th>
          <th data-priority="1">Start Date</th>
          <th data-priority="4">Due date</th>
<!--          <th data-priority="4">Variance</th>-->
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
<!--          <th>A</th>
          <td>A1</td>-->
          <td>Mathematics</td>
          <td>I</td>
          <td>Complex Analysis</td>
           <td>
              28/Sep/2013
          </td>
          <td>
              5/Oct/2013
          </td>
<!--          <td>+2days</td>-->
          <td> <a href="#" data-role="button" data-icon='arrow-r'  data-inline="true" data-theme="e" data-mini="true" onClick="moreDetailsPage()">More</a></td>
        </tr>
        <tr>
<!--          <th>A</th>
          <td>A1</td>-->
          <td>Mathematics</td>
          <td>I</td>
          <td>Statistics Homework</td>
           <td>
              2/Oct/2013
          </td>
          <td>
              8/Oct/2013
          </td>
<!--          <td>+5days</td>-->
          <td> <a href="#" data-role="button" data-icon='arrow-r'  data-inline="true" data-theme="e" data-mini="true" onClick="moreDetailsPage()">More</a></td>
        </tr>
       
         <tr>
<!--          <th>A</th>
          <td>A1</td>-->
          <td>Mathematics</td>
          <td>I</td>
          <td>Written Optimization Analysis</td>
           <td>
              3/Oct/2013
          </td>
          <td>
              5/Oct/2013
          </td>
<!--          <td>+3days</td>-->
         <td> <a href="#" data-role="button" data-icon='arrow-r'  data-inline="true" data-theme="e" data-mini="true" onClick="moreDetailsPage()">More</a></td>
        </tr>
       
<!--         <tr>
          <th>A</th>
          <td>A1</td>
          <td>Mathematics</td>
          <td>I</td>
          <td>Chapter2 summary</td>
           <td>
              22/oct/1983
          </td>
          <td>
              22/oct/1983
          </td>
          <td>+2days</td>
          <td> <a href="#" data-role="button" data-icon='arrow-r'  data-inline="true" data-theme="e" data-mini="true" onClick="moreDetailsPage()">More</a></td>
        </tr>
       
         <tr>-->
<!--          <th>A</th>
          <td>A1</td>-->
<!--          <td>Mathematics</td>
          <td>I</td>
          <td>Chapter2 summary</td>
           <td>
              22/oct/1983
          </td>
          <td>
              22/oct/1983
          </td>
          <td>+2days</td>
         <td> <a href="#" data-role="button" data-icon='arrow-r'  data-inline="true" data-theme="e"  data-mini="true" onClick="moreDetailsPage()">More</a></td>
        </tr>-->
       
      </tbody>
    </table>
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
