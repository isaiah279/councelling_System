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
session_start();

// initializing variables
$username = "";
$email    = "";
$password_1="";
$password_2="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'kabarak_db');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone=mysqli_real_escape_string($db, $_POST['phone']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phone)) { array_push($errors, "Phone number is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM reg_db WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO reg_db (username, email,phone, passwords) 
  			  VALUES('$username', '$email','$phone', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    header("Location: login.php");
  }
}

// ... 
?>

    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-graduation-cap"></i>
        <h1>kabarak counselling </h1>
        <p> Counselor  will encourage you to talk, open up and engage in self-reflection through therapy and counselling</p>
        <div class="btn-group">
          <a class="btn-item" href="learn to let it go">Learn To let it Go</a>
          <a class="btn-item" href="kabarak.ac.ke">Register Now</a>
        </div>
      </div>
      <form action="../adminFolder/studentlist.php"method='post'autocomplete="on">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Register here</h2>
        </div>
        <div class="info">
          <input class="fname" type="text" name="username" placeholder="Full name">
          <input type="text" name="email" placeholder="Email">
          <input type="text" name="phone" placeholder="Phone number">
          <input type="password" name="password1" placeholder="Password">
          <input type="password" name="password2" placeholder="confirm Password">
        </div>
        <button type="submit" class="btn" name="reg_user">Register</button>      </form>
    </div>
  </body>
</html>