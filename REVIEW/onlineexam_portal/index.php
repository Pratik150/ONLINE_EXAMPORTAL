<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Scoremore.com</title>
  </head>
  <body>

    <div class="container">
      <div class="forms-container">

        <!-- <login form start> -->

        <div class="login-register">
          <form method="POST"  class="login-form">
            <h2 class="title">Log In</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="name" >
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password"   name="password">
            </div>
            <input type="submit" name="login" value="Login" class="btn solid" >           
          </form>
          <!-- <login form ends> -->
        
            <!-- <registration start> -->
          <form method="POST" class="register-form" enctype="multipart/form-data" >
            <h2 class="title">Register </h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text"  placeholder="Username" name="name" class= "form-control"  required="">
             
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" class= "form-control" required="" >
            </div>           
          
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password"placeholder="Password" name="password" class= "form-control" required="">
              
            </div>
            <div class="input-field">
                <i class="fas fa-mobile-alt "></i>
                <input type="text"  placeholder="mobile no" name="phone" class= "form-control" required="">             
              </div>  
              <div class="input-field">
            <i class="fa fa-file-image-o" aria-hidden="true"></i>
            <input type="file"  name="image" class= "form-control"  required="" style="margin-top: 13px" >
          
            </div>          
            <input type="submit" class="btn " name="submit" value="Register" >         
          </form>
          <!-- <registration form ends> -->
        </div>
      </div>
<!-- <navigation buttons start> -->
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <img src="image.gif" width="50%">
            <h3>New here ?</h3>
            <p>
              Welcome to kick start Your career with our platform and best teachers.  
            </p>
            <button class="btn transparent" id="register-btn">
              Register
            </button>
          </div>          
        </div>
        <div class="panel right-panel">
          <div class="content">
             <img src="image1.gif" width="50%">
            <h3>Start with us !</h3>
            <p>
            " A dream is not that which you see while sleeping, it is something that does not let you sleep."<sub> -A.P.J Kalam</sub>
            </p>
            <button class="btn transparent" id="login-btn"> Log In </button>
          </div>      
        </div>
      </div>
    </div>
    <!-- <navigation buttins ends> -->
<script src="app.js"></script>
    
    
  </body>
</html>
<!-- <insert user data> -->
  <?php
   include("dbcon.php");
   if (isset($_POST['submit']))
    {
     $name=$_POST['name'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $phone=$_POST['phone'];
      $image=$_FILES['image']['name'];
   $tmpname=$_FILES['image']['tmp_name'];
    $file ="upload/".$image;
   move_uploaded_file($tmpname, $file);
     $data="INSERT INTO user (name,email,password,phone,image)VALUES('$name','$email','$password','$phone','$file')";
     $query=mysqli_query($con,$data);
   }

  ?>
<!-- <insert user data ends> -->
  <!-- <user check start> -->
    <?php
include("dbcon.php");

if (isset($_POST['login'])) 
{

 $a =$_POST['name'];
 $b =$_POST['password'];
 $data="SELECT * from user WHERE name='$a' AND password='$b'";
 $result=mysqli_query($con,$data);
 $new=mysqli_fetch_array($result);
 $total=mysqli_num_rows($result);
 if ($total==1) 
 {
      $_SESSION['id']=$new['id'];
      $_SESSION['name']=$new['name']; 
      $_SESSION['image']=$new['image']; 

   header("location:student/dashboard.php");
 }
 else
 {

  echo '<script>alert("Invalid ! Please Enter Correct Password/Username")</script>';
  // header("location:login.php");
 }

}
 ?>

    <!-- <user check ends> -->

    <!-- <admin login> -->
      <?php
include("dbcon.php");

if (isset($_POST['login'])) 
{

 $a =$_POST['name'];
 $b =$_POST['password'];
 $data="SELECT * from admin WHERE name='$a' AND password='$b'";
 $result=mysqli_query($con,$data);
 $total=mysqli_num_rows($result);
 if ($total==1) 
 {
      $_SESSION['id']=$new['id'];
      $_SESSION['name']=$new['name']; 
   header("location:admin/dashboard.php");
 }
 else
 {

  echo '<script>alert("Invalid ! Please Enter Correct Password/Username")</script>';
  // header("location:login.php");
 }

}
 ?>
<!-- <admin login ends> -->