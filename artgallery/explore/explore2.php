<?php


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
      
                </section>
                <div class="home-content">
            <div class="table-container">
                <div class="table-heading form-size">
                    <table class="styled-table">
    <thead>
        <tr>
            <th>#</th>
            <th>Picture</th>
            <th>Options</th>
            <th><a class="back" href="../admin/dashboard.php"><i class='bx bx-caret-right'></a><th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td><img src=../images/pix1.png width="180" height="150"></td>
            <td>
            <div class="action">
            <h2>Landscape by Jubilee</h2>
            <h5>Jubilee is one of our favourite pixel artists right now, for managing to combine pixel art with a painterly approach and create work that feels both instantly familiar and freshly original. Inspired by the animation of Studio Ghibli, this landscape is filled with magical promise.</h1>
            <a class="action-view" href="../images/pix1.png" class=>View</a>
            <a class="action-edit" href="#">Edit</a>
            <a class="action-delete" href="#">Delete</a>
            </div>
        </tr>
        <tr>
            <td>2</td>
            <td><img src=../images/pix2.jpg width="180" height="150"></td>
            <td>
            <div class="action">
            <h2>Jungle Temple</h2>
            <h5>A freelance games artist from Germany, Richard Schmidbauer(opens in new tab) has developed a clean style of pixel art that leans into the constraints of the medium to produce beautiful, impressionistic pieces. With its clear computer game influences, this evocative Jungle Temple scene is a great example of his approach.</h1>
            <a class="action-view" href="../images/pix2.jpg">View</a>
            <a class="action-edit" href="#">Edit</a>
            <a class="action-delete" href="#">Delete</a>
            </div>
        </tr>
        <tr>
            <td>3</td>
            <td><img src=../images/pix3.jpg width="180" height="150"></td>
            <td>
            <div class="action">
            <h2>Pixel China Mountains by Matej Jan</h2>
            <h5>Matej Jan(opens in new tab) started drawing digitally on his ZX Spectrum computer in the 1990s, and now edits a blog dedicated to pixel art called Retronator(opens in new tab). His own work ranges from images packed with witty pop culture references to detailed landscapes that push the medium to the limit, 
              such as these delightful Pixel China Mountains.</h1>
            <a class="action-view" href="#">View</a>
            <a class="action-edit" href="#">Edit</a>
            <a class="action-delete" href="#">Delete</a>
            </div>
        </tr>
          </tbody>
</table>

<footer>

</footer>

</body>
</html>
<?