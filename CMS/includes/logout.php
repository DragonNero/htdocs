<?php session_start(); ?>
<?php
echo $_SESSION['user_name'] = null;
echo $_SESSION['user_firstname'] = null;
echo $_SESSION['user_lastname'] =  null;
echo $_SESSION['user_role'] = null;

header("Location: ../index.php");
 ?>
