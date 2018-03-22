<?php

require_once('/home4/gamergfx/public_html/careeradvantageonline/includes/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to('../admin.php');
}

$app_id = $_GET['id'];


  $result = delete_application($app_id);
  redirect_to('../admin.php');


?>