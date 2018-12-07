<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="emp.css">
 <script type="text/javascript" src="emp.js"></script>
</head>
<body>
<div class="wrapper">
  <div class="login-wrap">
      <form method="post">
    <h1>Login Account</h1>
    <input type="text"  id="ml" placeholder="Enter Email" required>
    <input type="password" id="ps" placeholder="Enter Password" required>
    <input type="submit" id="log" value="Login">
</form>
  </div>
       <?php
  session_start();
   echo "<b style='color:white; font-size:27px;'>".$_SESSION['username']."</b>";
   ?> 
</div>
</body>
</html>

 