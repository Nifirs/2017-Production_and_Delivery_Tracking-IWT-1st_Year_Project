<?php
/////this is a copy of addingitem.php
include 'header.php';
include'dbconnect.php';

?>




<h2 style="width: 100%;background-color: black;color: white;"><CENTER>Order Products to buy</CENTER></h2>




<div  class="form1" style="margin-left: 30px">
    <form   method="post" action=""  style="width: 36%; margin-left: 300px" >
        <fieldset  style="border: solid ;background-color: antiquewhite;height:870px"  >

            <legend style="color: black"><strong>Stock Details</strong></legend><br/>
            <h3>Insert Update Delete</h3><br/> <br/><br/>
            <font size="2px"><b>    Enter the Product Name</b> <br/><br/>
                <input type="text" autofocus tabindex="0" name="name"id="name"   style="background:transparent; width:310px;height:25px;border: 1px black;font-size:14px;padding-left:8px;border-bottom-style: solid;border-top: transparent;border-left: transparent;border-right: transparent"/><br/><br/>
                <b>Enter the Product ID</b><br/> <br/><input type="text" autofocus tabindex="0" name="userid" id="name"  style="background:transparent; width:310px;height:25px;border: 1px black;font-size:14px;padding-left:8px;border-bottom-style: solid;border-top: transparent;border-left: transparent;border-right: transparent"/><br/><br/>
                <b> Product Price</b> <br/><br/><input type="text" tabindex="1" name="uname" id="uname"   style="background:transparent; width:310px;height:25px;border:1px black;font-size:14px;padding-left:8px;border-bottom-style: solid;border-top: transparent;border-left: transparent;border-right: transparent"/><br/><br/>
                <b> Stock Product Quantity</b> <br/><br/><input type="password"  tabindex="2" name="pword" id="pword"  style="background:transparent; width:310px;height:25px;border:1px black;font-size:14px;padding-left:8px;border-bottom-style: solid;border-top: transparent;border-left: transparent;border-right: transparent"/><br/><br/>

                <br/><br/><br/><br/>

                <input type="submit"  value="Insert" id="insert"  style="background:black;width: 90px;height:30px ;color:white ">
                <input type="submit"  value="Update" id="update"  style="background:black;width: 90px;height:30px ;color:white ">
                <input type="submit"  value="Delete" id="delete"  style="background:black;width: 90px;height:30px ;color:white "><br/><br/><br/><br/>
                <input type="button"  value="View all" id="view"  style="background:black;width: 90px;height:30px ;color:white "><br/><br/>

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

include 'footer.php';

?>

