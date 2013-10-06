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
        <link rel="stylesheet" href="../css/MyStle.css" />
            <link rel="stylesheet" href="../css/MyStyles2.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
        <script src='../js/elpjs.js'></script>
        <script src='../js/MyScript2.js'></script>
<!--         <link rel="stylesheet" href="../css/MyStyles2.css" />-->
<!--        <script src="../js/MyScript.js"></script>-->
<!--        <link rel="stylesheet" href="../css/MyStle.css" />-->
<!--        <script src="../js/MyScript2.js"></script>-->
        
        <style type='text/css'>
/*            .ui-listview, .ui-li {
list-style: none;
padding-left: 30px;
padding-right: 10px;
padding-top: 15px;
}
.ui-btn-up-c, .ui-btn-hover-c, .ui-btn-down-c {
font-family: -webkit-pictograph;
}
.subjectList{
 
 
padding-left: 25px;
font-size: 16px;
font-family: inherit;
}
    
.ui-li-heading {
font-size: 20px;
color:#2E2E2E;
}
.ui-body-c, .ui-overlay-c {
background: cornsilk;
color: darkslategray;
font-family: sans-serif;
font-size: 17px;
}
.ui-table-reflow.ui-responsive {
display: inline-table;
}
.ui-grid-b{
    text-align: center;
}
.ui-block-a{
 text-align: right;
height: 20px;
color: #3D4B56;
font-family: Georgia;
}
.ui-block-c{
 text-align: left;
height: 23px;
color: red;
text-shadow: 0px 0.5px #5F6061;
font-size: 20px;
font-family: Georgia;
}
.ui-bar-b{
    border:0px;
}*/




        </style>
        
<!--        <script type='text/javascript'>
            function openAnchorClick()
            {
                
                $.mobile.changePage("../student/openTasklist.php",{transition:"pop",reloadPage:true});
            }
            function onAssignmentSaveYes(){
                alert("Your Assignment Saved Succesfully");
                $( "#popupDialog2" ).popup( "close" );
            }
            function onAssignmentSaveNo(){
                $( "#popupDialog2" ).popup( "close" );
            }
            function closeAnchorClick()
            {
            $.mobile.changePage("../student/ClosedTasklist.php",{transition:"pop",reloadPage:true});
            }
            function onAssignmentClearClick(){
                clearControls();
            }
            function onSubmitClick(){
              
              alert("Your Assignment Submitted Sucessfully");
              clearControls();
        // $.mobile.showPageLoadingMsg();
              $.mobile.changePage("../student/OpenTasklist.php",{transition:"pop",reloadPage:false});
            }
            function onCancelSubmit(){
                
                $( "#popupDialog" ).popup( "close" );
            }
            function moreDetailsPage()
            {
               
                $.mobile.changePage("../student/TaskDetail.php",{transition:"flow",reloadPage:false});
            }
            function clearControls()
         {
             var elements = document.getElementsByTagName("input");
            for (var ii=0; ii < elements.length; ii++) {
                
            if (elements[ii].type == "text" || elements[ii].type=="date"||elements[ii].type=="file") {
            elements[ii].value = "";
                                   }
                               }
                               var ele=document.getElementsByTagName("file");
                               
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
    <div class="ui-block-a"><div class="ui-bar ui-bar-d" style="height:20px;text-align: right">Grade : I </div></div>
    <div class="ui-block-b"><div class="ui-bar ui-bar-b" style="height:20px;text-align: center">Your Assignments</div></div>
    <div class="ui-block-c"><div class="ui-bar ui-bar-d" style="height:20px;text-align: left">Section : A</div></div>
</div>
<!--	           <div class="ui-bar ui-bar-d">
	<span style="padding-left:10px;padding-right:10px">Grade - A</span>
    -->
<!--    <h3> <span style="margin-right: 5%">Grade-A</span>Your Assignments<span style="margin-left: 5%">Section-A1</span></h3>-->
<!--    <span style="padding-left:10px;padding-right:10px"> Section - A1</span>
    
</div>-->
               
	        </div><!-- /Sub header -->
            <div data-role="content" data-theme="c" id="content" class="StudentClass">
                <div id="tabContent" style="margin-left: 6%;margin-right: 4%">
                <ul data-role="listview" id='subjectListUL' data-theme="c">
					<li data-theme="c">
						
                                                    <img src="../image/Student Page/maths.jpg" />
							<h3>Mathematics</h3>
							<p>
                                                            <span class='subjectList'>
                                                                <a href='#' data-role="button" data-mini="true" data-inline="true" data-transition="pop" onClick="openAnchorClick()">
                                                                open(3)
                                                                </a>
                                                            </span>
                                                             <span class='subjectList'>
                                                                 <a href='#'  data-role="button" data-mini="true" data-inline="true" data-transition="pop" onClick="closeAnchorClick()">
                                                                close(5)
                                                                </a>
                                                            </span>
                                                            
                                                        </p>                                                   </p>
						
					</li>
					<li>
						
							<img src="../image/Student Page/bio.jpg" />
							<h3>Biology</h3>
							<p>
                                                            <span class='subjectList'>
                                                                <a href='#' data-role="button" data-mini="true" data-inline="true" data-transition="pop" onClick="">
                                                                open(4)
                                                                </a>
                                                            </span>
                                                             <span class='subjectList'>
                                                                  <a href='#' data-role="button" data-mini="true" data-inline="true" data-transition="pop" onClick="">
                                                                close(3)
                                                                </a>
                                                            </span>
                                                            
                                                        </p>    
						
					</li>
					<li>
						
                                                    <img src="../image/Student Page/chemistry.jpg" />
							<h3>Chemistry</h3>
							<p>
                                                            <span class='subjectList'>
                                                               <a href='#' data-role="button" data-mini="true" data-inline="true" data-transition="pop" onClick="">
                                                                open(2)
                                                                </a>
                                                            </span>
                                                             <span class='subjectList'>
                                                                 <a href=='#' data-role="button" data-mini="true" data-inline="true" data-transition="pop" onClick="">
                                                                close(6)
                                                                </a>
                                                            </span>
                                                            
                                                        </p>    
						
					</li>
					<li>
						
							<img src="../image/Student Page/eng.jpg" />
							<h3>English</h3>
							<p>
                                                            <span class='subjectList'>
                                                                <a href='#' data-transition="pop" data-role="button" data-mini="true" data-inline="true" onClick="">
                                                                open(1)
                                                                </a>
                                                            </span>
                                                             <span class='subjectList'>
                                                                  <a href=='#' data-role="button" data-mini="true" data-inline="true" data-transition="pop" onClick="">
                                                                close(9)
                                                                </a>
                                                            </span>
                                                            
                                                        </p>    
					</li>
					<li>
						
							<img src="../image/Student Page/sci.jpg" />
							<h3>Science</h3>
							<p>
                                                            <span class='subjectList'>
                                                               <a href='#' data-transition="pop" data-role="button" data-mini="true" data-inline="true" onClick="">
                                                                open(4)
                                                                </a>
                                                            </span>
                                                             <span class='subjectList'>
                                                                  <a href='#' data-role="button" data-mini="true" data-inline="true" data-transition="pop" onClick="">
                                                                close(6)
                                                                </a>
                                                            </span>
                                                            
                                                        </p>    
						
					</li>
					
					
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
