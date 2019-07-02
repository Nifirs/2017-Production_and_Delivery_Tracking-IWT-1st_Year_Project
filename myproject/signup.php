<?php
session_start();
include("dbconnect.php");
$error="";
?>

<html>

<head>

    <link type="text/css" rel="stylesheet" href="new1.css"/>
    <title>Sign Up</title>
    <h2 style="width: 100%;background-color: black;color: white;" ><CENTER>Sign Up to buy our Produts</CENTER></h2>
</head>

<body text="black" background="gud3.jpeg" >
<?php
$error='<font color="red">' . " * You can not keep these Fields empty" . '</font>';


?>


<br/><br/>
<div  class="form1">
    <form  method="post" action=""  style="width: 32% " >
        <fieldset style="border: solid ;background-color: antiquewhite;height:870px"  >

            <legend style="color: black"><strong>Welcome to Moonlight official Web Page</strong></legend><br/>
            <h3>Sign Up here</h3><br/><b> Now you can be a Member</b> <br/><br/>
            <font size="2px"><b>    Enter Your Full Name</b> <br/><br/>
                <input type="text" autofocus tabindex="0" name="name"id="name" placeholder="Enter Your Name" autocomplete="off" style="background:transparent; width:310px;height:25px;border: 1px black;font-size:14px;padding-left:8px;border-bottom-style: solid;border-top: transparent;border-left: transparent;border-right: transparent"/><span><?php echo $error;?></span><br/><br/><br/>
                <b>Enter Your User ID</b><br/> <br/><input type="text" autofocus tabindex="0" name="userid" id="name" placeholder="Enter Your User ID" autocomplete="off" style="background:transparent; width:310px;height:25px;border: 1px black;font-size:14px;padding-left:8px;border-bottom-style: solid;border-top: transparent;border-left: transparent;border-right: transparent"/><span><?php echo $error;?></span><br/><br/><br/>
                <b>  Enter Your Username</b><br/> <br/><input type="text" tabindex="1" name="uname" id="uname" placeholder="Enter Username as Customer or Admin" autocomplete="off"  style="background:transparent; width:310px;height:25px;border:1px black;font-size:14px;padding-left:8px;border-bottom-style: solid;border-top: transparent;border-left: transparent;border-right: transparent"/><span><?php echo $error;?></span><br/><br/>
                <b>  Enter Your Password</b><br/> <br/><input type="password"  tabindex="2" name="pword" id="pword" placeholder="Enter Password" autocomplete="off" style="background:transparent; width:310px;height:25px;border:1px black;font-size:14px;padding-left:8px;border-bottom-style: solid;border-top: transparent;border-left: transparent;border-right: transparent"/><span><?php echo $error;?></span><br/><br/>
                <br/><br/><b> Enter Paying Method</b> <br/> <br/><select  name="pay" id="pay"  style="background:transparent ;width:310px;height:25px;border: 1px black;font-size:14px;padding-left:8px;border-bottom-style: solid;border-top: transparent;border-left: transparent;border-right: transparent"><span><?php echo $error;?></span>
                <option selected>---Plese Select one---</option>
                <option>Cash payment</option>
                <option>Bank ATM</option>
                    <option>Master card</option></select><br/><br/><br/>



                <br/><b>Enter the Contact Number</b> <br/><br/><input type="text" maxlength="10" tabindex="4" name="mobile" id="mobile" placeholder="Contact Number" autocomplete="off" style="background:transparent; width:310px;height:25px;border:1px black;font-size:14px;padding-left:8px;border-bottom-style: solid;border-top: transparent;border-left: transparent;border-right: transparent; "/><span><?php echo $error;?></span><br/><br/>
                <br/><br/>
                <input type="reset"  value="Reset" id="reset1"  style="background:black;width: 90px;height:30px ;color:white ">
                <input type="submit"  value="Sign up" id="next1"  style="background:black;width: 90px;height:30px ;color:white ">


                <br/><br/>

            </font>
            <a  style="text-decoration: none" href="login.php"> Already You are a Member Login here</a>
        </fieldset>

    </form>
</div>
<div class="img">
    <img src="moonn.jpg" width="100%" height="150"  border="2px" id="moon1">

</div>

</body>

</html>


<?php

if(isset($_POST["name"]) && isset($_POST["uname"]) &&isset($_POST["pword"])&&isset($_POST["pay"])&&isset($_POST["mobile"])) {
    $name1 = $_POST['name'];
    $uname1 = $_POST['uname'];
    $pword1 = $_POST['pword'];
    $pay1 = $_POST['pay'];
    $mobile1 = $_POST['mobile'];
    $userid = $_POST['userid'];


    if (trim($name1) == "" || trim($pword1) == "" || trim($uname1) == "" || trim($pay1) == "" || trim($mobile1) == ""|| trim($userid)=="" ) {


        echo "<script>
    alert(' One or more fields are empty , please check your Application Form');
    window.location.href='http://localhost/myproject/signup.php';
    </script>";


    } else {
        if (is_numeric($mobile1) && strlen($mobile1) == 10) {
            if (strlen($name1) >= 3) {
                if (strlen($pword1) > 8) {

                    $insertQuery="INSERT INTO users(user_id,username,password,user_uid,pay_method,user_contact) VALUES('$userid','$name1','$pword1','$uname1','$pay1','$mobile1')";


                    if(!mysqli_query($con,$insertQuery))
                    {

                        die('Error:'.mysqli_error());


                    }
                    else{
                        echo "<script>
					 alert(' Registration Successful,please Login now !');
						window.location.href='http://localhost/myproject/login.php';
				
					</script>}";

                    }




                } else
                    echo "<script>

               alert('Password should be greater than 8 characters');

                </script>";




            } else
                echo "<script>

               alert('Name can not be too short');

                </script>";



        }
        else
            echo "<script>

               alert('You should Enter a Numeric value for Contact Number with 10 Digits');

                </script>";

    }

}

else {

    echo "<script>
					 alert(' ~ You have to set the values First ! ~ ');
						
				
					</script>";

}


?>

