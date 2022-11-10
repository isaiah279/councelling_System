
<?php 
$db=mysqli_connect('localhost','root','','kabarak_db');
session_start();
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
 <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;">Your History</h1>
 <nav>
    <a href="../Home_Folder/index.php">Home</a>
 </nav>
 <table class="table-sm">
 <tr class="table-black">
 <p>Hey, <?php echo $_SESSION['username']; 
 $loggedUser=$_SESSION['username'];

 ?>!</p>

 <?php  
    if(isset($_GET['msg'])){
      $msg=$_GET['msg'];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">  
      '.$msg.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <th >No</th>
    <th>Name:</th>
    <th>Gender:</th>
    <th>Contact:</th>
    <th>Reg Number</th>
    <th>Date</th>
    <th>Time</th>
    <th>Accept/Decline</th>
</tr>
<?php

//
// "SELECT * FROM `reg_db` WHERE fname='$username'
//                      AND passwords='" . md5($password) . "'";
//
$i=1; 
$qry="SELECT * FROM `booking_verification` WHERE fname='$loggedUser'";
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
<td><?php echo $row['decision']  ?></td>
<td>
</td>
</tr>
<?php echo $row['dates']  ?>
<?php
    }
}
?>
<?php 

$qry="SELECT *from booking_verification ";

?>
</table>
</center>
<style>
    body{
        background-color:dimgrey;

    }
</style>
</body>
</html>