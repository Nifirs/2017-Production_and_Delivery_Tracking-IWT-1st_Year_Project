<html>

<head>
	<title>Homepage</title>
<link rel="stylesheet" href="style1.css"/>

</head>

<body bgcolor=#D0D3D4 text=black>
<?php

if(isset($_POST["mail"]) && isset($_POST["pword"])) {
    $email = $_POST["mail"];
    $pword = $_POST["pword"];


    if (trim($email) == "" || trim($pword) == "" ){

        $error = '<font color="red">' . " * One or more fields are empty , please check your Application Form" . '</font>';
        echo "$error";
        echo '<br/></br><br/>';
    } else if (is_email) {

    }     ?>

<div class="header" style="background-image: url(moonn.jpg)">

	<img class="img1" src="log11.jpg" width="122px" height="125px" align=left />


</div>


	<div class="nav" >
	<nav >
	
	<a href="Homepage.php" >Home</a>
		<a href="http://www.sliit.lk/" >What's New </a>
		<a href="http://www.sliit.lk/" >Special Offers </a>
	<a href="http://www.sliit.lk/" >Membership </a>
	<a href="http://www.sliit.lk/" >Search</a>
		<a href="http://www.sliit.lk/" >About Us </a>
		<a href="http://www.sliit.lk/" >Contact Us </a>


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

<h2 class="h1"><center><font color="#f0ffff">Categories</font></center></h2>
<br/>

<table class="t2" align="right" >
	<tr>
		<td width="100"><a href="FrontPage.html"><b><center><b>Logout</b></center></b></a></td>
	</tr>

</table>

	
	<table class="t1" >

		<tr><td><a href="http://www.sliit.lk/"><strong>Baby Soap</strong></a></td></tr>
		<tr><td><a href="http://www.sliit.lk/"><b>Beauty Soap</b></a></td></tr>
		<tr><td><a href="http://www.sliit.lk/"><b>Dress Washing Soap</b></a></td></tr>
		<tr><td><a href="http://www.sliit.lk/"><b>Dish Washing Soap</b></a></td></tr>
		<tr><td><a href="http://www.sliit.lk/"><b>Dish Washing Liquid</b></a></td></tr>
		<tr><td><a href="http://www.sliit.lk/"><b>Terms & Conditions</b></a></td></tr>

	</table>

	<div class="footer">
	

	Copyright @  MoonLight  Soap Products  - All  rights  Reserved

	</div>

</body>
</html>