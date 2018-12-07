<?php

include 'connection.php';

$text1 =$_POST['text1'];
$_SESSION['username']=$text1;

$text2 =$_POST['text2'];
$text =$_POST['text3'];
//encryption for password
$text3=MD5($text);
$text4 =$_POST['text4'];
$text5 =$_POST['text5'];
$sql="insert into EmpRegister (username,lastname,password,email,contact) values ('$text1','$text2','$text3','$text4','$text5')"; 

if(!mysqli_query($con,$sql))
{
echo 'data not inserted';
}
else
{
echo 'data inserted';
}
?>
