
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
          