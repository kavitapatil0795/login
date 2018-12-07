<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="emp.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script type="text/javascript" src="emp.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#datatable').dataTable();
        });
    </script>
</head>
<body>
<table id="datatable">
    <thead>
    <th> full name</th>
    <th>email</th>
    </thead>
    <tbody>
     
 <?php
 
 include 'connection.php';

 $sql = "SELECT * FROM AddEmp";
 $result=mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
 if ($rows > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
   echo "<tr><td>" . $row["fullname"]. "</td><td>" . $row["email"] . "</td></tr>";
}

} 

?>

</tbody>
</table>
</body>
</html>