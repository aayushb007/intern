<?php
if(isset($_REQUEST["submit"]))
{
$name=strval($_REQUEST["name"]);
$email=strval($_REQUEST["email"]);
$pass=strval($_REQUEST["pass"]);
$cpass=strval($_REQUEST["cpass"]);
$phone=$_REQUEST["phone"];
$con=mysqli_connect("localhost","root","");
if ($con)
{

mysqli_select_db($con,"data");

$query="insert into registration (`name`, `email`, `phone`, `pass`,`cpass`) values ('$name', $email', '$phone', '$pass','$cpass')";
$re=mysqli_query($con,$query);

if ($re) {
// header("location:index.php");
echo "<script >
alert('Sign in successfull!')
window.location.replace('./index.php');
</script>";

}
else{
 //header("location:index.php");
 echo "<script>
 alert('sign in not successfull!')
 window.location.replace('./index.php');
 </script>";
 
 } 
}

mysqli_close($con);
}
else
{
 //header("location:index.php");
echo "<script>alert('Invalid Capcha');</script>";
}
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Responsive Signup/Login form</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,600" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
   <section id="formHolder">

      <div class="row">

         <!-- Brand Box 
         <div class="col-sm-6 brand">
            <a href="#" class="logo">MR <span>.</span></a>

            <div class="heading">
               <h2>Marina</h2>
               <p>Your Right Choice</p>
            </div>

            <div class="success-msg">
               <p>Great! You are one of our members now</p>
               <a href="#" class="profile">Your Profile</a>
            </div>
         </div>
-->

         <!-- Form Box 
         <div class="col-sm-6 form">

           
            <div class="login form-peice switched">
               <form class="login-form" action="./reg.php" method="post">
                  
                     <label for="loginemail">Email Adderss</label>
                     <input type="email" name="loginemail" id="loginemail" required>
                  </div>

                  
                     <label for="loginPassword">Password</label>
                     <input type="password" name="loginPassword" id="loginPassword" required>
                  </div>

                  <div class="CTA">
                     <input type="submit" value="Login" >
                     <a href="#" class="switch">I'm New</a>
                  </div>
               </form>
            </div>End Login Form --> 
           

            <!-- Signup Form -->
            
               <form class="signup-form" action="./reg.php" method="post">

                              <label for="name">Full Name</label>
                     <input type="text" name="name" id="name" class="name">
                     <span class="error"></span>
            

                  
                     <label for="email">Email Adderss</label>
                     <input type="email" name="email" id="email" class="email">
                     <span class="error"></span>
                  

                  
                     <label for="phone">Phone Number - <small>Optional</small></label>
                     <input type="text" name="phone" id="phone">
                  

                  
                     <label for="password">Password</label>
                     <input type="password" name="pass" id="password" class="pass">
                     <span class="error"></span>
                  

                  
                     <label for="passwordCon">Confirm Password</label>
                     <input type="password" name="cpass" id="passwordCon" class="passConfirm">
                     <span class="error"></span>
                  

                  
                     <input type="submit" value="Signup Now" name="submit" id="submit">
                     <a href="#" class="switch">I have an account</a>
                  </div>
               </form>
            </div><!-- End Signup Form -->
         </div>
      </div>

   </section>


   <footer>
      <p>
         Form made by: <a href="http://mohmdhasan.tk" target="_blank">Mohmdhasan.tk</a>
      </p>
   </footer>

</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
