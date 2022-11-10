<?php  $con=mysqli_connect('localhost','root','','kabarak_db');
$id=$_GET['id'];
$sql="DELETE FROM booking_verification WHERE id=$id";
$result=mysqli_query($con,$sql);
if($result){ 
    header("Location:view_booking.php?msg=Record deleted succesfully");
}
?>