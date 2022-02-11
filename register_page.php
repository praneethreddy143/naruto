<?php
if(isset($_POST['Register'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "cloudproject";
// Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname); 
// Check connection
if (!$conn) {
die("Connection failed: ".mysqli_connect_error());
}
$sql="CREATE TABLE registration(username VARCHAR(30) PRIMARY KEY,password VARCHAR(30),email varchar(220),city varchar(20),mobileno varchar(20))";
if (mysqli_query($conn, $sql)) {
echo "Table student created successfully";
 }
else {
echo "Error creating table: " . mysqli_error($conn);
 }
// if(isset($_POST['Register']))
 
//  echo "<script>alert('plese register');</script>";
$sql1="INSERT INTO registration(username,password,email,city,mobileno)VALUES('".$_POST["user"]."','".$_POST["password"]."','".$_POST["email"]."','".$_POST["city"]."','".$_POST["phone"]."')";
// $sql = "INSERT INTO registration(username,password,email,city,mobileno) VALUES ('".$_POST["user"]."','".$_POST["password"]."','".$_POST["email"]."','".$_POST["city"]."','".$_POST["phone"]."')";
$result1=mysqli_query($conn,$sql1);
// $result = mysqli_query($conn,$sql1);
if($result){
 echo "<script>successfull</script>";
 header("location:homepage.html");
}
else{
    header("location:login.php");
}    
   

}
?>
<html> 
    <head>
    <style>
    #register{
        display: block;
        width: 100%;
        border: none;
        background-color: #4CAF50;
        color: white;
        padding: 14px 28px;
        font-size: 16px;
        cursor: pointer;
        text-align: center;
    
    }
    #table{
            background-color: rgb(20, 19, 19);
            border-radius:8px;
    }
    input{
            padding:8px 14px;
            border-radius: 7px;

    }
    td{
            color: aliceblue;
    }
    </style>
    <script>
    function fun1(){
    var x= document.forms["myform"]["password"].value;
    var y= document.forms["myform"]["pssd1"].value;
    
    if(x != y )
    {
    alert(" password  does not  match");
    }
    }
    </script>
    </head>
    <body style="background-image:url('download1.jpg');">
    <div>
    <fieldset >
<div style="border:2px solid black;padding:8px;margin-left:38%;display:block;width: 300px;border-radius: 7px;margin-bottom: 10px;">
<p style="text-align:center;font-size: 17;"> registration form </p></div>
    <table align="center"  id="table"> 
    <form action="register_page.php" method="post">
    <tr> 
            <td> First Name:</td>
            <td><input type="text" id="fname" name="fname" required  ></td>
    </tr>
    <tr> 	<td> Middle Name </td>
            <td> <input type="text" id="mname" name="mname"  required></td>
    </tr>
    <tr> 	<td> Last Name </td>
            <td> <input type="text" id="lname" name="lname" required ></td>
    </tr>
    <tr> 	<td> Gender </td>
            <td> <input type="radio" id="gender" name="gender" > Male
            <input type="radio" id="gender" name="gender" > Female
            <input type="radio" id="gender" name="gender" > others</td>
    </tr>
    <tr> 	<td> Email   </td>
            <td> <input type="email" id="email" name="email" required ></td>
    </tr>
    <tr> 	<td> City </td>
            <td> <input type="text" id="city" name="city" required ></td>
    </tr>
    <tr> 	<td> Address </td>
            <td > <textarea style="border-radius :7px"; rows="5" cols="25" id="address">  </textarea></td>
    </tr>
    
    <tr> 	<td> Username</td>
            <td> <input type="text" id="user" name="user" required ></td>
    </tr>
    <tr> 	<td> Password</td>
            <td> <input type="password" id="password" name="password" required ></td>
    </tr>
    
    <tr> 	<td> Mobile number</td>
            <td> <input type="text" id="phone" name="phone" required ></td>
    </tr>
    
    
    <tr >
            <td colspan="2" >
    <button style="border-radius:7px" id="Register" name="Register" > Register </button>
    </td>
    </tr>
    <tr>
       <td> </td>
       <td> <a href="login.html" >Back to login page</a>
       </tr> 
      </table>   
    </fieldset>
    </div>
    </body>
    </html>