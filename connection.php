<?php 

//connection to database no password for mysql
$con=mysqli_connect("localhost","root","root","testingdatabase");
if(!$con)
{
echo 'connection is not estalished';
}
?>