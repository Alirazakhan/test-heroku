<?php
  //if (isset($_POST['logout'])) {
  session_start();
  session_unset($_SESSION['login_user']);
  session_unset($_SESSION['user_type']);
  session_unset($_SESSION['login_id']);
  session_unset($_SESSION['LastLoginDate']);
  session_unset($_SESSION['LastLoginTime']);
  session_unset($_SESSION['is_loggedin']);
  session_destroy();
  header("Location:../task/index.php");
  exit();

  //}
?>