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
        <link rel="apple-touch-icon-precomposed" href="../image/shortcut/By School.png" />
        <link rel="shortcut icon" href="../image/shortcut/By School.png">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
        <link rel="stylesheet" href="../css/custom.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
        <script src='../js/elpjs.js'></script>
    </head>
    <body>
        <div data-role="page" id="student_library" class="mp">   
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
            <div data-role="content" data-theme="c" id="content">
                <form>
                    <fieldset data-role="controlgroup">
                        <legend>My Library</legend>
                        <label for="select-native-8">Select A</label>
                        <select name="select-native-8" id="select-native-8" data-iconpos="left">
                            <option value="">Choose Grade Level</option>
                            <optgroup label="Elementary School">
                                <option value="1">1st</option>
                                <option value="2">2nd</option>
                                <option value="3">3rd</option>
                                <option value="4">4th</option>
                                <option value="5">5th</option>
                                <option value="6">6th</option>
                            </optgroup>
                            <optgroup label="Junior High School">
                                <option value="7">7th</option>
                                <option value="8">8th</option>
                                <option value="9">9th</option>
                            </optgroup>
                            <optgroup label="Senior High School">
                                <option value="10">10th</option>
                                <option value="11">11th</option>
                                <option value="12">12th</option>
                            </optgroup>
                        </select>
                        <label for="select-native-9">Select B</label>
                        <select name="select-native-9" id="select-native-9" data-iconpos="left">
                            <option value="">Choose Subject</option>
                        </select>
                    </fieldset>
                </form>
                <div data-role="collapsible-set" data-theme="b" data-content-theme="d">
                    <div data-role="collapsible" >
                        <h2>Books</h2>
                        <ul data-role="listview" data-filter="true" data-autodividers="true" data-filter-theme="c" data-divider-theme="d" name="books" id="books_list">

                        </ul>
                    </div>
                    <div data-role="collapsible" >
                        <h2>Videos</h2>
                        <ul data-role="listview" data-filter="true" data-autodividers="true" data-filter-theme="c" data-divider-theme="d" id="videos_list">
                           
                        </ul>
                    </div>


                </div>
            </div><!-- /content -->
            <div data-role="footer" data-position="fixed" data-theme="d" id="footer">
                <a href="#" data-role="button" data-rel="back" data-icon="arrow-l" data-theme="b" class="ui-btn-left" data-direction="reverse">Back</a>
                <h1>&copy; 2013 AAHG - ICT</h1>
                <a href="#" data-role="button" data-icon="delete" data-theme="b" class="ui-btn-right" data-transition="flow" id="logout">Logout</a>
            </div><!-- /footer -->
        </div><!-- /page -->
    </body>
</html>
