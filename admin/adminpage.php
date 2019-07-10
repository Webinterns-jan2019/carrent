<html>
<head>
<title>Admin_form</title>
<script src='js/jquery-3.1.1.js'></script>
<script src='js/script.js'></script>

<script>

$(document).ready(function()
 {
        $('.hori').show();
        $('.verti').show();
        $('.mid').show(); 
        $('.carmid').hide();
        $('.submid').hide();
        $('.contmid').hide();
     $('.cust').click(function()
     {
        
         $('.hori').show();
         $('.verti').show();
         $('.carmid').hide();
         $('.custmid').show();
         $('.submid').hide();
         $('.contmid').hide();
         
     })
     $('.car').click(function()
     {
         $('.hori').show();
         $('.verti').show();
         $('.carmid').show();
         $('.custmid').hide();
         $('.contmid').hide();
         $('.submid').hide();
     })
     $('.sub').click(function()
     {
         $('.hori').show();
         $('.verti').show();
         $('.submid').show();
         $('.custmid').hide();
         $('.carmid').hide();
         $('.contmid').hide();
     })
     $('.cont').click(function()
     {
         $('.hori').show();
         $('.verti').show();
         $('.submid').hide();
         $('.custmid').hide();
         $('.carmid').hide();
         $('.contmid').show();
     })
})
</script>

<style>
.hori{
    width:2000px;
    height:69px;
    background-color:#11111f;
}
.verti{
   
    background-color:#11111f;
    width:200px;
    height:1200px;
    margin-top:-15px;
}
#btn{
    border:none;
    margin-top:-1px;
    height:80px;
    margin-left:-40px;
    width:200px;
    background-color:#11111f;
    color:white;
}
#btn:hover{
    background-color:gray;
}
label{
    position:center;
    color:white;
   
}
.custmid{
 background-color:pink;
    width:1800px;
    height:1200px;
    margin-top:-1200px;
    margin-left:200px;
}
.carmid{
 background-color:pink;
    width:1800px;
    height:1200px;
    margin-top:-1200px;
    margin-left:200px;
}
.submid{
 background-color:pink;
    width:1800px;
    height:1200px;
    margin-top:-1200px;
    margin-left:200px;
}
.contmid{
 background-color:pink;
    width:1800px;
    height:1200px;
    margin-top:-1200px;
    margin-left:200px;
}
.delete{
    background-color:green;
    width:80px;
    height:40px;
    color:white;
}
.update{
    background-color:darkblue;
    width:80px;
    height:40px;
    color:white;
}
#tb{
    margin-left:-5px;
    width:20px;
}
#tb1{
    margin-left:-60px;
}
#tb2{
    margin-left:-550px;
}
#tb3{
    margin-left:-680px;
}
td{
    width:50px;
}
input{
    width:140px;
}
.imag{
    width:160px;
    height:80px;
}
.delete1{
    width:80px;
    height:40px;
    background-color:green;
    color:white;
}
.update1{
    width:80px;
    height:40px;
    background-color:darkblue;
    color:white;
}
.delete2{
    width:80px;
    height:40px;
    background-color:green;
    color:white;
}
.update2{
    width:80px;
    height:40px;
    background-color:darkblue;
    color:white;
}
.update3{
    width:80px;
    height:40px;
    background-color:darkblue;
    color:white;
}
.add{
    margin-left:100px;
    width:100px;
    height:40px;
    background-color:orange;
    
}
</style>
</head>

<body>
<!-- ************************************************************************************************** -->
<div align="center"
class="hori">
<label style="padding:10px;"><h2>Admin Form</h2></label>
</div>
<div class="verti"><ul>
    <button id="btn" class="cust">View User Details</button>
    
    <button id="btn" class="car" >View Vehicle list</button>
   
    <button id="btn" class="sub">View Booking list</button>
   
    <button id="btn" class="cont">Contact us</button>
    </ul>
</div>

<!-- ===========================================Customer====================================================== -->
<div class="custmid" >
<br><br>
<h2 style="margin-left:40px;">User Details :</h2><br>
<div align="center">
    <table class="table" id="tb" style="border-color:#11111f;" border="2"   >
                    <tr>
                    <th><b style="color:black;">User Id</b></th>
                        <th><b style="color:black;">User Name</b></th>
                        <th><b style="color:black;">User Password</b></th>
                        <th><b style="color:black;">Email</b></th>
                        <th><b style="color:black;">Contact number</b></th>
                        <th><b style="color:black;">address</b></th>
                        <th><b style="color:black;">state</b></th>
                        <th><b style="color:black;">Pincode</b></th>
                        <th><b style="color:black;">Date of birth</b></th>
                        <th><b style="color:black;">Register date</b></th>
                        <th><b style="color:black;">Updatedate</b></th>
                        <th><b style="color:black;">Delete</b></th>
                        <th><b style="color:black;">update</b></th>               
                    </tr>
 <?php

