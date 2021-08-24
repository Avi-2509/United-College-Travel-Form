<?php
session_start();
$insert=false;
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
mysqli_select_db($con,'workshop');
$user = $_POST['uname'];
$password  =  $_POST['psw'];
$s="SELECT * FROM admin WHERE  username='$user' && password='$password' ";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        .navbar{
            background-color: lightblue;
            height:40px;
        }
        .navbar a{
            display:inline;
            margin:auto;
            float: right;
            text-decoration: none;
            color: darkblue;
            border:2px solid darkblue
           
        }
    </style>
</head>
<body>
    <div class="navbar">
       <a href="logout.php">Logout</a>
    </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">serial number</th>
      <th scope="col">Name</th>
      <th scope="col">Father Name</th>
      <th scope="col">Mother Name</th>
      <th scope="col">Gender</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">Aadhar Card</th>
      <th scope="col">College</th>
      <th scope="col">Course</th>
      <th scope="col">Branch</th>
      <th scope="col">year</th>
      <th scope="col">semester</th>
      <th scope="col">College id</th>
      <th scope="col">University roll number</th>
      <th scope="col">Date-time</th>
    </tr>
  </thead>
  <tbody>
      <?php

$select="SELECT * FROM tourinfo"  ;
   $query= mysqli_query($con,$select);
   $nums= mysqli_num_rows($query);
   while($res=mysqli_fetch_array($query))
{


?>
    <tr>
      
      <td><?php echo $res['serial number']; ?></td>
      <td><?php echo $res['name'];  ?></td>
      <td><?php echo $res['father_name'];  ?></td>
      <td><?php echo $res['mother_name'];  ?></td>
      <td><?php echo $res['gender'];  ?></td>
      <td><?php echo $res['email'];  ?></td>
      <td><?php echo $res['phone'];  ?></td>
      <td><?php echo $res['aadharcard'];  ?></td>
      <td><?php echo $res['college'];  ?></td>
      <td><?php echo $res['course'];  ?></td>
      <td><?php echo $res['branch'];  ?></td>
      <td><?php echo $res['year'];  ?></td>
      <td><?php echo $res['semester'];  ?></td>
      <td><?php echo $res['collegeid'];  ?></td>
      <td><?php echo $res['universityrollno'];  ?></td>
      <td><?php echo $res['date-time'];  ?></td>
      
    </tr>
    
  </tbody>
  <?php 

}
?>
</table>
    
</body>
</html>
