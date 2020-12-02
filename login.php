<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($user = $db->logIn("users", $_POST['username'], $_POST['password'])) {
            //echo "Login Success";
            echo json_encode($user);
        } else echo "Username or Password wrong";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
