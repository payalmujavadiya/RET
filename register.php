<?php
$servername="localhost";
%dbname="mydb";
$conn=new mysqli($servername,"","",$dbname)
if($conn->connect_error){
die("Connection failed: " .$conn->connect_error)}
$sql= "INSERT INTO employees VALUES($_POST["fname"],$_POST["lname"],$_POST["bday"],$_POST["email"],$_POST["desig"],$_POST["place"],$_POST["pwd"])";
if($conn->query($sql)==TRUE){
echo "New Record created successfully";}
else{
echo "Eroor: " .$sql . "<br>" .$conn->error;
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>#box {
    border-radius: 25px;
    border: 2px solid #B8860B;
    padding: 20px; 
    }
body {
    background-color: lightblue;
}



</style>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="login.html">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="login.html">Home</a></li>
        <li><a href="#">Page 1</a></li>
                  <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="register.html"><span class="glyphicon glyphicon-user"></span> Register</a></li>
             </ul>
    </div>
  </div>
</nav>
<div class="container">

  <form id="register" role="form" class="col-sm-4">
<fieldset id="box">
<legend><b>Register</b></legend>
      
      <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name">
<br>
      <input type="text" class="form-control" id="lname" name="lname"placeholder="Enter Last Name">
<br>
<input type="date" class="form-control" id="bday" name="bday" >
<br>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
   <br>
      <input type="text" class="form-control" id="desg" name="desig" placeholder="Enter Designation">
 <br>
      
      <input type="text" class="form-control" id="place" name="place" placeholder="Enter Your Place Of work">

    <br>
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
<br>
      <input type="password" class="form-control" id="cpwd" name="cpwd" placeholder="Enter Confirm password">

<br>
    <button type="submit" class="btn btn-default">Submit</button>
</div>
</fieldset>
  </form>

</div>

</body>
</html>
