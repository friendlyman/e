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
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
        <script src='../js/elpjs.js'></script>
        <style type='text/css'>
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

	/* Show the table header rows and set all cells to display: table-cell */ 
	
	.ui-table-reflow.ui-responsive {
display: inline-table;
}
        </style>
        <script type='text/javascript'>
            function cancelClick(){
                $( "#popupBasic" ).popup( "close" )
            }
            function submitClick(){
                
                alert("Your Assignment Submitted Sucessfully");
                $.mobile.showPageLoadingMsg();
                $.mobile.changePage("../student/OpenTasklist.php",{transition:"pop",reloadPage:true});
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

<!--<div data-role="header" id="subheader" data-theme="d">
	           <div class="ui-bar ui-bar-d">
	<span style="padding-left:10px;padding-right:10px">Grade - A</span>
    
    <h3> Your Assignments</h3>
    <span style="padding-left:10px;padding-right:10px"> Section - A1</span>
    
</div>
               
	        </div> /Sub header -->
            <div data-role="content" data-theme="c" id="content">
                <div id="tabContent" style="margin-left: 10%;margin-right: 10%">
              <table data-role="table" id="movie-table" data-mode="reflow" class="ui-responsive table-stroke">
      <thead>
        <tr>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <th></th>
          <td><label for="select-choice-mini" class="select">Select Subject</label>
<select name="select-choice-mini" id="select-choice-mini" data-mini="true" data-inline="true">
    <option value="standard">Chemistry</option>
    <option value="rush">Biology</option>
    <option value="express">English</option>
    <option value="overnight">Science</option>
        <option value="overnight">Mathematics</option>
</select></td>
          <td>
          <label for="select-choice-mini" class="select">Select Grade</label>
<select name="select-choice-mini" id="select-choice-mini" data-mini="true" data-inline="true">
    <option value="standard">Grade-A</option>
    <option value="rush">Grade-B</option>
    <option value="express">Grade-C</option>
    <option value="overnight">Grade-D</option>
</select>
          </td>
          <td>
          
           <label for="select-choice-mini" class="select">Select Section</label>
<select name="select-choice-mini" id="select-choice-mini" data-mini="true" data-inline="true">
    <option value="standard">Section-A1</option>
    <option value="rush">Section-A2</option>
    <option value="express">Section-A3</option>
    <option value="overnight">Section-A4</option>
</select>
          </td>
          <td></td>
          </tr>
        <tr>
          <th></th>
          <td colspan="3">
          <label for="text-basic">Task Title:</label>
          <input type="text" name="text-basic" id="text-basic" value="" placeholder="Enter Task Title">
          </td>
         
          
       </tr>
       
         <tr>
          <th></th>
          <td colspan="3">
         
<label for="textarea">Task Description:</label>
<textarea cols="25" rows="15" name="textarea" id="textarea" placeholder="Enter Task Description"></textarea>
          </td>
         
       </tr>
       
         <tr>
          <th></th>
         <td colspan="3">
          <label for="text-basic">Reference Links:</label>

          <textarea cols="25" rows="15" name="textarea" id="textarea" placeholder="Enter links with comma(,) seperation"></textarea>
          </td>
         
        </tr>
       
         <tr>
          <th></th>
          <td>
              <div data-role="fieldcontain"><label for="date-2">Start Date</label>
     <input type="date"  name="date-2" id="date-2" value="" data-inline="true">
             
         
             
              <label for="date-2">End Date</label>
     <input type="date"  name="date-2" id="date-2" value="" data-inline="true">
              </div>
          </td>
         <td>
         </td>
         <td></td>
        </tr>
        <tr>
            <th></th>
           
            <td>
             <input type="button" value="Publish" data-icon="check" data-theme="b" data-inline="true" data-mini="true">
                          <input type="button" value="Save" data-icon="gear" data-theme="b" data-inline="true" data-mini="true">
                          <input type="button" value="Clear" data-icon="refresh" data-theme="b" data-inline="true" data-mini="true">

            </td> 
            <td></td>
           <td></td>
        </tr>
      </tbody>
    </table>
                    </div>
            </div><!-- /content -->
            <div data-role="footer" data-position="fixed" data-theme="d" id="footer">
                <a href="#" data-role="button" data-rel="back" data-icon="arrow-l" data-theme="b" class="ui-btn-left" data-direction="reverse">Back</a>
                <h1>Main User Page</h1>
                <a href="#" data-role="button" data-icon="delete" data-theme="b" class="ui-btn-right" data-transition="flow" id="logout">Logout</a>
            </div><!-- /footer -->
            <div data-role="popup" id="popupBasic" data-position-to="window" data-theme="c">
         <h2>Are you sure for submission ?</h2>
    <input type="button" value="Yes" data-inset="true" onClick="submitClick()"/>
    <input type="button" value="No" data-inset="true" onClick="cancelClick()"/>
    </div>
        </div><!-- /page -->
        
      
    </body>
</html>
