
<html>
<head>
<title>Userpage</title>
<script src='js/jquery-3.1.1.js'></script>
        <link rel='stylesheet' href='css/style.css'>
        <script src='js/script.js'></script>
        <script src='js/script1.js'></script>


     <script>
   
$(document).ready(function()
{
    $('.book').hide();
    $('.pflpas').hide();
    $('.gopasdiv').hide();
    $('.gobookdiv').hide();
    $('.p1').hide();
            $('.userlog').hide();
            $('.userreg').hide();
            $('.userpas').hide();
            $('.lb').hide();
            $('.backlog').hide();

            $('.login').click(function()
            {
            
           
                $('.panel').hide();
                $('.p1').show();
                $('.lb').hide();
                $('.d2').hide();
              $('.backlog').hide();
                $('.userreg').hide();
                $('.userpas').hide();
                $('.userlog').show();
                $('.regbp').show();
                $('.usercon').hide();
                $('.gobookdiv').hide();
                $('.pfldiv').hide();
                $('.gopasdiv').hide();
                $('.bigpanel').hide();
            })


            $('.backlb').click(function()
            {
            
           
                $('.panel').hide();
                $('.p1').show();
                $('.lb').hide();
              $('.backlog').hide();
                $('.userreg').hide();
                $('.userpas').hide();
                $('.userlog').show();
                $('.regbp').show();
                $('.bigpanel').hide();
        
            })


            $('.loghere').click(function()
            {
            
           
                $('.panel').hide();
                $('.p1').show();
                $('.lb').hide();
              $('.backlog').hide();
                $('.userreg').hide();
                $('.userpas').hide();
                $('.userlog').show();
                $('.regbp').show();
              

            })
            
           $('.reg').click(function()
            {
                $('.userlog').hide();
                $('.panel').hide();
                $('.regbp').hide();
                $('.lb').show();
               $('.backlog').hide();
                $('.userpas').hide();
                $('.userreg').show();
                $('.usercon').hide();
                $('.pfldiv').hide();
                $('.bigpanel').hide();
            })

            $('.forpass').click(function()
            {
                $('.userlog').hide();
                $('.panel').hide();
                $('.regbp').hide();
                $('.userreg').hide();
                $('.userpas').show();
                $('.backlog').show();
                $('.usercon').hide();
               ;$('.pfldiv').hide();
                $('.bigpanel').hide();
            })

    
    $('.passgo').click(function()
            {
                $('.gobookdiv').hide();
           
                $('.pflpas').show();
                $('.gopasdiv').show();
                $('.pfldiv').hide();
              $('.pfl').hide();
              $('.book').hide();
            })


            $('.prflgo').click(function()
            {
                $('.book').hide();
                $('.gobookdiv').hide();
                $('.pflpas').hide();
                $('.gopasdiv').hide();
                $('.pfldiv').show();
              $('.pfl').show();
               
            })


            $('.bookup').click(function()
            {
            $('.book').show();
                $('.gobookdiv').show();
                $('.pflpas').hide();
                $('.gopasdiv').hide();
                $('.pfldiv').hide();
              $('.pfl').hide();
               
            })
})

     </script>  
</head>
<body>
<?php
    session_start();
    if(!isset($_SESSION['username']) || !isset($_SESSION['password']))
    {
        header("location:http://localhost/projectworkold/userpage.php");
    
        
    }

    ?>
   <?php
   include 'header.php'
   ?>
<?php
include 'firstpart.php'
?>
  
    <div class='pfldiv' style="background:grey; color:white;height:150px;">
     <div align="center" class="ab"><br><h1><b >YOUR PROFILE</h1>
         <h4><b>HOME > PROFILE</h4>
      </div>
   </div>

   <div class='gopasdiv' style="background:grey; color:white;height:150px;">
     <div align="center" class="ab"><br><h1><b >PASSWORD UPDATE</h1>
         <h4><b>HOME > PASSWORD UPDATE</h4>
      </div>
   </div>

   <div class='gobookdiv' style="background:grey; color:white;height:150px;">
     <div align="center" class="ab"><br><h1><b >MY BOOKING</h1>
         <h4><b>HOME > MY BOOKING</h4>
      </div>
   </div>

    <div class="bigpanel" style="background-color:darkred;">
    <div class="vertical-menu" style="font-size:20px">
  
   
            <button class='prflgo'style="width:200px;height:80px; background-color:darkred; color:white; border:none;" > <b>PROFILE UPDATE</a></button>
            <!-- <button class='passgo' style="width:200px;height:80px;"><b>PASSWORD UPDATE</a></button> -->
            <button class='bookup' style="width:200px;height:80px;background-color:darkred; color:white; border:none;"> <b>MY BOOKING</button> 
        <button style="width:200px;height:80px;background-color:darkred; color:white; border:none;"> <a  href="logout.php"><b>LOGOUT</a> </button>
   
