<?php
include("DataBaseConfig.php");

session_start();
$errorMsg = "";
$validUser = $_SESSION["login"] === true;
if(isset($_POST["sub"])) {
  $validUser = $_POST["user"] == "admin" && $_POST["pass"] == "pass";
  if(!$validUser) $errorMsg = "Invalid username or password.";
  else $_SESSION["login"] = true;
}
if($validUser) {
   header("Location: /login-success.php"); die();
}
?>