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
<form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>
<!-- Form Name -->
<legend><center><h2><b>Registration Form</b></h2></center></legend><br>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label">Username</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="username" id="username" placeholder="username" class="form-control"  type="text">
</div>
</div>
</div>


<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">Lastname</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="lastname"  id="lastname" placeholder="Last name" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Password</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="password" id="password" placeholder="Password" class="form-control"  type="password">
</div>
</div>
</div>

<!-- Text input-->
<!-- <div class="form-group">
 <label class="col-md-4 control-label" >Confirm Password</label> 
 <div class="col-md-4 inputGroupContainer">
 <div class="input-group">
 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
</div>
</div>
 </div> 

<!-- Text input-->
   <div class="form-group">
<label class="col-md-4 control-label">E-Mail</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="email"  id="email" placeholder="E-Mail Address" class="form-control"  type="text">
</div>
</div>
</div>


<!-- Text input-->
   
<div class="form-group">
<label class="col-md-4 control-label">Contact No.</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input name="contact" id="contact" placeholder="Enter mob number" class="form-control" type="text">
</div>
</div>
</div>
<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button type="submit"  id="sub" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT
 <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                              
       <button type="button" class="btn"><a href="login.php">Login</a></button>
    
</div>
</div>


</fieldset>
</form>
</div>
</body>
</html>
