<?php
if(isset($_POST['submit'])){
$review=$_POST["review"];
}
?>
<?php
$file=fopen("rating1.txt","a");
fwrite($file,$review ."\n");
fclose($file);
header("location:cloudproject.html");
?>