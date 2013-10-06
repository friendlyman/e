<?php

session_start();
session_destroy();
if (isset($_COOKIE['myusername'])):
    setcookie('myusername', '', time() - 7000000, '/');
endif;
if (isset($_COOKIE['mypassword'])):
    setcookie('mypassword', '', time() - 7000000, '/');
endif;
?>