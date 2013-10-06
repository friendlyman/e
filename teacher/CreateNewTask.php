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
        <link rel="stylesheet" href="css/MyStyles2.css" />
        <link rel="stylesheet" href="../css/MyStyles2.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
        <script src='../js/elpjs.js'></script>
        <script src="../js/MyScript.js"></script>
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
.ui-grid-b{
  text-align: center;
}

	/* Show the table header rows and set all cells to display: table-cell */ 
	
	.ui-table-reflow.ui-responsive {
display: inline-table;
}
        </style>-->
<!--        <script type='text/javascript'>
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
    <div class="ui-block-b"><div class="ui-bar ui-bar-b" style="height:20px;text-align: center"><h1>Create New Assignment</h1></div></div>
    <div class="ui-block-c"><div class="ui-bar ui-bar-d" style="height:20px"></div></div>
</div>
               
	        </div> 
            <div data-role="content" data-theme="c" id="content" class="teacherContent">
                <div id="tabContent" style="margin-left: 3%;margin-right: 5%">
<!--                <div id='elementContain' style='margin-top: 8%;'>
                <div id='test' style='margin-left: 28%;'>
                    <fieldset data-role="controlgroup" data-type="horizontal">
                        
                    
      
          <label for="select-choice-mini" class="select">Select Subject</label>
<select name="select-choice-mini" id="select-choice-mini">
    <option value="">Select Subject</option>
    <option value="standard">Chemistry</option>
    <option value="rush">Biology</option>
    <option value="express">English</option>
    <option value="overnight">Science</option>
        <option value="overnight">Mathematics</option>
</select>
      
                  
          <label for="select-choice-mini" class="select">Select Grade</label>
<select name="select-choice-mini" id="select-choice-mini" >
    <option value="">Select Grade</option>
    <option value="standard">Grade-A</option>
    <option value="rush">Grade-B</option>
    <option value="express">Grade-C</option>
    <option value="overnight">Grade-D</option>
</select>
                 
           
         
           <label for="select-choice-mini" class="select">Select Section</label>
<select name="select-choice-mini" id="select-choice-mini" >
    <option value="">Select Section</option>
    <option value="standard">Section-A1</option>
    <option value="rush">Section-A2</option>
    <option value="express">Section-A3</option>
    <option value="overnight">Section-A4</option>
</select>
          
          </fieldset>
                        </div>
                <div id="tabContent" style="margin-left: 10%;margin-right: 6%">
                    
        <div data-role="fieldcontain">
          <label for="text-basic">Task Title:</label>
          <input type="text" name="text-basic" id="text-basic" value="" placeholder="Enter Task Title">
        </div>
       
        
         <div data-role="fieldcontain">
<label for="textarea">Task Description:</label>
<textarea cols="25" rows="15" name="textarea" id="textarea" placeholder="Enter Task Description"></textarea>
          
         </div>
                    <div data-role="fieldcontain">
   
        
          <label for="text-basic">Reference Links:</label>

          <textarea cols="25" rows="15" name="textarea" id="textarea" placeholder="Enter links with comma(,) seperation"></textarea>
                    </div>
              <div data-role="fieldcontain"><label for="date-2">Start Date</label>
     <input type="date"  name="date-2" id="date-2" value="" data-inline="true">
              </div>
                    <div data-role="fieldcontain">
         
             
              <label for="date-2">End Date</label>
     <input type="date"  name="date-2" id="date-2" value="" data-inline="true">
              </div>
                </div>
                <div id='test' style='margin-left: 35%'>
           
            <div data-role="fieldcontain">
             <input type="button" value="Publish" data-icon="check" data-theme="b" data-inline="true" data-mini="true">
           
                   
                          <input type="button" value="Save" data-icon="gear" data-theme="b" data-inline="true" data-mini="true">
                   
                   
                          <input type="button" value="Clear" data-icon="refresh" data-theme="b" data-inline="true" data-mini="true">
                    </div>

            
                    </div>
                    </div>-->
                
                <ul data-role="listview" data-inset="true">
        <li class="ui-body ui-body-b">
            <fieldset class="ui-grid-b">
<!--                <div class="ui-block-a" style=""></div>-->
                <div class="ui-block-a" style="">
                        
                        
<select name="select-choice-mini" id="selectSubject"  data-theme="b">
    <option value="Select">Select Subject</option>
    <option value="Chemistry">Chemistry</option>
    <option value="Biology">Biology</option>
    <option value="English">English</option>
    <option value="Science">Science</option>
    <option value="Science">Statistics</option>
        <option value="Mathematics">Mathematics</option>
</select></div>
                <div class="ui-block-b" style="">
                      
                        
