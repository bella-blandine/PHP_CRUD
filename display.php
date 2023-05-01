<?php
include 'connect.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link rel="stylesheet"     href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    
<div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a>
          
</button>
<a href="generate_pdf.php">FPDF</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S1 no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php

$sql = "select * from `form`";
$result = mysqli_query($conn,$sql);
if($result){
    while($row= mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $address=$row['address'];
        $password=$row['password'];
        echo ' <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$address.'</td>
        <td>'.$password.'</td>
        <td>
    <button class="btn btn-light" ><a href="update.php? updateid='.$id.'" class="text-success">Update</a></button>
    <button class="btn btn-warning"><a href="delete.php? deleteid='.$id.'" class="text-danger">Delete</a></button>
         </td>
      </tr>';
    }
}

?>

    
  </tbody>
</table>
</div>

</body>
</html>