<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'kabarak_db');
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM reg_db WHERE username='$username' AND passwords='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location:../Home_Folder/Student/studentDashbord.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
    <link href='style.css' rel='stylesheet' type='text/css'>

<div class="login">
  <div class="login-header">
    <h1>Login</h1>
  </div>
  <div class="login-form">
    <h3>Username:</h3>
    <input type="text"name="username" placeholder="Username"/><br>
    <h3>Password:</h3>
    <input type="password"name="password" placeholder="Password"/>
    <br>
    
    <button type="submit" class="btn" name="login_user">Login</button>
  
    <br>

    <br>
 
  </div>
  
</div>





















<style>
    body {
    background:url('http://cdn.wallpapersafari.com/13/6/Mpsg2b.jpg');
    margin:0px;
    font-family: 'Ubuntu', sans-serif;
      background-size: 100% 110%;
  }
  h1, h2, h3, h4, h5, h6, a {
    margin:0; padding:0;
  }
  .login {
    margin:0 auto;
    max-width:500px;
  }
  .login-header {
    color:#fff;
    text-align:center;
    font-size:300%;
  }
  /* .login-header h1 {
     text-shadow: 0px 5px 15px #000; */
  
  .login-form {
    border:.5px solid #fff;
    background:#4facff;
    border-radius:10px;
    box-shadow:0px 0px 10px #000;
  }
  .login-form h3 {
    text-align:left;
    margin-left:40px;
    color:#fff;
  }
  .login-form {
    box-sizing:border-box;
    padding-top:15px;
      padding-bottom:10%;
    margin:5% auto;
    text-align:center;
  }
  .login input[type="text"],
  .login input[type="password"] {
    max-width:400px;
      width: 80%;
    line-height:3em;
    font-family: 'Ubuntu', sans-serif;
    margin:1em 2em;
    border-radius:5px;
    border:2px solid #f2f2f2;
    outline:none;
    padding-left:10px;
  }
  .login-form input[type="button"] {
    height:30px;
    width:100px;
    background:#fff;
    border:1px solid #f2f2f2;
    border-radius:20px;
    color: slategrey;
    text-transform:uppercase;
    font-family: 'Ubuntu', sans-serif;
    cursor:pointer;
  }
  .sign-up{
    color:#f2f2f2;
    margin-left:-70%;
    cursor:pointer;
    text-decoration:underline;
  }
  .no-access {
    color:#E86850;
    margin:20px 0px 20px -57%;
    text-decoration:underline;
    cursor:pointer;
  }
  .try-again {
    color:#f2f2f2;
    text-decoration:underline;
    cursor:pointer;
  }
  
  /*Media Querie*/
  @media only screen and (min-width : 150px) and (max-width : 530px){
    .login-form h3 {
      text-align:center;
      margin:0;
    }
    .sign-up, .no-access {
      margin:10px 0;
    }
    .login-button {
      margin-bottom:10px;
    }
}
</style>
</body>
</html>