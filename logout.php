<?php
session_start();

session_destroy();
$_SESSION = [];
session_unset();

header("location: login.php");
exit;

?>