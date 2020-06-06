<?php
@session_start();
session_destroy();
echo "<script> alert('You logged out');
window.location.href('../html/login.html');</script>";
exit();

?>