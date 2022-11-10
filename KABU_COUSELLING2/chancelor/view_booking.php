<?php $db=mysqli_connect('localhost','root','','kabarak_db');
session_start();
if(!isset($_SESSION['username'])){
    header("Location:login.php");
    exit();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body>
 <center>
 <nav style="background: green;padding:40px 40px;">
 <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;">Cancelor Board</h1>
    <a href="../Home_Folder/index.php">Home</a>
    <a href="sendemail.php">send email</a>
 </nav>
 <table class="table">
 <tr>
 <?php  
    if(isset($_GET['msg'])){
      $msg=$_GET['msg'];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">  
      '.$msg.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <th>No</th>
    <th>Name:</th>
    <th>Gender:</th>
    <th>Contact:</th>
    <th>Reg Number</th>
    <th>Date</th>
    <th>Time</th>
    <th>Email</th>
    <th>Message</th>
    <th>Accept/Decline</th>
    <th>Operations</th>
</tr>
<?php
 
$i=1; 
$qry='select*from booking_verification ';
$run=$db-> query($qry);
if($run->num_rows>0){
    while($row=$run->fetch_assoc()){
        $id=$row['fname'];
?>

<tr>
<td><?php echo $i++;   ?></td>
<td style="align:left"><?php echo $row['fname']  ?></td>
<td><?php echo $row['gender']  ?></td>
<td><?php echo $row['contact']  ?></td>
<td><?php echo $row['regnumber']  ?></td>
<td><?php echo $row['dates']  ?></td>
<td><?php echo $row['tim']  ?></td>
<td><?php echo $row['email']  ?></td>
<td><?php echo $row['texts']  ?></td>
<td><?php echo $row['decision']  ?></td>

<td>
<a type="button" class="btn btn-primary"href="verify.php?id=<?php echo $row['id']; ?>"> Edit</a>
<a type="button" class="btn btn-danger"href="delete.php?id=<?php echo $row['id']; ?>"onclick="return confirm('Are You Sure?')">Delete</a>

</td>
</tr>
<?php

    }
}
?>
</table>
</center>
<div class="container">
<h1>Contact</h1>
    
    <form method="post" action="sendemail.php"class="form">
        <label for="name">Name</label>
        <input type="text" name="name" id="name"class="form-control" required>
          <label for="exampleInputEmail1">Email Address:</label>
          <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
       
        <label for="message">Message</label>
        <textarea name="message" id="message"class="form-control" required></textarea>
        <br>
        <button class="btn btn-secondary ">Send</button>
        </div>
    </form> 
    <?php
$i=1; 
$qry="SELECT fname,dates,decision FROM booking_verification ";
$run=$db-> query($qry);
if($run->num_rows>0){
    while($row=$run->fetch_assoc()){
    $id=$row['fname'];
?>
<tr>
<td><?php echo $i++;   ?></td>
<td style="align:left"><?php echo $row['fname']?></td>
<td><?php echo $row['dates']  ?></td>
<td><?php echo $row['decision']  ?></td>
</tr>
<?php
    }
}
?>
 <!-- Footer -->
<footer class="page-footer font-small blue pt-4 bg-dark">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase">Footer Content</h5>
      <p>Here you can use rows and columns to organize your footer content.</p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Important Links</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#!">Home</a>
        </li>
        <li>
          <a href="#!">Contact</a>
        </li>
        <li>
          <a href="#!">Visit us</a>
        </li>
        <li>
          <a href="#!">about us</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Other links</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#!">Let's Chats</a>
        </li>
        <li>
          <a href="#!">Views</a>
        </li>
        <li>
          <a href="#!">Sessions</a>
        </li>
        <li>
          <a href="#!">Guidelines</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">Okinyi Fredrick  © 2022 Copyright <br>
  <a href="/"> f@technology.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->

</div>
</body>
</html>