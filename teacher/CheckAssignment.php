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
        <link rel="stylesheet" href="css/MyStyles2.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
        <script src='../js/elpjs.js'></script>
        <script src="../js/MyScript.js"></script>
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
.ui-body-c, .ui-overlay-c {
background: cornsilk;
color: darkslategray;
font-family: sans-serif;
font-size: 17px;
}

/*	 Show the table header rows and set all cells to display: table-cell  */
	
	.ui-table-reflow.ui-responsive {
display: inline-table;
}
.ui-block-a{
    text-align: right;
}
.ui-block-b{
 text-align: left;   
}
.ui-bar-a {
    border:0px;
}
        </style>
        <script type='text/javascript'>
            $(document).ready(function(){
    alert("hai");
                  
         
             
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
<div data-role="page" id="submitted_students" class="mp">   
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
<div data-role="header" id="subheader" data-theme="a">
	          <div class="ui-grid-b">
    <div class="ui-block-a"><div class="ui-bar ui-bar-d" style="height:20px;text-align: right"> Complex Analysis</div></div>
    <div class="ui-block-b"><div class="ui-bar ui-bar-b" style="height:20px;text-align: center"><span class="pageTitle">Checking Assignment</span></div></div>
    <div class="ui-block-c"><div class="ui-bar ui-bar-d" style="height:20px;text-align: left">Start Date:21/Oct/2013</div></div>
</div>
               
	        </div><!-- /Sub header -->
            <div data-role="content" data-theme="c" id="content" class="teacherContent">
                <div id="tabContent" style="margin-left: 5%;margin-right: 2%;">
             
             <ul data-role="listview" data-inset="true">
        <li data-role="fieldcontain">
            <img src="../image/Student Page/stuIcon.png" height="100px" width="100px"/>
            <label for="textarea2"><u><b>Name</b></u>: Allen</label>
            <label for="textarea2"><u><b>Grade</b></u>: I</label>
            <label for="textarea2"><u><b>Section</b></u>: A</label>
            <label for="textarea2"><u><b>Subject</b></u>: Mathematics</label>
        </li>
         <li data-role="fieldcontain">
            <label for="textarea2">ReferenceLinks</label>
        <textarea cols="40" rows="8" name="textarea2" id="textarea2" readonly="readonly">
http://www.yahoo.com
http://www.google.com</textarea>

        
        </li>
        <li data-role="fieldcontain">
            <label for="textarea2">Marks</label>
<!--        <select name="select-choice-mini" id="selectSection" data-theme="b" data-inline="true" >
    <option value="Select">Select Mark</option>
    <option value="standard">Level - I</option>
    <option value="rush">Level - II</option>
    <option value="express">Level - III</option>
    <option value="overnight">Level - IV</option>
</select>-->
            
            <input type="text" name="text-basic" id="text-basic" value="" placeholder="Enter Marks" data-inline="true" style="width:  100px">
            
        </li>
       
       
         <li data-role="fieldcontain">
            <label for="textarea2">Comments</label>
        <textarea cols="40" rows="8" name="textarea2" id="textarea2"></textarea>
        </li>
        <li class="ui-body ui-body-b">
            <fieldset class="ui-grid-c">
                
               <div class="ui-block-a" style=""></div>
               
                <div class="ui-block-b" style="text-align: right"><a href="#popupDoneDialog" data-rel="popup"  data-role="button" data-position-to="window" data-transition="pop" data-icon="check" data-theme="a">Done</a></div>
                <div class="ui-block-c" style="text-align: center">
<!--                    <button type="submit" data-theme="a" data-icon='delete' >Cancel</button>-->
                </div>
                <div class="ui-block-d" style="text-align: left"></div>
<!--                 <div class="ui-block-e" style=""></div>-->
            </fieldset>
<!--            <fieldset class="ui-grid-a">
                

                    <div class="ui-block-a"><a href="#popupDialog" data-rel="popup" data-position-to="window" data-role="button" data-transition="pop" data-icon="check" data-inline="true" data-theme="b">Done</a></div>
                    <div class="ui-block-b"><button type="submit" data-theme="b" data-icon='delete' data-inline="true">Cancel</button></div>
            </fieldset>-->
        </li>
    </ul>
                   
                         
                    </div>
<!--                <div data-role="popup" id="popupDoneDialog" data-overlay-theme="a" data-theme="c" data-dismissible="false" style="max-width:400px;" class="ui-corner-all">
					<div data-role="header" data-theme="a" class="ui-corner-top">
						
					</div>
					<div data-role="content" data-theme="d" class="ui-corner-bottom ui-content">
						
						
						
					</div>
				</div>-->
                
                
                
                
                 <div data-role="popup" id="popupDoneDialog" data-overlay-theme="a" data-theme="c" data-dismissible="false" style="max-width:400px;" class="ui-corner-all">
					<div data-role="header" data-theme="a" class="ui-corner-top">
						<h1>Done ?</h1>
					</div>
					<div data-role="content" data-theme="d" class="ui-corner-bottom ui-content">
						<h3 class="ui-title">Are you sure, do you want to complete ?</h3>
						
						<a href="#" data-role="button"   data-theme="d" onClick="onCheckClick()">Yes</a>    
						<a href="#" data-role="button"   data-theme="d" onClick="onCheckCalcelClick()">No</a>  
					</div>
	</div>
                
                
                
                     </div>
               
                
        
                
                
                
            <!-- /content -->
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