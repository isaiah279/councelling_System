<!DOCTYPE html>
<html>
  <head>
    <title>Educational registration form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="signup.css">
  </head>
  <body>
  <?php
 
// initializing variables
$username = "";
$email    = "";
$password_1="";
//$password_2="";
$phone="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'kabarak_db');

// REGISTER USER
if (isset($_REQUEST['username'])) {
  // receive all input values from the form
  $username = stripslashes($_REQUEST['username']);
  
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email    = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = stripslashes($_REQUEST['phone']);
  $phone=mysqli_real_escape_string($db, $_POST['phone']);
  $password = stripslashes($_REQUEST['password1']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password1']);
  //$password_2 = stripslashes($_REQUEST['password2']);
 // $password_2 = mysqli_real_escape_string($db, $_POST['password2']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM reg_db WHERE fname='$username' AND email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if($user['email'] === $email) {
      echo "<div class='form'style='text-align:center;'>
      <h3>Notice ! user already exist</h3><br/>
      <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
      </div>";
    }
  // Finally, register user if there are no errors in the form
  else {
  	$password = md5($password_1);//encrypt the password before saving in the database
  	$query = "INSERT INTO reg_db (fname, email,phone, passwords) 
  			  VALUES('$username', '$email','$phone', '$password')";
  	$results=mysqli_query($db, $query);
    if ($results) {
      echo "<div class='form'>
            <h3>You are registered successfully.</h3><br/>
            <p class='link'>Click here to <a href='login.php'>Login</a></p>
            </div>";
  } else {
      echo "<div class='form'>
            <h3>Required fields are missing.</h3><br/>
            <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
            </div>";
  }

  	// $_SESSION['fname'] = $username;
  	// $_SESSION['success'] = "You are now logged in";
    // header("Location: login.php");
}}
else{
// 
?>
    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-graduation-cap"></i>
        <h1>kabarak counselling </h1>
        <p> Counselor  will encourage you to talk, open up and engage in self-reflection through therapy and counselling</p>
        <div class="btn-group">
          <a class="btn-item" href="learn to let it go">Learn To let it Go</a>
          <a class="btn-item" href="#">Register Now</a>
        </div>
      </div>
      <form action=""method='post'autocomplete="on">
         <!-- How registering went -->
        <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
        <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <?php if(isset($rmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $rmsg; ?> </div><?php } ?>

        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Register here</h2>
        </div>
        <div class="info">
          <input class="fname" type="text" name="username" placeholder="Full name"required>
          <input type="text" name="email" placeholder="Email"required>
          <input type="text" name="phone" placeholder="Phone number"required>
          <input type="password" name="password1" placeholder="Password"required>
          <!-- <input type="password" name="password2" placeholder="confirm Password"required> -->
        </div>
        <button type="submit" class="btn" name="submit">Register</button>      </form>
    </div>
  </body>
</html>
<?php
}
?>