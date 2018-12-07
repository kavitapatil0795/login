<?php
include 'connection.php';
$text1 =$_POST['text1'];
echo $text1;
$text2 =$_POST['text2'];
echo $text2;
$text=$_POST['text3'];
echo $text;
//encryption for password
$text3=MD5($text);
echo $text3;
$sql="insert into AddEmp(fullname,email,password) values ('$text1','$text2','$text3')"; 
$result=mysqli_query($con,$sql);
if(!$result)
{
echo 'data not inserted';
}
else
{
echo 'data inserted';
}
?>

