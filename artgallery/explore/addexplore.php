<?php

    require_once('../operation.php');


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

        <h1 class = "text-center my-3">Upload Txt and Images</h1>
        <div class = "container d-flex justify content-center">
            <form action = "../explore/explore1.php" method="post" class= "w-50" enctype="multipart/form-data">
            <?php inputFields("Number","number","","text") ?>
            <?php inputFields("Text","text","","text") ?>
            <?php inputFields("file","file","","file") ?>
            <button class="btn btn-dark" type = "submit" name = "submit">Submit</button>
</div>