include 'connect.php';

$sql="SELECT * from tbluser";

$result=$conn->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        ?>
        <tr style="width:-100px;">
        <td><input type='text' id='userid' value="<?php echo $row['userid'];?>"> </td>
        <td><input type='text' id='name' value="<?php echo $row['name'];?>"> </td>
        <td><input type='text' id='password' value="<?php echo $row['password'];?>"> </td>
        <td> <input type='text' id='email' style="width:200px;" value="<?php echo $row['email'];?>">  </td>
        <td> <input type='text' id='contactno' value="<?php echo $row['contactno'];?>">  </td>
        <td> <input type='text' id='address' value="<?php echo $row['address'];?>">  </td>
        <td> <input type='text' id='state' style="width:80px;" value="<?php echo $row['state'];?>">  </td>
        <td><input type='text' id='pin' value="<?php echo $row['pin'];?>"> </td>
        <td><input type='text' id='dob' value="<?php echo $row['dob'];?>"> </td>
        <td> <input type='text' id='regdate' value="<?php echo $row['regdate'];?>">  </td>
        <td> <input type='text' id='updatedate' value="<?php echo $row['updatedate'];?>">  </td>
 
        <td><button  class="delete" name="deletes" vals="<?php echo $row['userid'];?> ">Delete</button></td>
        <td><button  class="update" name="updates"  vals="<?php echo $row['userid'];?> ">Update</button></td>
        </tr>
        <?php      
    }
    
}

?>                   
</table>
</div>

</div>
<!-- ====================================================Vehiclelist================================================ -->
<div class="carmid" >
<br><br>
<h2 style="margin-left:40px;">Vehicle list :</h2>

<div align="center">
    <table class="table" id="tb1" style="border-color:#11111f;" border="2"   >
                    <tr>
                        <th><b style="color:black;">Vehicle id</b></th>
                        <th><b style="color:black;"> Vehicle Title</b></th>
                        <th><b style="color:black;">Vehicle brand</b></th>
                        <th><b style="color:black;">Price per day</b></th>
                        <th><b style="color:black;">Fueltype</b></th>
                        <th><b style="color:black;"> Modelyear </b></th>
                        <th><b style="color:black;">Seat</b></th>
                        <th><b style="color:black;">Vimage</b></th>
                        <th><b style="color:black;">AC</b></th>
                        <th><b style="color:black;"> Cd player </b></th>
                        <th><b style="color:black;">Regdate</b></th>
                        <th><b style="color:black;">Updatedate</b></th>
                        <th><b style="color:black;">Status</b></th>
                         <th><b style="color:black;">Delete</b></th>
                        <th><b style="color:black;">update</b></th>
                       
                    </tr>
 <?php

include 'connect.php';

$sql="SELECT * from tblvehicle";


$result=$conn->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        ?>
        <tr>
            <td><input type='text' id='vehicleid' style="width:90px;" value="<?php echo $row['vehicleid'];?>"></td>
            <td><input type='text' id='vehicletitle' value="<?php echo $row['vehicletitle'];?>"> </td>
            <td> <input type='text' id='vehiclebrand' value="<?php echo $row['vehiclebrand'];?>">  </td>
            <td> <input type='text' id="priceperday" value="<?php echo $row['priceperday'];?>"></td> 
            <td><input type='text' id='fueltype' value="<?php echo $row['fueltype'];?>"></td>
            <td><input type='text' id='modelyear' style="width:80px;" value="<?php echo $row['modelyear'];?>"> </td>
            <td> <input type='text' id='seat' style="width:50px;" value="<?php echo $row['seat'];?>">  </td>
            <td> <input type='text' id="vimage" value="<?php echo $row['vimage'];?>"></td> 
            <td><input type='text' id='ac' style="width:80px;" value="<?php echo $row['ac'];?>"></td>
            <td><input type='text' id='cdplayer' style="width:80px;" value="<?php echo $row['cdplayer'];?>"> </td>
            <td> <input type='text' id='regdate' value="<?php echo $row['regdate'];?>">  </td>
            <td> <input type='text' id="updatedate" value="<?php echo $row['updatedate'];?>"></td> 
            <td> <input type='text' id="status" style="width:50px;" value="<?php echo $row['status'];?>"></td> 

            <td> <button  class="delete1" name="deletes" vals1="<?php echo $row['vehicleid'];?> ">Delete</button></td>
            <td><button  class="update1" name="updates"  vals1="<?php echo $row['vehicleid'];?> ">Update</button></td>
        </tr>
    <?php
        
    } 
}

