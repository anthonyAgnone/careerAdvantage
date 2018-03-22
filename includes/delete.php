<?php

require_once('/home4/gamergfx/public_html/careeradvantageonline/includes/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to('../admin.php');
}

$id = $_GET['id'];


  $result = delete_message($id);
  redirect_to('../admin.php');


?>