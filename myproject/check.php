<?php

if(isset($_POST["name"]) && isset($_POST["uname"]) &&isset($_POST["pword"])&&isset($_POST["pay"])&&isset($_POST["mobile"]))
{
    $name1 = $_POST["name"];
    $uname1 = $_POST["uname"];
    $pword1 = $_POST["pword"];
    $pay1 = $_POST["pay"];
    $mobile1 = $_POST["mobile"];


    if (trim($name1) == "" || trim($pword1) == "" || trim($uname1) == "" || trim($pay1) == "" || trim($mobile1) == "") {

       // $error1 = '<font color="red">' . " * One or more fields are empty , please check your Application Form" . '</font>';
      //  echo "$error1";
       // echo '<br/></br><br/>';

        echo "<script>
    alert(' One or more fields are empty , please check your Application Form');
    window.location.href='http://localhost/myproject/signup.php';
    </script>";


    }
    else
        if(is_numeric($mobile1))
			{
			if(strlen($name)<3)
			{
				$error="Name can not be too short";
		
		
			}
			else if(strlen($mypassword)<3)
			{
			$error="Password should be greater than 8 characters";
		
			}
			else
			
           header("Location: login.php");

        }
        else
            echo'<font color="red">'."* You should Enter a Numeric value for Contact Number".'</font>';


		}else
			echo"Structure problem!";


    ?>

