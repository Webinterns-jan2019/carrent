
<html>
<head>
<title>Carlist</title>
<script src='js/jquery-3.1.1.js'></script>
        <link rel='stylesheet' href='css/style.css'>
        <script src='js/script.js'></script>
        <script src='js/script1.js'></script>


    
</head>

<?php
include 'script.php'
?>


<body>

   <?php
   include 'header.php'
   ?>
  <?php
include 'firstpart.php'
?>
  

    <div class="bigpanel" style="background-image:url(images/listing_img1.jpg)">
    
    
<div class="profilediv" style="background-image:url(images/listing_img1.jpg)">
 
  <div align="center">


  <?php

include 'connect.php';



$sql = "select * from tblvehicle v where  v.status='0'";


$result = $conn->query($sql);
if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc())
    {
       
        ?>

        
 

<div class='book'>
<!-- <div align='center'> -->

<div class='bookingdiv'>

<div class='booksub1'>
<img class='blocimg1' src='image/<?php  echo $row['vimage'];?>' alt="i"/> 
</div>

<div class='booksub2'>
  <table style='width=200px' class="br">
    <th>
    <th><?php  echo $row['vehiclebrand'];?>, 
<?php  echo $row['vehicletitle'];?></th>
</th><br>
<tr>
<td colspan=2>Price Per Day :</td><td><?php  echo $row['priceperday'];?></td>
</tr>
<tr>
<td colspan=2>Fuel :</td><td><?php  echo $row['fueltype'];?></td>
</tr>
<tr>
<td colspan=2>Seat :</td><td><?php  echo $row['seat'];?></td>
</tr>

<?php
if($row['ac']==1)
{
?>
<tr>
<td colspan=2>Air conditioned</td>
</tr>
<?php
}
?>

<?php
if($row['cdplayer']==1)
{
?>
<tr>
<td colspan=2>CD Player supported</td>
</tr>
<?php
}
?>

<tr>
<td ><button id='bookbut' style="background-color:darkorange;border:none" class='Bookcls' vals='<?php echo $row['vehicleid'];?>'>Book here</button></td>
</tr>



</table>
</div><br>

</div>
</div>




<?php

        }
    }
    ?>


<br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>
   <br>
   <br>
        
<div class="vertical-menu" style="font-size:15px; width:500px; height:520px; background-color:white">

<br>
  <h2><b>BOOK NOW</b></h2>

     <div style="width:350px;height:2px;background-color:black"></div>
        
        <tr>
            </td><td><input style="margin:15px ;width:250px;height:30px;" required id="bookname" type="text" placeholder="Username" name="" value=""/>
            </td>
        </tr>

        <tr>
            <td><input style="margin:15px;width:250px;height:30px;" required id="bookpass" type="password" placeholder="Password" name="" value=""/>
            </td>
        </tr>

        <tr>
            <td><input style="margin:15px;width:250px;height:30px;" required id ="bookfrom" type="text"  placeholder="From date (dd/mm/yyyy)" name="" value=""/>
            </td>
        </tr>

        <tr>
          <td><input style="margin:15px;width:250px;height:30px;" required id ="bookto" type="text" placeholder="To date (dd/mm/yyyy)" name="" value=""/>
            </td>
        </tr>

        <tr>
        <td><input style="margin:15px;width:200px;height:70px;" required id ="bookmsg" type="text" placeholder="Message" name="" value=""/>
            </td>
        </tr><br>
        <tr>
        <td>click below to book</td>
      </tr>
</div>


 
<tr> <td>
        <input id= 'bookbut1'class="Bookcls1" style="margin-top:-80px;width:190px;height:30px;background-color:orange;color:orange"  type="submit"  value=""/>
         </td> </tr>




</div>
</div>
 </div>



</body>
</html>

