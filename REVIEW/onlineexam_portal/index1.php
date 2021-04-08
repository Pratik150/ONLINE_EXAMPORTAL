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

          <form  action=" " method="POST" class="register-form" >
          <div ><p class="bg-success text-white px-4">
         <!--  -->
          </p></div>
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
              <i class="fas fa-lock"></i>
              <input type="password"placeholder="Confirm password" name="cpassword" class= "form-control" required="">
               
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
     $cpassword=$_POST['cpassword'];       
     $phone=$_POST['phone'];

     $pass= password_hash($password, PASSWORD_BCRYPT);
     $cpass= password_hash($cpassword, PASSWORD_BCRYPT);
    
     $token= bin2hex(random_bytes(16));
      $emailquery= "select * from user WHERE email ='$email' ";
      $query= mysqli_query($con,$emailquery);
      $emailcount = mysqli_num_rows($query);
      if($emailcount>0){
        echo "email already registered";
      }else{
        if($password==$cpassword)
        {

     $data="INSERT INTO user (name,email,password,cpassword,phone,token,status)VALUES('$name','$email','$pass','$cpass','$phone','$token', 'inactive')";
     $iquery=mysqli_query($con,$data);
    
    if($iquery){
      $subject = "Email Activation";
      $body = "Hi, $uname. Click here to activate your account http://localhost/testing/activate.php?token=$token";
      $senderemail= "From: thisisswati1999@gmail.com";
      if(mail($email, $subject, $body, $senderemail)){
        $_SESSION['msg'] = "check your email to activate your account $email";
        header('location:index.php');
      }else{
        echo "Email sending failed...";
      }
    }
    else{
      
     echo  '<script>
      alert("Not Inserted")
      </script>';


    }
  }
  else{
    echo '<script>alert("password not matching")</script>';
  }
  }
    
 
   }
?>
  
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
   header("location:dashboard.php");
 }
 else
 {

  echo '<script>alert("Invalid ! Please Enter Correct Password/Username")</script>';
  header("location:index.php");
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