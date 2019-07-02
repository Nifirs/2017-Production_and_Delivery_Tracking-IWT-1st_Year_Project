<?php
include("dbConnect.php");


$itemdelete=$_SERVER['QUERY_STRING'];



$sql="DELETE FROM items WHERE itemcode='$itemdelete'";
$query=(mysqli_query($con,$sql));

if($query)
{
    echo"<script>alert('1 Record is deleted');
 window.location.href='http://localhost/myproject/view.php'; 
</script>";


}
else{
    echo"<script>alert('An Error occured!');
 window.location.href='http://localhost/myproject/view.php'; 
</script>";


}
mysqli_close($con);
