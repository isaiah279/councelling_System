<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- Bootstrap 5 JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<!-- Font Awesome 4-->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header class="header">
    <div class="profile"style="padding-top:5px;">
                <img src="main_logokabu.png" alt="profile_picture">
            </div>
        <p  class="logo"></p>
        <nav class="nav-items">
        
          <a href="#"style="font-size:1.2rem;">Home</a>
          <a href="#"style="font-size:1.2rem;">About</a>
          <a href="../chancelor/view_booking.php"style="font-size:1.2rem;">Contact</a>
          <p><a href="login.php"> </a></p>
          <a href="../Student/studentDashbord.php"style="font-size:1.2rem;">Student</a>
          <a href="../chancelor/view_booking.php"style="font-size:1.2rem;">Counsellor</a>
          <p id="demo"style="color:red;font-size:2rem;"></p>
          <a href="../adminFolder/studentlist.php">d</a>
</nav>
        <script>
let myVar = setInterval(myTimer ,1000);
function myTimer() {
  const d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>
      </header>
      <main>
        <div class="intro">
          <h1>kabarak councelling system</h1>
          <p>Councelling Booking sessions.</p>
          <button ><span>Learn More About us</span></button>
        </div>
        <div class="achievements">
          <div class="work">
            <i class="fas fa-atom"></i>
            <p class="work-heading">Services</p>
            <p class="work-text">The Counseling Department offers professional services for both students and staff of Kabarak University aimed at developing a whole person, psychologically, morally and spiritually. looking for new projects.</p>
          </div>
          <div class="work">
            <i class="fas fa-skiing"></i>
            <p class="work-heading">Our Moral Code</p>
            <p class="work-text">
As members of Kabarak University family, we purpose at all times and in all places, to set apart in one’s heart, Jesus as Lord. (1 Peter 3:15)</p>
          </div>
          <div class="work">
            <i class="fas fa-ethernet"></i>
            <p class="work-heading">Core Values</p>
              <ul>
                <li>Integrity</li>
                <li>Excellence & Professionalism</li>
                <li>Innovativeness & Creativity</li>
                <li>Commitment to serve</li>
              </ul>



          </div>
        </div>
        <div class="about-me">
          <div class="about-me-text">
            <h2 style="font-size: 1.2rem ;">About kabarak</h2>
            <p style="font-size: 1rem;">Kabarak University is not just any other university, we are distinctive in our academic performance coupled with spiritual vitality. I am a very good developer and I am always looking for new projects.</p>
          </div>
          <!-- <img src="https://images.unsplash.com/photo-1596495578065-6e0763fa1178?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="me"> -->
        </div>
      </main>
      <footer class="footer"style="backgroud-color:dackbrown;">
      
        <div class="col-1"style="margin-top:-140px;font-size: 1 rem;">
          <h3 style=" font-size: 1 rem;">LINKS</h3>
          <a href="#" >About us</a>
          <a href="#">Services</a>
          <a href="#">Contacts</a>
          <a href="#">Shop</a>
          <a href="#">Blog</a>
        </div>
        <div class="col-2"style="margin-top:-150px">
          <h3 style=" font-size: 1 rem;">NEWSLETTER</h3>
          <p>Our councellor wont be arount by <br> tuesday Take not</p>
        </div>
        <div class="col-4">
          <form action="">
          <textarea name="" id="" cols="10" rows="5"class="form-control"placeholder="Leave a Comment"></textarea>
          <!-- <input class="form-control" type="text" name="" id=""style="width:300px;"placeholder="Enter a message"> -->
          <input type="email" class="form-control"   placeholder="Enter email"style="width:300px;margin-top:10px"><br>
          <button style="margin :20px 0 30px 0" type="submit" class="btn btn-primary">Submit</button>          </form >
           <div class="icons"style="">
            
          <a style="background-color:#3b5998;padding:12px;border-radius:10px;margin-right:20px"class="btn btn-social text-white btn-facebook"><i class="fa fa-facebook"></i></a>
          <a style="background-color:#657786;padding:12px;border-radius:10px;margin-right:20px"class="btn btn-social text-white btn-twitter"><i class="fa fa-twitter"></i></a>

          <a style="background-color:20b20f;padding:12px;border-radius:10px;margin-right:20px" class="btn btn-social text-white btn-whatsaap"><i class="fa fa-whatsapp"></i></a>

          <a style="background-color:red;padding:12px;border-radius:10px;margin-right:20px"class="btn btn-social text-white btn-youtube"><i class="fa fa-youtube"></i></a>
          </div> 
          

        </div>
<div class="col-4">
  <h3 style="margin-top:-10px">contact</h3>
  <p>157,XYZ kabarak@gmail.com <br> Nakuru,Kenya</p>
  <p>Meet our Counsellors: <br>Rev. Julius Kiprono Langat
Student Counsellor <br>Pastor Esther Kapsir
Student Counsellor<br>Rev. Dickson Korir
Student Counsellor<br>Counselling Hours:<br>
Monday – Friday ( 8:00AM – 5:00 PM)
</p>
</div>
      </footer>
      <style>
  #demo{
          font-family: 'Algerian';
  color: red;
  animation-name: example;
  animation-duration: 4s;
  animation-iteration-count: infinite;
}
@keyframes example {
  0%   {color: red;}
  25%  {color: yellow;}
  50%  {color: blue;}
  100% {color: green;}
}
.intro p{
  animation-name: councel;
  padding: 20px;
  animation-duration: 4s;
  animation-iteration-count: infinite;
  transition: padding 50px,  transform 2s;;
}
@keyframes councel{
  0%   {color: red;}
  25%  {color: yellow;}
  50%  {color: blue;}
  100% {color: green;}
}
.intro button{
  padding: 10px 50px 10px 50px ;
}
.intro button{
  align-items: center;
 animation-duration: 4s;
  animation-name: butt;
  animation-iteration-count: infinite;
}
@keyframes butt{
  0%   {background-color: indigo;}
  
  25%  {background-color: blue;}
  50% {background-color: green;}
  75%{color: brown;}
  100%  {background-color: yellow;}
}
.col-4{
  font-size: 1rem;
  margin-right: 100px;
}
.nav-items{
  background-color: #360f0f;
  
}
.header{
  background-color: #360f0f;

}
.header nav a:hover{
  color: white;

}
.header nav p:hover{
  color: green;

}

.footer{
  background-color:#360f0f;
}
 .profile{
    margin-bottom: 30px;
    text-align: center;
}
.profile img{
    display: block;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin: 0 auto;
}
      </style>
</body>
</html>
