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
<style>
 
  #form1 {

display:none;

}
label, input {
  width: 70%;
  margin-top:30px;
}
</style>
</head>
<body>
<div class="navbar navbar-inverse nav">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
           <a style="color:white; font-size:30px;" class="brand" href="/">Welcome</a>
      
    <a style="color:white;padding-left:600px;font-size:23px;" href="login.php">log out</a>
          	<div class="nav-collapse collapse">
              <ul class="nav"> 
              </ul>
              </div>
            </div>
        </div>
    </div>
<h3 align="center">Employee Details</h3>
<button style="margin-left:30px;padding:10px;color:black;" type="button" id="formButton">Add Emp</button>
<form   method="post" action="/" id="form1" class="validate">
  <div class="form-field">
    <label for="full-name">Full Name</label>
    <input type="text" name="full-name" id="full-name" placeholder="Enter Name" required />
  </div>
  <div class="form-field">
    <label for="email-input">Email</label>
    <input type="email" name="email-input" id="email-input" placeholder="Enter mail" required />
  </div>
  <div class="form-field">
    <label for="password-input">Password</label>
    <input type="password" name="password-input" placeholder="Enter password" id="ps" required />
  </div>
  <div class="form-field">
    <label for=""></label>
    <button style="padding:10px;" type="button" id="submit">Submit</button>
  </div>
</form>
<table class="table-bordered table-hover" id="datatable">
    <thead style="background-color:gray;">
    <th > Full name</th>
    <th>Email</th>
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
<script>
  $(document).ready(function(){
  $("#submit").click(function(e){
 e.preventDefault();       
 var val1=$('#full-name').val();
 
 var val2=$('#email-input').val();
 
 var val3=$('#ps').val();

      $.ajax({
              type: "POST",
              url: "addemp.php",
              data:{text1:val1,text2:val2,text3:val3},
              success: function(result){
               alert(result);
         }});
  $("form").trigger("reset");
    });
  });

 $("#formButton").click(function(){
    $("#form1").toggle();
 });
 $(document).ready(function () {
            $('#datatable').dataTable();
        });
    </script>
</body>
</html>
