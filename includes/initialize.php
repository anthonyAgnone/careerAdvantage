<?php 
    
    ob_start(); // output buffering is turned on
    session_start(); // turn on sessions

    require_once('/home4/gamergfx/public_html/careeradvantageonline/includes/functions.php');
    require_once('/home4/gamergfx/public_html/careeradvantageonline/includes/database.php');
    require_once('/home4/gamergfx/public_html/careeradvantageonline/includes/query_functions.php');
    require_once('/home4/gamergfx/public_html/careeradvantageonline/includes/validation_functions.php');
    require_once('/home4/gamergfx/public_html/careeradvantageonline/includes/auth_functions.php');

    $db = db_connect();
    $errors = [];
?>