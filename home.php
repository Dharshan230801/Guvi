 <?php

include_once('dbFunction.php'); 
if(isset($_POST['welcome'])){ // remove all session variables session_unset();

// destroy the session 
      session_destroy();

}

if(!($_SESSION)){
     header("Location:index.php");
 }

?>

<!DOCTYPE html>

<head>

<title>Homepage</title>

</head>
 <body style="background-color: yellow; font-family: sans-serif;">

<form name="login" method="post" action=""> 
    <h1>Welcome <?=$_SESSION['username']?></h1> <br> 
    <p style="text-align: center;">
    <label for="emailid" class="uname" > Name:</label>
    <?=$_SESSION['username']?>
 
</p>

<p style="text-align: center;">
 <label for="email" class="youpasswd" > Email:</label> 
 <?=$_SESSION['email']?>

</p><br>

<p class="login button" style="text-align: center;">
 <input type="submit" name="welcome" value="Logout" />

</p>
 <p style="text-align: center;font-size: 20px;font-weight: bold"> 
 <label>Confirm Password:&ensp;&ensp;</label> 
 <input style="padding: 10px 20px" name="confirm password" required="required" 
 type="password" placeholder="Re-enter your password.."/>

</p>

<p style="text-align: center;"> 
<input style="padding: 10px 20px;cursor: pointer;border:0;color: white; 
background-color: blue"; types="submit" name="register" value="Register"/>

</p>

<p style="text-agn: center;"> 
Already a member?
 <a href="index.php"> Just log in </a>

</p>

</form><br><br>

<marquee> <p style="color: red">Developed by <a href="http://www.vetbossel.in" target=" _blank">VetBosSel</a></p></marquee>

</body>
</html>