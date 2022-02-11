<?php 
if(isset($_POST['button'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloudproject";
// Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname); 
// Check connection
if (!$conn) {
die("Connection failed: ". mysqli_connect_error());
}
$a=$_POST['star1'];
$sql = "INSERT INTO ratings(ratings) VALUES ('$a')";
$result = mysqli_query($conn,$sql);
if($result){
    header("location:cloudproject.html");
}
// $query="select sum(ratings) from ratings";
// $fullresult=mysqli_query($conn,$query);
// $row=mysqli_fetch_array($fullresult);
// $query1=" select * from registration";
// $result1=mysqli_query($conn,$query1);
// $row1=mysqli_num_rows($result1); 
// if(($row['sum(ratings)']/$row1)>3){
// $message="the movie is hit";
// echo "<script>alert('$message');</script>";
// }
// else if(($row['sum(ratings)']/$row1)>=2 and ($row['sum(ratings)']/$row1)<=3){
// $message1="the movie is average";
// echo "<script>alert('$message1');</script>";
// }
// else {echo "<script>alert('the movie is flop');</script>";
// }
}
if(isset($_POST['button1'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloudproject";
// Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname); 
// Check connection
if (!$conn) {
die("Connection failed: ". mysqli_connect_error());
}
$a=$_POST['star2'];
$sql = "INSERT INTO rating1(rating1) VALUES ('$a')";
$result = mysqli_query($conn,$sql);
if($result){
    header("location:cloudproject.html");
}
// $query="select sum(rating1) from rating1";
// $fullresult=mysqli_query($conn,$query);
// $row=mysqli_fetch_array($fullresult);
// $query1=" select * from registration";
// $result1=mysqli_query($conn,$query1);
// $row1=mysqli_num_rows($result1); 
// if(($row['sum(rating1)']/$row1)>3){
// $message="the movie is hit";
// echo "<script>alert('$message');</script>";
// }
// else if(($row['sum(rating1)']/$row1)>=2 and ($row['sum(rating1)']/$row1)<=3){
// $message1="the movie is average";
// echo "<script>alert('$message1');</script>";
// }
// else {
// echo "<script>alert('the movie is flop');</script>";
// }
}
if(isset($_POST['button2'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloudproject";
// Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname); // 
// Check connection
if (!$conn) {
die("Connection failed: ". mysqli_connect_error());
}
$a=$_POST['star3'];
$sql = "INSERT INTO rating2(rating2) VALUES ('$a')";
$result = mysqli_query($conn,$sql);
if($result){
    header("location:cloudproject.html");
}
// $query="select sum(rating2) from rating2";
// $fullresult=mysqli_query($conn,$query);
// $row=mysqli_fetch_array($fullresult);
// $query1=" select * from registration";
// $result1=mysqli_query($conn,$query1);
// $row1=mysqli_num_rows($result1); 
// if(($row['sum(rating2)']/$row1)>3){
// $message="the movie is hit";
// echo "<script>alert('$message');</script>";
// }
// else if(($row['sum(rating2)']/$row1)>=2 and ($row['sum(rating2)']/$row1)<=3){
// $message1="the movie is average";
// echo "<script>alert('$message1');</script>";
// }
// else {
// echo "<script>alert('the movie is flop');</script>";
// }
}
if(isset($_POST['button3'])){$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloudproject";
// Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname); // 
// Check connection
if (!$conn) {
die("Connection failed: ". mysqli_connect_error());
}
$a=$_POST['star4'];
$sql = "INSERT INTO rating3(rating3) VALUES ('$a')";
$result = mysqli_query($conn,$sql);
if($result){
    header("location:cloudproject.html");
}
// $query="select sum(rating3) from rating3";
// $fullresult=mysqli_query($conn,$query);
// $row=mysqli_fetch_array($fullresult);
// $query1=" select * from registration";
// $result1=mysqli_query($conn,$query1);
// $row1=mysqli_num_rows($result1); 
// if(($row['sum(rating3)']/$row1)>3){
// $message="the movie is hit";
// echo "<script>alert('$message');</script>";
// }
// else if(($row['sum(rating3)']/$row1)>=2 and ($row['sum(rating3)']/$row1)<=3){
// $message1="the movie is average";
// echo "<script>alert('$message1');</script>";
// }
// else {
// echo "<script>alert('the movie is flop');</script>";
// }
}
// if($result1){// echo ""
// } 
if(isset($_POST['button4'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloudproject";
// Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname); // 
// Check connection
if (!$conn) {
die("Connection failed: ". mysqli_connect_error());
}
$a=$_POST['star5'];
$sql = "INSERT INTO rating4(rating4) VALUES ('$a')";
$result = mysqli_query($conn,$sql);
if($result){
    header("location:cloudproject.html");
}
// $query="select sum(rating4) from rating4";
// $fullresult=mysqli_query($conn,$query);
// $row=mysqli_fetch_array($fullresult);
// $query1=" select * from registration";
// $result1=mysqli_query($conn,$query1);
// $row1=mysqli_num_rows($result1); 
// if(($row['sum(rating4)']/$row1)>3){
// $message="the movie is hit";
// echo "<script>alert('$message');</script>";
// }
// else if(($row['sum(rating4)']/$row1)>=2 and ($row['sum(rating4)']/$row1)<=3){
// $message1="the movie is average";
// echo "<script>alert('$message1');</script>";
// }
// else {
// echo "<script>alert('the movie is flop');</script>";
// }
}
if(isset($_POST['button5'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloudproject";
// Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname); // 
// Check connection
if (!$conn) {
die("Connection failed: ". mysqli_connect_error());
}
$a=$_POST['star6'];
$sql = "INSERT INTO rating5(rating5) VALUES ('$a')";
$result = mysqli_query($conn,$sql);
if($result){
    header("location:cloudproject.html");
}
// $query="select sum(rating5) from rating5";
// $fullresult=mysqli_query($conn,$query);
// $row=mysqli_fetch_array($fullresult);
// $query1=" select * from registration";
// $result1=mysqli_query($conn,$query1);
// $row1=mysqli_num_rows($result1); 
// if(($row['sum(rating5)']/$row1)>3){
// $message="the movie is hit";
// echo "<script>alert('$message');</script>";
// }
// else if(($row['sum(rating5)']/$row1)>=2 and ($row['sum(rating5)']/$row1)<=3){
// $message1="the movie is average";
// echo "<script>alert('$message1');</script>";
// }
// else {
// echo "<script>alert('the movie is flop');</script>";
// }
}
if(isset($_POST['view1'])){
$servername = "localhost";$username = "root";
$password = "";
$dbname = "cloudproject";
// Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname); // 
// Check connection
if (!$conn) {
die("Connection failed: ". mysqli_connect_error());
}
$query="select sum(ratings) from ratings";
$fullresult=mysqli_query($conn,$query);
$row=mysqli_fetch_array($fullresult);
$query1=" select * from registration";
$result1=mysqli_query($conn,$query1);
$row1=mysqli_num_rows($result1); 
if(($row['sum(ratings)']/$row1)>3){
$message="the movie is hit";
echo "<script>alert('$message');</script>";
}
else if(($row['sum(ratings)']/$row1)>=2 and ($row['sum(ratings)']/$row1)<=3){
$message1="the movie is average";
echo "<script>alert('$message1');</script>";
}
else {
echo "<script>alert('the movie is flop');</script>";
}
}
if(isset($_POST['view2'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloudproject";
// Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname); // 
// Check connection
if (!$conn) {
die("Connection failed: ". mysqli_connect_error());
}
$query="select sum(rating1) from rating1";
$fullresult=mysqli_query($conn,$query);
$row=mysqli_fetch_array($fullresult);
$query1=" select * from registration";
$result1=mysqli_query($conn,$query1);
$row1=mysqli_num_rows($result1); 
if(($row['sum(rating1)']/$row1)>3){
$message="the movie is hit";
echo "<script>alert('$message');</script>";
}
else if(($row['sum(rating1)']/$row1)>=2 and ($row['sum(rating1)']/$row1)<=3){
$message1="the movie is average";
echo "<script>alert('$message1');</script>";
}
else {
echo "<script>alert('the movie is flop');</script>";
}
}
if(isset($_POST['view3'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloudproject";
// Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname); // 
// Check connection
if (!$conn) {
die("Connection failed: ". mysqli_connect_error());
}$query="select sum(rating2) from rating2";
$fullresult=mysqli_query($conn,$query);
$row=mysqli_fetch_array($fullresult);
$query1=" select * from registration";
$result1=mysqli_query($conn,$query1);
$row1=mysqli_num_rows($result1); 
if(($row['sum(rating2)']/$row1)>3){
$message="the movie is hit";
echo "<script>alert('$message');</script>";
}
else if(($row['sum(rating2)']/$row1)>=2 and ($row['sum(rating2)']/$row1)<=3){
$message1="the movie is average";
echo "<script>alert('$message1');</script>";
}
else {
echo "<script>alert('the movie is flop');</script>";
}
}
if(isset($_POST['view4'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloudproject";
// Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname); // 
// Check connection
if (!$conn) {
die("Connection failed: ". mysqli_connect_error());
}
$query="select sum(rating3) from rating3";
$fullresult=mysqli_query($conn,$query);
$row=mysqli_fetch_array($fullresult);
$query1=" select * from registration";
$result1=mysqli_query($conn,$query1);$row1=mysqli_num_rows($result1); 
if(($row['sum(rating3)']/$row1)>3){
$message="the movie is hit";
echo "<script>alert('$message');</script>";
}
else if(($row['sum(rating3)']/$row1)>=2 and ($row['sum(rating3)']/$row1)<=3){
$message1="the movie is average";
echo "<script>alert('$message1');</script>";
}
else {
echo "<script>alert('the movie is flop');</script>";
}
}
if(isset($_POST['view5'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloudproject";
// Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname); // 
// Check connection
if (!$conn) {
die("Connection failed: ". mysqli_connect_error());
}
$query="select sum(rating4) from rating4";
$fullresult=mysqli_query($conn,$query);
$row=mysqli_fetch_array($fullresult);
$query1=" select * from registration";
$result1=mysqli_query($conn,$query1);
$row1=mysqli_num_rows($result1); 
if(($row['sum(rating4)']/$row1)>3){
$message="the movie is hit";
echo "<script>alert('$message');</script>";
}else if(($row['sum(rating4)']/$row1)>=2 and ($row['sum(rating4)']/$row1)<=3){
$message1="the movie is average";
echo "<script>alert('$message1');</script>";
}
else {
echo "<script>alert('the movie is flop');</script>";
}
}
if(isset($_POST['view6'])){
//     $servername = "localhost";
//     $username = "root";
//     $password = "";
//     $dbname = "cloudproject";
//     // Create connection
//     $conn=mysqli_connect($servername,$username,$password,$dbname); // 
//     // Check connection
//     if (!$conn) {
//     die("Connection failed: ". mysqli_connect_error());
//     }
//     $query="select sum(rating5) from rating5";
//     $fullresult=mysqli_query($conn,$query);
//     $row=mysqli_fetch_array($fullresult);
//     $query1=" select * from registration";
//     $result1=mysqli_query($conn,$query1);
//     $row1=mysqli_num_rows($result1); 
//     if(($row['sum(rating5)']/$row1)
//     {
//       $message1="this movie is hit "
//     // echo "<script>alert('$message');</script>";
//     }
//     else if(($row['sum(rating5)']/$row1)>=2 and ($row['sum(rating5)']/$row1)<=3)
//     {
//     $message1="the movie is average";
//     echo "<script>alert('$message1');</script>";
//     }else {
    echo "<script>alert('the movie is flop');</script>";
//     }
  }


?>