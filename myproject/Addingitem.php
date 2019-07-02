<?php

include 'header.php';
include'dbconnect.php';

?>




<h2 style="width: 100%;background-color: black;color: white;"><CENTER>Add new Items - Update - and Removal</CENTER></h2>




<div  class="form1" style="margin-left: 30px">
    <form   method="post" action=""  style="width: 36%; margin-left: 300px" >
        <fieldset  style="border: solid ;background-color: antiquewhite;height:870px"  >

            <legend style="color: black"><strong>Stock Details</strong></legend><br/>
            <h3>Insert - Update - Delete</h3><br/> <br/><br/>
            <font size="2px">
                <b>Enter the Product ID</b><br/> <br/><input type="text" autofocus name="pid" id="pid"  style="background:transparent; width:310px;height:25px;border:solid 2px black;font-size:14px;padding-left:8px"/><br/><br/>

                <b>    Enter the Product Name</b> <br/><br/>
                <input type="text" autofocus tabindex="0" name="pname"id="pname"   style="background:transparent; width:310px;height:25px;border: solid 2px black;font-size:14px;padding-left:8px"/><br/><br/>
                <b>Unit Price</b> <br/><br/><input type="text" tabindex="1" name="price" id="price"   style="background:transparent; width:310px;height:25px;border:solid 2px black;font-size:14px;padding-left:8px"/><br/><br/>
                <b> Quantity of the product in the Stock</b> <br/><br/><input type="text"  tabindex="2" name="qty" id="qty"  style="background:transparent; width:310px;height:25px;border:solid 2px black;font-size:14px;padding-left:8px"/><br/><br/>

                <br/><br/><br/><br/>

                <input type="submit"  value="Insert" name="insert"  style="background:black;width: 90px;height:30px ;color:white ">
                <input type="submit"  value="Update" name="update"  style="background:black;width: 90px;height:30px ;color:white ">
                <input type="submit"  value="Delete" name="delete"  style="background:black;width: 90px;height:30px ;color:white "><br/><br/><br/><br/>
                <a href="view.php"><input type="button"  value="View all" name="view"  style="background:black;width: 90px;height:30px ;color:white "></a><br/><br/>

                <input type="reset"  value="Reset" id="reset1"  style="background:black;width: 90px;height:30px ;color:white ">
                <br/><br/>

            </font>
        </fieldset>

    </form>
</div>


<div class="img">
    <img src="moonn.jpg" width="100%" height="150"  border="2px" id="moon1">

</div>

<?php

if(isset($_POST["pname"]) && isset($_POST["pid"]) && isset($_POST["price"]) &&  isset($_POST["qty"]))
{
   $pname=$_POST["pname"];
    $pid=$_POST["pid"];
    $price=$_POST["price"];
    $qty=$_POST["qty"];

    if (trim($pname) == "" || trim($pid) == "" || trim($price) == "" || trim($qty) == ""  ) {


        echo "<script>
    alert(' One or more fields are empty , please check your Application Form');
    window.location.href='http://localhost/myproject/Addingitem.php';
    </script>";
    }

    else
        if(isset($_POST["insert"]))
    {

        $sql="INSERT INTO items (itemname,itemcode,price,quantity) values ('$pname','$pid','$price','$qty')";
        $query=mysqli_query($con,$sql);
        if($query)
        {
            echo"<script>alert('1 Record is added successfully'); 

            </script>";

        }
        else{


            echo"<script>alert('An Error occured!'); 

            </script>";
        }

    }

     else  if(isset($_POST["update"]))
        {
            $sql="UPDATE items SET itemname='$pname',price='$price',quantity='$qty' WHERE  itemcode='$pid' ";
            $query=(mysqli_query($con,$sql));
            if($query)
            {
                echo"<script>

                    alert('Successfully Updated the Record'); 

            </script>";

            }
            else{
                echo"<script>alert('An Error occured!'); 

            </script>";

            }

        }

    }

else
{
    echo "<script>
					 alert(' ~ You have to set the values First ! ~ ');
						
				
					</script>";

}


//insert data to the database



if(isset($_POST["delete"]))
{
    $sql="DELETE FROM items WHERE itemcode='$pid'|| itemname='$pname' ";
    $query=(mysqli_query($con,$sql));
    if($query)
    {
        echo"<script>alert('1 Record is deleted'); 

            </script>";


    }
    else{
        echo"<script>alert('An Error occured!'); 

            </script>";


    }


}



?>

<?php

include 'footer.php';

?>

