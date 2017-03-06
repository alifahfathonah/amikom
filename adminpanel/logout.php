<?php 
session_start();
unset($_SESSION['SES_ADMIN']);
echo "<meta http-equiv='refresh' content='0; url=login.php'>";
exit;
?>