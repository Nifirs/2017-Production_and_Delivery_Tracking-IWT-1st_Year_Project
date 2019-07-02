<?php
session_start();
$login_session=$_SESSION['login_user']
?>

<html>

<head>
    <title>MoonLight</title>
    <link rel="stylesheet" href="home.css"/>

</head>

<body bgcolor="#ffc0cb" text=black>
<h3 style="color: white; background-color:black;width: 100%;height: 10%;margin-top: 0px;margin-left: 0;font-family: 'Arial Rounded MT Bold'">&nbsp; &nbsp; Welcome to <font face="jokerman">MoonLight</font>&nbsp; Profile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class="user" src="user.png" width="28" height="28"style="border-radius: 15px" > &nbsp;&nbsp;&nbsp;<?php echo ($login_session); ?> &nbsp;&nbsp;||&nbsp <a href="logout.php"><input type="button" id="signout" value="Sign Out"  style="background:black;width: 90px;height:22px ;color:white;  cursor: pointer;border-radius:5px;border-color: white"></a></h3>



<div class="header" style="background-image: url(moonn.jpg)">
    <img class="img1" src="logo.jpg" width="122px" height="125px" align=left />


</div>


<div class="nav" >
    <nav >

        <a href="Homepage.php" >Home</a>
        <a href="news.php" >What's New </a>
        <a href="offers.php" >Special Offers </a>

        <a href="search.php" >Search</a>
        <a href="about.php" >About Us </a>
        <a href="contact.php" >Contact Us  </a>

        <a href="help.php">Help</a>
        <a href="Addingitem.php">Add a New Item</a>



    </nav>
</div>


<table  width="100.7%" style="border-color:lightgrey;text-align:left;"cellpadding="60px" bgcolor="lightgrey">
    <tr>
        <td>
            <img class="img3"src="soap2.jpg" width="115" height="74" >

        </td>
        <td>
            <img class="img4"src="soap3.jpg" width="115" height="74">

        </td>
        <td>
            <img class="img5"src="soap4.jpg" width="110" height="74">

        </td>
        <td>
            <img class="img6"src="s6.jpg" width="110" height="74">

        </td>
        <td>
            <img class="img6"src="soap5.jpg" width="110" height="74">

        </td>
        <td>
            <img class="img6"src="s1.jpg" width="110" height="74">

        </td>
        <td>
            <img class="img6"src="s9.jpg" width="110" height="74">

        </td>
        <td>
            <img class="img6"src="s5.jpg" width="110" height="74">

        </td>
        <td>
            <img class="img6"src="s4.jpg" width="110" height="74">

        </td>
        <td>
            <img class="img6"src="s7.jpg" width="110" height="74">

        </td>

    </tr>
</table>


<br/>



