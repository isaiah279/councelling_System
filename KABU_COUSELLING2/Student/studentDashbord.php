

<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
  	// Redirect to user dashboard page
      header("Location:../Home_Folder/login.php");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/studentdash.css">
    <style>

    </style>
</head>
<body>


<style>
  
</style>
    <div class="wrapper">
        <!--Top menu -->
        <div class="sidebar">
           <!--profile image & text-->
            <!--menu item-->
            <div class="profile">
                <img src="images3.jpg" alt="profile_picture">
                <h3>Fredrick</h3>
                <p>Student</p>
            </div>
            <ul>
                <li>
                    <a href="../Home_Folder/index.php" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">My Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">User Profile</span>
                    </a>
                </li>
                <li>
                    <a href="bookSession.php">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="item">Booking</span>
                    </a>
                </li>
                <li>
                    <a href="history.php">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="item">History</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="item">comment</span>
                    </a>
                </li> -->
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-logout"></i></span>
                        <span class="item"><a href="../Home_Folder/logout.php">logout</a></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="section">
        <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
          <img src="images3.jpg" alt=""width:200px height="400px">
      	</h3>
      </div>
  	<?php endif ?>

    
</div>
            <div class="top_navbar">
                
                <div class="hamburger">

                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
               <div class="youloged"style="float:right">
                 <!-- logged in user information -->
                 <?php  if (isset($_SESSION['username'])) : ?>
                        <p style="margin-right:100px;">Welcome <strong> <?php echo $_SESSION['username']; ?></strong></p>
                    <?php endif ?>
               </div>
            </div>
        </div>
        </div>
    </div>
  <script>
var hamburger = document.querySelector(".hamburger");
hamburger.addEventListener("click", function(){
    document.querySelector("body").classList.toggle("active");
})
  </script>
</body>
</html>