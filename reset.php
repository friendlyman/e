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
    </head>
    <body>
        <div data-role="page" id="reset">
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
                <form id="form_reset">
                    <h1>Enter your registered email</h1>
                    <h3 id="messagew"></h3>
                    <fieldset id="inputs">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required="yes" placeholder="Email" autofocus>
                    </fieldset>
                    <fieldset id="actions">
                        <input type="submit" name="submit" value="Reset"  id="submit">
                    </fieldset>
                </form>     
            </div><!-- /content -->
            <div data-role="footer" data-position="fixed" data-theme="d" id="footer">
                <h1>&copy; 2013 AAHG - ICT</h1>
                <a href="#" data-role="button" data-rel="back" data-icon="arrow-l" data-theme="b" class="ui-btn-left" data-direction="reverse">Back</a>
            </div><!-- /footer -->
        </div><!-- /page -->
    </body>
</html>

