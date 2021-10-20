<?php
include ("config.php");
$a= $_REQUEST['sno'];
$b= $_REQUEST['name'];
$c= $_REQUEST['fname'];
$d= $_REQUEST['rollno'];
$e= $_REQUEST['class'];

$sql="INSERT INTO students(Sno,Name,Fathername, Rollno, Class)
VALUES('$a','$b','$c','$d','$e')";

if($db->query($sql)==TRUE)
{
	echo "You are registered now";
}
?>
