<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname  = "myDB";
// Create connection
$conn	=	mysqli_connect($servername,	$username,
$password,$dbname); // Check connection if (!$conn)
{
die("Connection	failed:	"	. mysqli_connect_error()); }
/*$sql = "CREATE TABLE student4
( name VARCHAR(30) PRIMARY KEY, gender VARCHAR(30) NOT NULL,
address VARCHAR(50), reg_date	TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {
echo	"Table	student	created successfully"; }
else {
echo	"Error	creating	table:	"	. mysqli_error($conn); }
*/ if(isset($_POST['submit'])){
$sql = "INSERT INTO student4 (name, gender, address)
 
VALUES
('".$_POST["name"]."','".$_POST["sex"]."','".$_POST["pe_address"]."')";
$result = mysqli_query($conn,$sql);
}
?>
<html>
<head>
<style> table{
background-color:#00CED1;
}
</style>
<script>
function validateform()
{
var a=document.forms["myform"]["name"].value; var b=document.forms["myform"]["pe_address"].value; var c=document.forms["myform"]["sex"]; avali(a); bvali(b);
cvali(c); } function
avali(a){ if(a==""){
alert("please provide your name"); return false;
}
}
function
bvali(b){ if(b==""){
alert("please	provide	your	personal address"); return false;
}
}
function cvali(c)
{
for(var i=0;i<c.length;i++){ if(c[i].checked==true||c[i+1].checked==true)
{ return true;
}
 
else {
alert("please provide your gender"); return false;
}
} }
</script>
</head>
<body>

<form name="myform" onsubmit="return validateform()" method="post"> <table align ="center" cellpadding="10" cellspacing="10"> <tr><th colspan="2">Student Registration Form</th></tr> <tr>
<td>Name</td>
<td><input	type="text"	name="name"
/></td></tr> <tr>
<td>Father Name</td><td><input type="text" name="fname"
/></td></tr> <tr><td>Postal Address</td><td><input type="text" name="po_address" /></td></tr>
<tr><td>Personal Address</td>
<td><input type="text" name="pe_address" /></td></tr>
<tr><td>Sex</td><td><input type="radio" name="sex" value="male"/>Male<input	type="radio"	name="sex" value="female" />Female</td></tr>
<tr><td>City</td><td><select name="city"><option value="">select..</option></select></td></tr>
<tr><td>Course</td><td><select
name="course"><option value="">select..</option></select></td></tr>
<tr><td>District</td><td><select name="district"><option value="">select..</option></select></td></tr>
<tr><td>MobileNo</td><td><input	type="text"	name="number"
/></td></tr> <tr><td><input type="reset" value="reset" /></td><td><button type="submit" name="submit" />Submit Form</button></td></tr>
</table>
</form>
</body>
</html>
