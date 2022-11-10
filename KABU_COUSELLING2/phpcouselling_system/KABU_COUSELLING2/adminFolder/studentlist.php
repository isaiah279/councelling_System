<?php

 $db=mysqli_connect('localhost','root','','kabarak_db')
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
    <h1>Welcome to student List</h1>z
    <nav>
        <a href="reschdule.php">Booking list</a>
    </nav>
    
<table class="table">

    <tr class="thead-dark">
    <th>No</th>
    <th>Name:</th>
    <th>Email:</th>
    <th>Phone Number:</th>
    <th>Password:</th>
    <th>Operations:</th>

</tr>

<?php  $i=1; 
$query;
$qry='select*from reg_db';
$run=$db-> query($qry);
if($run->num_rows>0){
    while($row=$run->fetch_assoc()){
        $id=$row['username'];
?>
<tr>
<td><?php echo $i++;   ?></td>
<td style="align:left"><?php echo $row['username']  ?></td>
<td><?php echo $row['email']  ?></td>
<td><?php echo $row['phone']  ?></td>
<td><?php echo $row['passwords']  ?></td>
<td>
    <a href="">edit</a>
    <a href="delete.php?id=<?php echo $id; ?>"onclick="return confirm('Are You Sure?')"> Delete</a>
</td>
</tr>
<?php

    }
}
?>
</table>

</body>
</html>