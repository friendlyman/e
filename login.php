<?php
session_start();
if (isset($_COOKIE['myusername']) && isset($_COOKIE['mypassword'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MOE Portal</title>
        <meta name="viewport" http-equiv="Content-Type" content="text/html; charset=UTF-8; width=device-width;
              initial-scale=1"/>
        <link rel="apple-touch-icon-precomposed" href="image/shortcut/By School.png" />
        <link rel="shortcut icon" href="image/shortcut/By School.png">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
        <link rel="stylesheet" href="css/custom.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
        <script src='js/elpjs.js'></script>
        <script src='js/MyScript2.js'></script>
        <script src='js/MyScript.js'></script>
    </head>
    <body>
        <div data-role="page" id="login">
            <div data-role="header" data-position="fixed" data-theme="d" id="header">
                <div class="center-wrapper">
                    <img src="image/moe_logo/logo.png" alt="MOE Logo" id="moe_logo"/>
                </div>
                <h1>Ministry of Education</h1>
                <select name="select-language" id="select-language"  data-theme="b" data-inline="true" class="ui-btn-right">
                    <option value="English">English</option>
                    <option value="Arabic">Arabic</option>
                </select>
            </div><!-- /header -->
            <div data-role="content" data-theme="b" id="content">
                <form id="form_login">
                    <h1>Login to your account</h1>
                    <h3 id="message"></h3>
                        <label for="username">Username</label>
                        <input id="username" name="username" type="text" required="yes" placeholder="Username" autofocus >   
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password" required="yes" placeholder="Password" >               
                        <label for="remember">
                            <input id="remember" name="remember" type="checkbox"> Remember me
                        </label>
                    <input type="submit" id="submit" value="Log in" name="submit" >
                    <a href="reset.php" id="forgot" data-transition="slideup" >Forgot password?</a>
                </form>     
            </div><!-- /content -->
            <div data-role="footer" data-position="fixed" data-theme="d" id="footer">
                <h1>&copy; 2013 AAHG - ICT</h1>
            </div><!-- /footer -->
        </div><!-- /page -->

    </body>
</html>