?>                    
</table>
</div>
<br><br>
<a href="Add.php"><button class="add" id="ad">Add Car</button></a>
</div>

<!-- ===========================================vehiclebooking=====================================================-->
<div class="submid" >
<br><br>
<h2 style="margin-left:40px;">Booking list :</h2>
<div align="center">
    <table class="table" id="tb2" style="border-color:#11111f;" border="2"   >
                    <tr>
                        <th><b style="color:black;">User id</b></th>
                        <th><b style="color:black;">User name</b></th>
                        <th><b style="color:black;">Vehicle id</b></th>
                        <th><b style="color:black;">fromdate</b></th>
                        <th><b style="color:black;">todate</b></th>
                        <th><b style="color:black;">Message</b></th>
                        <th><b style="color:black;">postingdate</b></th>
      
                        <th><b style="color:black;">Delete</b></th>
                        <th><b style="color:black;">update</b></th>
                       
                    </tr>
 <?php

include 'connect.php';

$sql="SELECT * from tblbook";


$result=$conn->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        ?>

        <tr>
            <td><input type='text' id='id' style="width:70px;" value="<?php echo $row['id'];?>"> </td>
            <td><input type='text' id='username' value="<?php echo $row['username'];?>"> </td>
            <td> <input type='text' id='vehicleid' class="vehicleid" style="width:80px;" value="<?php echo $row['vehicleid'];?>">  </td>
            <td><input type='text' id='fromdate' value="<?php echo $row['fromdate'];?>"> </td>
            <td><input type='text' id='todate' value="<?php echo $row['todate'];?>"> </td>
            <td><input type='text' id='message' style="width:250px;" value="<?php echo $row['message'];?>"> </td>
            <td> <input type='text' id='postingdate' value="<?php echo $row['postingdate'];?>">  </td>
        
            <td> <button  class="delete2" name="deletes" vals2="<?php echo $row['id'];?> " id="<?php echo $row['vehicleid'];?> ">Delete</button>    </td>
            <td><button  class="update2" name="updates"  vals2="<?php echo $row['id'];?> ">Update</button>      </td>
        </tr>
        <?php   
    }   
}

?>                   
</table>
</div>
</div>
<!-- =============================================contactus======================================================== -->
<div class="contmid" >
<br><br>
<h2 style="margin-left:40px;">Contact Us :</h2><br>
<h3 style="margin-left:70px;">For only two Contact Members:</h3><br>
<div align="center"><br>
    <table class="table" id="tb3" style="border-color:#11111f;" border="2"   >
                    <tr>
                        <th><b style="color:black;">Id</b></th>
                        <th><b style="color:black;">Email</b></th>
                        <th><b style="color:black;">Contactno</b></th>
                        <th><b style="color:black;">Message</b></th>  
                        <th><b style="color:black;">Postdate</b></th>
                        <th><b style="color:black;">Name</b></th>
                        <th><b style="color:black;">Update</b></th>
                    </tr>
 <?php

include 'connect.php';

$sql="SELECT * from tblcontact";


$result=$conn->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        ?>
        <tr>
        <td><input type='text' id='id' style="width:50px" value="<?php echo $row['id'];?>"> </td>
        <td><input type='text' id='email' value="<?php echo $row['email'];?>"> </td>
        <td> <input type='text' id='contactno' value="<?php echo $row['contactno'];?>">  </td>
        <td><input type='text' id='message' style="width:250px" value="<?php echo $row['message'];?>"> </td>
        <td><input type='text' id='postdate' value="<?php echo $row['postdate'];?>"> </td>
        <td> <input type='text' id='name' value="<?php echo $row['name'];?>">  </td>
        
        <td><button  class="update3" name="updates"  vals2="<?php echo $row['id'];?>">Update</button></td>
        </tr>
        <?php   
    }
}
?>                   
</table>
</div>
</div>
</body>
</html>









