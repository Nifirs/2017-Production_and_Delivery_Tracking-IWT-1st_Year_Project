<?php
session_start();
include("dbconnect.php");
$error="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{

        $myusername = $_POST['uname'];
        $mypassword = $_POST['pword'];

        $sql = "SELECT user_id FROM users
          WHERE username='$myusername' and password='$mypassword'";

        $result = mysqli_query($con, $sql);

        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $_SESSION['login_user'] = $myusername;
            header("location:Homepage.php");//redirecting
        } else {
            $error = "* Your Username or Password invalid";

        }


}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <h2 style="width: 100%;background-color: black;color: white;" ><CENTER>Login to buy our Produts</CENTER></h2>

    <link type="text/css" rel="stylesheet" href="new1.css"/>


</head>
<body text="black" background="gud3.jpeg">



<br/><br/>
<div  class="form1" >
    <form method="post" action="" name="log"  style="width: 32%;height: 800px " >
        <fieldset  style="border: solid ;background-color: antiquewhite;height: 600px;"  >

            <legend style="color: black"><b>Welcome to Moonlight official Web Page</b></legend><br/>
            <h3>Login here</h3><br/><br/>
            <font size="2px">

                <b>Enter Username</b><br/><input type="text" tabindex="0" name="uname" autofocus placeholder="Enter Username" autocomplete="off" style="background:transparent; width:310px;height:25px;border:1px #c2c4c6;font-size:14px;padding-left:8px;border-bottom-style: solid;border-top: transparent;border-left: transparent;border-right: transparent"/><br/><br/>
                    <b>Enter Your Password</b><br/><input type="password" tabindex="1" name="pword" placeholder="Enter Password"  autocomplete="off" style="background:transparent; width:310px;height:25px;border:1px #c2c4c6;font-size:14px;padding-left:8px;border-bottom-style: solid;border-top: transparent;border-left: transparent;border-right: transparent"/><br/><br/>
                <div style="font-size:13px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

                <input type="submit" value="Login" id="next"  style="background:black;width: 90px;height:30px ;color:white ">
                <input type="reset"  value="Reset" id="reset"  style="background:black;width: 90px;height:30px ;color:white ">
                <br/><br/>

            </font>
            <a  style="text-decoration: none" href="signup.php">If You are a New Member Sign Up here</a>
        </fieldset>
    </form>

</div>

<img src="moonn.jpg" width="100%" height=150  border="2px" id="moon">


</body>

</html>