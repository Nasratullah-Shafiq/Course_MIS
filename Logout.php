<?php 
ob_start();
session_start();
unset($_SESSION['Change_Role_ID']);
unset($_SESSION['IS_LOGIN']);
unset($_SESSION['Change_Full_Name']);
unset($_SESSION['Cahange_User_ID']);
unset($_SESSION['Change_Username']);
header('Location: sign in.php');
session_destroy();

?>
