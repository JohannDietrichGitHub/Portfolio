<?php
require_once('connection.php');
logout($conn);
header("location: login.php");
exit;
?>