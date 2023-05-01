<?php
include 'connect.php';

if(isset($_POST['submit'])){

    $name =$_POST['name'];
    $email = $_POST['email'];
    $address =$_POST['address'];
    $password =$_POST['password'];

    $sql = "insert into `form`(name,email,address,password)
    values('$name','$email','$address','$password')";
    $result= mysqli_query($conn,$sql);
    if($result){
        // echo "Data inserted successfully";
        header('location:display.php');
    }else{
         die(mysqli_error($conn));
    }

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
<link rel="stylesheet"     href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
  </div>

  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" placeholder="Enter your address" name="address" autocomplete="off">
  </div>

  <div class="form-group">
    <label>password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
  </div>



  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form> 
    </div>
</body>
</html>