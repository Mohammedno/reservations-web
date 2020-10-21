<!DOCTYPE html>
<html>
<head>
<title>Users Page</title>
 <link rel="stylesheet" type="text/css" href="stylecheet.css">
<li><a href="logout.php">LogOut</a></li>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>hallname</th>
<th>halllocation</th>
<th>hallcapacity</th>
<th>Action</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "loginregister");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, hallname, halllocation, hallcapacity FROM hall_info";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["hallname"] . "</td><td>" . $row["halllocation"] . "</td><td>"
. $row["hallcapacity"]."</td><td>"
. "DELETE"."</td><td>"
. "UPDATE"."</td></tr>" ;


}
if (isset($_POST['save'])){
    $hallname = $_POST['hallname'];
    $halllocation = $_POST['halllocation'];
    $hallcapacity = $_POST['hallcapacity'];
    
    
    $mysqli->query("INSERT INTO hall_info (hallname, halllocation,hallcapacity) VALUES('$hallname', '$halllocation', '$hallcapacity')") or
            die($mysqli->error);
        
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";
    
    header("location: index.php");
    
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM hall_info WHERE id=$id") or die($mysqli->error());
    
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    
    header("location: index.php");
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM hall_info WHERE id=$id") or die($mysqli->error());
    //if (count($result)==1){
    if(isset($result->num_rows) && $result->num_rows > 0){
        $row = $result->fetch_array();
        $hallname = $row['hallname'];
        $halllocation = $row['halllocation'];
        $hallcapacity = $row['hallcapacity'];
       
    }
}

if (isset($_POST['update'])){
    $id = $_POST['id'];
    $hallname = $row['hallname'];
        $halllocation = $row['halllocation'];
        $hallcapacity = $row['hallcapacity'];
       
    
    $mysqli->query("UPDATE hall_info SET hallname='$hallname', halllocation='$halllocation', hallcapacity='$hallcapacity' WHERE id=$id") or
            die($mysqli->error);
    
    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";
    
    header('location: index.php');
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();    
    
?>

</table>
</body>
</html>
