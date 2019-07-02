<?php
include 'header.php';
require 'dbconnect.php';


?>

<h2 style="width: 100%;background-color: black;color: white;"><CENTER>Item Details</CENTER></h2>


<div align="center">

    <table  width="60%" border="1" style="background-color: white;color: white;padding: 0px;font-size: 17px">
        <tr >
            <td align="center" style="background-color:blanchedalmond;color: #333333"><b>Item Code</b></td>
            <td align="center" style="background-color:blanchedalmond;color: #333333"><b>Item Name</b></td>
            <td align="center" style="background-color:blanchedalmond;color: #333333"><b>Item Price</b></td>
            <td align="center" style="background-color:blanchedalmond;color: #333333"><b>Item Quantity</b></td>
            <td align="center" style="background-color:blanchedalmond;color: #333333"><b>Do you want to Edit</b></td>


        </tr>

        <?php

        $sql="SELECT *FROM items";
        $query=mysqli_query($con,$sql);

        while($row=mysqli_fetch_array($query)) {
            ?>

            <tr>
                <td style="border-radius: 0px"><?php echo $row['itemcode']; ?></td>
                <td style="border-radius: 0px" ><?php echo $row['itemname']; ?></td>
                <td style="border-radius: 0px"><?php echo $row['price']; ?></td>
                <td style="border-radius: 0px"><?php echo $row['quantity']; ?></td>
                <td style="border-radius: 0px"><a href='edit.php?' style="color:white">Edit</a></td>



            </tr>
            <?php
        }
        ?>



    </table>

</div><br/><br/>
<div class="img">
    <img src="moonn.jpg" width="100%" height="150"  border="2px" id="moon1">

</div>
<?php

include 'footer.php';

?>
