<?php
include 'connection.php';
$mail =$_POST['email'];
$psw =$_POST['password'];
$sql="select * from EmpRegister where email='$mail'";
$result=mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
if($rows<=0)
      {
	echo 0;
      }
	else 
	{
      echo 1;
    }
       // $row = mysqli_fetch_assoc($result); 
      // if(!empty($row['email']) AND !empty($row['password']))
      //  {
      //       $_SESSION['email'] = $row['password']; 
      //       echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
      //   }
      //    else 
      //    { 
      //        echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
      //    }

?>
