<?php
# FileName="Connection_php_mysqli.htm"
# Type="mysqli"
# HTTP="true"
$hostname_job = "localhost";
$database_job = "job";
$username_job = "root";
$password_job = "";
$job = mysqli_connect($hostname_job, $username_job, $password_job) or trigger_error(mysqli_error(),E_USER_ERROR);
?>