</div>

<div class="profilediv"style="background-color:black;">
 
  <div align="center">


  <?php

include 'connect.php';

$sql = "select * from tbluser  where name='".$_SESSION['username']."' and password='".$_SESSION['password']."'";


$result = $conn->query($sql);
if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc())
    {
       
        ?>
 
 <div align="center"><br><br>
    <div class="nameplate" style="background-image:url(images/listing_img1.jpg);color:white"><br><br><br><br>
    <label style="margin:15px;margin-left:200px"  id ="pfname"   name="pfname" ><?php  echo $row['name'];?></label><br><br>
    <label style="margin:15px;margin-left:200px"  id ="profileaddr"  name="profileaddr" ><?php  echo $row['address'];?></label>
    </div>
  </div>
    <div align='center' class='pfl'>
    <table >
        <tr style="color:white;">
             <br> <td >Register Date :</td><td><label  style="margin:15px;margin-left:200px;background:transparent"  id ="profileregdate"  name="profileregdate" ><?php  echo $row['regdate'];?> </label>
              </td>
          </tr>
          <tr style="color:white;">
             <td> <br>Update Date :</td><td><br><label style="margin:15px;margin-left:200px;background:transparent"  id ="profileupdatedate"  name="profileupdatedate"> <?php  echo $row['updatedate'];?> </label>
              </td>
          </tr>
        
          <br>
          <tr style="color:white;">
             <td> <br>Username :</td><td><br><input style="color:white;margin:15px;margin-left:200px;background:transparent"  id ="profilename"  name="profilename" value=' <?php  echo $row['name'];?>' />
              </td>
          </tr>
        
          <br>
          <tr >
          <td style="color:white;"> <br> Mobile NO :</td><td>  <br><input style="margin:15px;margin-left:200px"  id="profilemblno" type="text"  name="profilemblno" value="<?php  echo $row['contactno'];?>"/>
              </td>
          </tr>
  
          <tr>
              <td style="color:white;">Email ID :</td><td><input style="margin:15px;margin-left:200px"  id ="profileemail" type="email"  name="profileemail" value="<?php  echo $row['email'];?>"/>
              </td>
              <td>
              
          </tr>
  
          <tr>
           <td style="color:white;">Date Of Birth :</td>   <td><input style="margin:15px;margin-left:200px"  id ="profiledob" type="date"   name="profiledob" value="<?php  echo $row['dob'];?>"/>
              </td>
          </tr>
  
          <tr>
           <td style="color:white;">Address :</td>   <td><input style="margin:15px;margin-left:200px"  id ="add" type="text"   name="add" value="<?php  echo $row['address'];?>"/>
              </td>
          </tr>
  
  
          <tr>
              <td style="color:white;">State :</td><td><input style="margin:15px;margin-left:200px"  id ="profilestate" type="text"  name="profilestate" value="<?php  echo $row['state'];?>"/>
              </td>
          </tr>
          <tr>
              <td style="color:white;">Pincode :</td><td><input style="margin:15px;margin-left:200px"  id ="profilepin" type="text"  name="profilepin" value="<?php  echo $row['pin'];?>"/>
              </td>
          </tr>
         
         <tr>

         

            <td>
                <td>
                     <button id='profileup'  class='updateprfl' vals='<?php  echo $row['userid'];?>' style="padding:16px; background-color:lightblue; width:250px; margin:15px;">UPDATE</button>
                </td>
            </td>
         </tr></table></div>
         <?php
        //  include('updatepas.php');
         include('booking.php');
?>
         <?php
        }
    }
    ?>

       
 </div>
 </div>



 
</body>
</html>

