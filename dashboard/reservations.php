
<?php
require "DataBaseConfig.php";
$id
if (isset($_POST['id'])) {
    $id = $_POST['id'];
  } 

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  }

  $sql = "SELECT * FROM reservations WHERE id = '$id'";
 
  $result = $DataBaseConfig->query($sql);

  $uesrs = $result ->fetch_assoc();

?>
<html>
	<head>
		<titel>reservations</tite>
		<link rel="stylesheet" type="text/css" href="">
		<link rel="stylesheet" type="text/css" href="">
	</head>
	<body>
		
		    <br><br>
    <table border="2">
      <tr>
        <td>Name:</td>
        <td> <?php  echo $uesrs['fullname']; ?></td>
      </tr>
      <tr>
        <td>Details:</td>
        <td> <?php  echo $users['username']; ?></td>
      </tr>
      <tr>
        <td>Details:</td>
        <td> <?php  echo $users['email']; ?></td>
      </tr>
    </table>
   

	</body>
</htmel>