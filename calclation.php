<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname  = "shipping";
// Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname); // Check connection
 if (!$conn) {
die("Connection	failed:	". mysqli_connect_error());
 }
 $sql="CREATE TABLE ratings(rating VARCHAR(30) )";
if (mysqli_query($conn, $sql)) {
echo "Table student created successfully"; }
else {
echo "Error creating table: " . mysqli_error($conn); }
$a=$_POST['star1'];
if(isset($_POST['submit'])){
$sql = "INSERT INTO ratings(rating) VALUES ('$a')";
$result = mysqli_query($conn,$sql);
}
?>