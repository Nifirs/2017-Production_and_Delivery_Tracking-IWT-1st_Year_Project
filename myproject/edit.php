<?php
include 'header.php';
require 'dbconnect.php';


?>

<h2 style="width: 100%;background-color: black;color: white;"><CENTER>Edit Item Details</CENTER></h2>

<?php

$pid=$_SERVER['QUERY_STRING'];
$sql="SELECT *FROM items WHERE itemcode='$pid'";
$query=mysqli_query($con,$sql);

if (!$query) {
    die(mysql_error());
}
$row=mysqli_fetch_array($query)

?>



<div align="center">

    <form  method="post" action="itemupdate.php">

        <table  width="60%" border="1" style="background-color: white;color: white;padding: 0px;font-size: 17px">

            <h3>Single Item Edition</h3>


            <tr>
        <td>Item ID</td><td  style="border-radius: 0"><input  type="text" name="pid" style="border-radius: 3px;height: 30px;font-size: 18px" value=<?php echo $row[0] ?>></td>
            </tr>

        <tr>
            <td>Item Name</td><td style="border-radius: 0" ><input type="text" name='pname' style="border-radius: 3px;height: 30px;font-size: 18px"  value=<?php echo $row[1]; ?>></td>
        </tr>

        <tr>
            <td>Unit Price</td><td style="border-radius: 0"><input type="text" name='price' style="border-radius: 3px;height: 30px;font-size: 18px"  value=<?php echo $row[2]; ?>></td>
        </tr>

        <tr>
            <td>Quantity</td><td style="border-radius: 0"><input type="text" name="qty" style="border-radius: 3px;height: 30px;font-size: 18px"  value=<?php echo $row[3]; ?>></td>
        </tr>


        </table><br/>

        <input type="submit"  value="Update" name="update"  style="background:black;width: 90px;height:36px ;color:white ">
        <input type="submit"  value="DELETE" name="update"  style="background:black;width: 90px;height:36px ;color:white ">

        <input type="reset"  value="Reset" id="reset1"  style="background:black;width: 90px;height:36px ;color:white ">

    </form>

    </div>

<br/><br/>



<div class="img">
    <img src="moonn.jpg" width="100%" height="150"  border="2px" id="moon1">

</div>



<?php

include 'footer.php';

?>

<?php
mysqli_close($con);
?>