<?php
include("dbConnect.php");

echo "<br>";

$pid=$_POST['pid'];
$pname=$_POST['pname'];
$price=$_POST['price'];
$qty=$_POST['qty'];


$query="UPDATE items SET itemname='$pname',price='$price',quantity='$qty' where itemcode='$pid'";

$sql = mysqli_query($con,$query);

if (!$sql) {die(mysqli_error());}
else
{
    echo "<script>

  alert('Selected Item details are updated');
    window.location.href='http://localhost/myproject/view.php'; 
    </script>";
}

mysqli_close($con);
