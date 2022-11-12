 <?php

 include_once('dbFunction.php');

 $funObj = new dbFunction(); if(isset($_POST['login'])){

$emailid = $_POST['emailid'];
 $password =$_POST['password'];
  $user=$funObj->Login($emailid, $password);
   if ($user) {
     header("location:home.php");
     } else {
         echo "<script>alert('Emailid / Password Not Match')</script>";
     }

}

if(isset($_POST['register'])){

$username= $_POST['username'];
$emailid = $_POST['emailid']; 
$password= $_POST['password'];
$confirmPassword = $_POST['confirm_password'];
if($password == $confirmPassword){
     $email=$funObj->isUserExist($emailid);
      if($email){
         $register=$funObj->UserRegister($username, $emailid, $password);
          if($register){
             echo "<script>alert('Registration Successful')</script>"; 
          }else{
 echo "<script>alert('Registration Not Successful')</script>";
 } } else { echo "<script>alert('Email Already Exist')</script>"; 
 }}
 else {echo "<script>alert('Password Not Match')</script>";
 }}
 ?>
<!DOCTYPE html>
 <head>

<title>PHP Login and Registration Form Single Page</title>


</head>

<body style="background-color: pink;font-family: sans-serif;">


<h1 style="text-align: center;">PHP Login and Registration Form </h1><br><br>
<form name="login" method="post" action="">

<p style="text-align: center;font-size: 20px;font-weight: bold">
 <label>Email-ID:&ensp;&ensp; &ensp; &ensp; &ensp;&ensp;</label>
  <input style="padding: 10px 20px" name="emailid" required="required" type="email" placeholder="Enter your mail.."/>

</p>
 <p style="text-align: center;font-size: 20px;font-weight: bold">

<label>Password: &ensp; &ensp;&ensp; &ensp;</label>
 <input style="padding: 10px 20px" name="password" required="required" type="password" placeholder="Enter your password.."/>
</p>

<p style="text-align: center;padding: 20px;font-size: 20px;" class="login button">
 <input style="padding: 10px 20px;cursor: pointer;border:0;color: blue;
     backgroundground-color: pink" type="submit" name="login" value="Login" />
 </p>
 <p style="text-align: center;">
      Not yet Account ?
    <a href="register.php">Sign up</a>
</p> 
</form><br><br>


</body>

</html>
