<!DOCTYPE html>
<html>
<head>
    <title>Registartion Form</title>
</head>

<body style="background-color: pink;font-family: sans-serif;">
                           <form name="login" method="post" action="index.php">

                              <h1 style="text-align: center;">Registration Form </h1><br><br> 
                              <p style="text-align: center;font-size: 20px;font-weight: bold">

                                  <label>UserName:&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</ label>
                                  <input style="padding: 10px 20px" name="username" required="required" type="text" placeholder="Enter your UserName.."/>
                           </p> 

                           <p style="text-align: center;font-size: 20px;font-weight: bold"> 
                               <label>Email-ID:&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;

                               </label> 
                               <input style="padding: 10px 20px" name="emailid" required="required" type="mail" placeholder="Enter your mail.."/>
                          </p>
                          <p style="text-align: center;font-size: 20px;font-weight: bold">

                                  <label>Password:&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</ label>
                                  <input style="padding: 10px 20px" name="password" required="required" type="password" placeholder="Enter your password.."/>
                          </p>
                          <p style="text-align: center;font-size: 20px;font-weight: bold"> 
                              <label>Confirm Password:&ensp;&ensp;</label>
                               <input style="padding: 10px 20px" name="confirm_password" required="required" type="password" placeholder="Re-enter your password.."/>

                           </p>

                            <p style="text-align:center;">

                                <input style="padding: 10px 20px; cursor: pointer;border:0;color: white; background-color: blue"; type="submit" name="register" value="Register"/>

                           </p> 
                           <p style="text-align:center;">
                                Already a member? 
                                <a href="index.php"> Just log in </a>
                           </p>
                    </form><br><br> 

 </body> 
 </html>