<?php
session_start();

include 'lib/user.php';

if( isset($_POST['submit'])){

    $email= $_POST['email'];
    $passward=sha1($_POST['passward']);
  
   $res=selectuser($email,$passward);
   if(!empty($res)){
    $_SESSION['login']=$res;
    // print_r( $_SESSION['login']);
    header("location: home.php");
   }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Youtuobe login</title>
  </head>
  <body>
      <div class="container">
      <form action="login.php" method="post">
 

 <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"
      placeholder="Enter your email"  name= "email">
 </div>

 <div class="form-group">
    <label>Passward</label>
    <input type="passward" class="form-control"
      placeholder="Enter your passward"  name= "passward">
 </div>
    
  <button type="submit" class="btn btn-primary" name= "submit">Login</button>
</form>
      </div>
  </body>
</html>