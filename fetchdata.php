<?php
include 'connection.php';
    $sql="select * from AddEmps";
    $result=mysqli_query($con,$sql);
   
    echo "<table border='1' >
    <tr>
    <td align=center> <b>full name</b></td>
   <td align=center><b>email</b></td>
   <td align=center><b>password</b></td>";
    
    while($data = mysqli_fetch_row($result))
    {   
        echo "<tr>";
        echo "<td align=center>$data[0]</td>";
        echo "<td align=center>$data[1]</td>";
        echo "<td align=center>$data[2]</td>";
        echo "</tr>";
    }￼
    echo "</table>";￼
    ?>