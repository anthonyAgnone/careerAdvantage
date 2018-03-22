<?php

require_once('/home4/gamergfx/public_html/careeradvantageonline/includes/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to('jobs.php');
}

$job_id = $_GET['id'];


  $result = delete_job($job_id);
  redirect_to('jobs.php');


?>