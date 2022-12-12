<?php

@include '../config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:../login/login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <link rel="stylesheet" href="../login/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hi, <span>Admin</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>Welcome to Art Gallery</p>
      <a href="../admin/dashboard.php" class="btn">Proceed</a>
   </div>

</div>

</body>
</html>