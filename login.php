<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "cloudproject";
// Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname); // Check connection
if (!$conn) {
die("Connection failed: ". mysqli_connect_error());
}
if(isset($_POST['login'])){
 $sql="select * from registration where username='".$_POST["user"]."' AND password='".$_POST["password"]."'";
 $result=mysqli_query($conn, $sql);
 $row=mysqli_fetch_array($result);
 echo "successfull";
 if(count($row)>0){
 header("location:cloudproject.html");
 }
 else{
echo "<script>alert('plese register');</script>";
header("location:register_page.php");
}

}
?>

<html>
<head>
<style>

.center {
position: fixed;
top:50%;
left:55%;
margin-top:-125px;
margin-left:-120px;
}
#login{
display: block;
width: 97%;
border: none;
background-color: #4CAF50;
color: white;
padding: 14px 28px;
font-size: 16px;
cursor: pointer;
text-align: center;

}
#login:hover{
background-color: rgb(57, 55, 223);
color: rgb(252, 253, 250);
}
.img {
background-image:url("download1.jpg");
height:110%;
background-position:center;
background-repeat:no-repeat;
background-size:cover;
}



</style>
</head>
<body >
<div class="img">
<div  style=" height:70px">
</div>
<div class="center">
<form name="myform" action="login.php" method="post" >
<table >
<tr>
<td> <lable style="font-size:26"> Username :</lable> </td>
<td><input  type="text" id="user" name="user" placeholder="username"required></td>
</tr>
<tr>
<td><lable style="font-size:26">Password :</lable></td>
<td><input  type="password" id="password" name="password" placeholder="password " required></td>
</tr>
<tr><td>
<tr ><td colspan="2" >
<button id="login" name="login" > Login </button>
</td>
</tr>
<tr>		<td></td>
<td> <a href="register_page.php" >Register</a></td>
</tr>
</table>
</div>
</form>
</div>
</body>
</html>
