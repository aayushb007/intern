

<?php

require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "hostelers009@gmail.com";
  $mail->Password = "Orton@1234";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  $db = mysqli_connect("localhost", "root", "", "data");
  $q="select * from registration where email='".$_REQUEST["email"]."'";
  $result=mysqli_query($db,$q);
  $r=mysqli_num_rows($result);
  $maiid=$_REQUEST["email"];
  $data=mysqli_fetch_array($result);
  
  //$pass=$r[];
  
  echo $data[4]." "; 
 
   $mail->From = "hostelers009@gmail.com";
  $mail->FromName = "Movie Bazaar";
  
  $mail->addAddress($maiid);
  
  $mail->isHTML(true);
 
  $mail->Subject = "test mail";
  $mail->Body = "<i>Your Password is</i>".$data[4];
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
  {
   echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
   //echo "Message has been sent successfully";
   echo "<script>alert('Error in message sended succesfully');window.location.replace('./forget.html');</script>";
  }
 ?>




 <?php
/*
require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "hostelers009@gmail.com";
  $mail->Password = "Orton@1234";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "hostelers009@gmail.com";
  $mail->FromName = "akshay";
  
  $mail->addAddress("hostelers009@gmail.com");
  
  $mail->isHTML(true);
 
  $mail->Subject = "test mail";
  $mail->Body = "<i>this is test mail</i>";
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
  {
   echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
   echo "Message has been sent successfully";
  }*/
 ?>