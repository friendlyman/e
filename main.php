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
        <div data-role="page" id="main">
            <div data-role="header" data-position="fixed" data-theme="d" id="header">
                <div class="center-wrapper">
                    <img src="image/moe_logo/logo.png" alt="MOE Logo" id="moe_logo"/>
                </div>
                <h1>Ministry of Education Portal</h1>
            </div><!-- /header -->
            <div data-role="content" data-theme="b" id="content">
                <div class="center-wrapper">
                    <img src="image/moe_logo/logo.png" alt="MOE Logo" id="moe_splash"/>
                    <p>Ministry of Education</p>
                    <p>وزارة التـربيــــــة والتـعـلـيــــم</p>
                    <a href="login.php" data-role="button" id="enter" data-transition="flow">Enter The Portal</a>
                </div>
            </div><!-- /content -->
            <div data-role="footer" data-position="fixed" data-theme="d">
                <div data-role="navbar">
                    <ul>
                        <li><a href="http://30.10.1.192/elpproject/info.php" data-icon="info" data-rel="dialog" data-transition="pop">Info</a></li>
                        <li><a href="http://30.10.1.192/elpproject/about.php" data-icon="gear" data-rel="dialog" data-transition="pop">About</a></li>
                    </ul>
                </div><!-- /navbar -->
            </div><!-- /footer -->
        </div><!-- /page -->

    </body>
</html>
