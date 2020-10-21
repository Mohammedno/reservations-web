<!DOCTYPE html>
<html>
<head>
<title>Users Page</title>
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
<th>fullname</th>
<th>Username</th>
<th>email</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "loginregister");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, fullname, username, email FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["fullname"] . "</td><td>" . $row["username"] . "</td><td>"
. $row["email"]. "</td></tr>";


}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>