<select name="select-choice-mini" id="selectGrade"  data-theme="b" >
    <option value="Select">Select Grade</option>
    <option value="standard">Grade - 1</option>
    <option value="rush">Grade - 2</option>
    <option value="express">Grade - 3</option>
    <option value="overnight">Grade - 4</option>
</select></div>
                <div class="ui-block-c" style="">
                  
                    
<select name="select-choice-mini" id="selectSection"  data-theme="b" >
    <option value="Select">Select Section</option>
    <option value="standard">Section - A</option>
    <option value="rush">Section - B</option>
    <option value="express">Section - C</option>
    <option value="overnight">Section - D</option>
</select>
                   
                </div>
<!--                <div class="ui-block-e" style=""></div>-->
            </fieldset>
        </li>
        <li data-role="fieldcontain">
             <label for="text-basic">TaskTitle:</label>
          <input type="text" name="text-basic" id="text-basic" value="" placeholder="">
        </li>
        <li data-role="fieldcontain">
            <label for="textarea2">Description</label>
        <textarea cols="40" rows="8" name="textarea2" id="textarea2"></textarea>
        </li>
        <li data-role="fieldcontain">
            <label for="textarea2">Reference Links</label>
        <textarea cols="40" rows="8" name="textarea2" id="textarea2"></textarea>
        </li>
        <li data-role="fieldcontain">
           <fieldset class="ui-grid-a">
               <div class="ui-block-a" style="text-align:center">
                        
                       <label for="date-2">StartDate</label>
                       <input type="date"  name="date-2" id="date-2" value="" data-inline="true"><br><br>
                    </div>
                  
               <div class="ui-block-b" style="text-align: center">
                        
                       <label for="date-2">EndDate</label>
     <input type="date"  name="date-2" id="date-2" value="" data-inline="true"><br><br>
                    </div>
            </fieldset>
        </li>
        
        <li class="ui-body ui-body-b">
            <fieldset class="ui-grid-b">
                
<!--                <div class="ui-block-a" style=""></div>-->
               
                <div class="ui-block-a" style="text-align: right"><a href="#popupDialogPublish" data-rel="popup" data-position-to="window" data-role="button" data-transition="pop" data-icon="check" data-theme="a">Save & Publish</a></div>
                <div class="ui-block-b" style="text-align: center"><a href="#popupDialogSave" data-rel="popup" data-position-to="window" data-role="button" data-transition="pop" data-icon="gear" data-theme="a" >      Save     </a></div>
                <div class="ui-block-c" style="text-align: left"><a href="#" data-rel="popup" data-position-to="window" data-role="button" data-transition="pop" data-icon="refresh" data-theme="a" onClick="onClearClick()" >Clear</a></div>
<!--                 <div class="ui-block-e" style=""></div>-->
            </fieldset>
        </li>
    </ul>
                
                
                
                </div>
            </div><!-- /content -->
            <div data-role="footer" data-position="fixed" data-theme="d" id="footer">
                <a href="#" data-role="button" data-rel="back" data-icon="arrow-l" data-theme="b" class="ui-btn-left" data-direction="reverse">Back</a>
                <h1>Main User Page</h1>
                <a href="#" data-role="button" data-icon="delete" data-theme="b" class="ui-btn-right" data-transition="flow" id="logout">Logout</a>
            </div><!-- /footer -->
            
             <div data-role="popup" id="popupDialogPublish" data-overlay-theme="a" data-theme="c" data-dismissible="false" style="max-width:400px;" class="ui-corner-all">
					<div data-role="header" data-theme="a" class="ui-corner-top">
						<h1>Publish ?</h1>
					</div>
					<div data-role="content" data-theme="d" class="ui-corner-bottom ui-content">
						<h3 class="ui-title">Are you sure, do you want to publish ?</h3>
						
						<a href="#" data-role="button" data-inline="true"  data-theme="d" onClick="onPublishClick()">Yes</a>    
						<a href="#" data-role="button" data-inline="true"  data-theme="d" onClick="OnCancelPublish()">No</a>  
					</div>
	</div>
             <div data-role="popup" id="popupDialogSave" data-overlay-theme="a" data-theme="c" data-dismissible="false" style="max-width:400px;" class="ui-corner-all">
					<div data-role="header" data-theme="a" class="ui-corner-top">
						<h1>Save ?</h1>
					</div>
					<div data-role="content" data-theme="d" class="ui-corner-bottom ui-content">
						<h3 class="ui-title">Are you sure , do you want to save?</h3>
						
						<a href="#" data-role="button" data-inline="true"  data-theme="d" onClick="onSaveClick()">Yes</a>    
						<a href="#" data-role="button" data-inline="true"  data-theme="d" onClick="onCancelSave()">No</a>  
					</div>
	</div>
        </div><!-- /page -->
        
      
    </body>
</html>
