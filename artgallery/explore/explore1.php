<?php

  include('../connection.php');
  if (isset($_GET['id'])){
  $id = $_GET['id'];
  mysqli_query($conn,"DELETE FROM `registration` WHERE  ='$id'");
	header('location:../explore/explore1.php');

  }
  if(isset($_POST['submit'])){
  $number = $_POST['number'];
  $text = $_POST['text'];
  $image = $_FILES['file'];

  $imagefilename = $image['name'];
  $imagefileerror = $image['error'];
  $imagefiletemp = $image['tmp_name'];

  $filename_separate = explode('.', $imagefilename);
  $file_extension = strtolower(end($filename_separate));

  $extension = array('jpeg', 'jpg', 'jfif', 'png');
  if (in_array($file_extension,$extension)){
    $upload_image = ''. $imagefilename;
    move_uploaded_file($imagefiletemp, $upload_image);
    $sql = "INSERT INTO `registration` (number,text,image) VALUES ('$number', '$text', '$upload_image')";
    $result = mysqli_query ($con,$sql);
    if($result){
    }else{
      die(mysqli_error($con));
    }
  }
}



    session_start();
    if(!isset($_SESSION['admin_name'])){
      header('location:../adminaccount/admin_page.php');

   }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Art Gallery
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../explore/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        img{
          width: 300px;
        }

    </style>
  </head>
  <body>
    
    <section class="homepage">
        <h2>EXPLORE</h2>
        <h3>THE</h3>
        <h4>COLLECTION</h4>
    </section>
      <section class="home-section">
    <nav>
         <div class="profile-details">
                <i class='bx bx-user-circle'></i>
                <span class="admin-name"><?php echo $_SESSION['admin_name']; ?></span> </div>

        <div class="link">
          <a href="../admin/dashboard.php">Home</a>
          <a href="#">About</a>
          <a href="#">Search</a>
          <a href="#">Settings</a>
            <a id="logout-link">
                <a href="../login/logout.php">
                <i class='bx bx-log-out'></i>
                    <span class="links-name">Logout</span>
                </a>  
              </nav>
              <h1 class = "text-center my-4">Pixel Art</h1>
              <div class="containter mt-5 d-flex justify-content-center">
                <table class = "table table-bordered w-100">
                <thead class = "table-dark">
                <tr>
                <th scope = "col">#</th>
                <th scope = "col">Image</th>
                <th scope = "col">Description</th>
                <td><a href = "../explore/addexplore.php" class = "button">Add</th>
                <td><a href = "../admin/dashboard.php" class = "button">Back</td>

              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM `registration`";
              $result = mysqli_query($con,$sql);
              $row = mysqli_fetch_assoc($result);
              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $text = $row['text'];
                $image = $row['image'];
              echo '<tr>
              <td>' . $id . '</td>
              <td>' . $text . '</td>
              <td><img src = ' . $image . ' /></td>
              <td><a class="button" href="#">Edit</a>
              <td class="contact-delete">
              <form action="delete.php" method="post">
              <input type="hidden" name="name" value="">
              <input type="submit" name="submit" value="Delete">
              </form>
              </td>
              </tr>';
              }
              ?>

              <body>
<html>