<?php  $con=mysqli_connect('localhost','root','','kabarak_db');
$id=$_GET['id'];
$sql="DELETE FROM booking WHERE id=$id";
$result=mysqli_query($con,$sql);
if($result){
    header("Location:reschedule.php?msg=Record deleted succesfully");
}
?>
