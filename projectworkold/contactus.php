<html>
<head>

<title>contactus</title>
        <script src='js/jquery-3.1.1.js'></script>
        <link rel='stylesheet' href='css/style.css'>
        <script src='js/script.js'>
        </script>

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
     <div class="ba" style="background:grey; color:white;height:150px;">
     <div align="center" class="ab"><br><h1><b >CONTACT US</h1>
         <h4><b>HOME > CONTACT US</h4>
      </div>
   </div>





<div style="background-image:url(images/featured-img-2.jpg)" align="center">
<br><br><br>
<div id="reg_form"  class="usercon">
<!-- <div align="center"> -->
<form name="f1" method="post" action="" id="contactpage">
    <table>
      <br>
      
        <h2><b>GET IN TOUCH WITH FORM BELOW</b></h2>

        <div class="under"></div><br>
        
        <tr>
            <td class="contact"></td><td><br><b class="contact">Username<br><input class="con" style="margin:15px" required id="conname" type="text"  name="Username" value=""/>
            </td>
        </tr>

        <tr>
            <td class="contact"></td><td><b class="contact">Email ID<br><input class="con" style="margin:15px" required id ="conemail" type="email"  name="email" value=""/>
            </td>
        </tr>

        <tr>
            <td class="contact"></td><td><b class="contact">Mobile Number<br><input class="con" style="margin:15px" required id="conmblno" type="text"  name="mblno" value=""/>
            </td>
        </tr>

        <tr>
            <td class="contact"></td><td><b class="contact">Message<br><input class="con" style="margin:15px; padding:50px" required id ="message" type="text"   name="message" value=""/>
            </td>
        </tr>

       
           
            <td class="contact"></td> <td> <b><br><input  id= 'msg' style="margin:15px"  type="submit" class="msg" value="Send Message"/>
                </td>
        </tr>

       

       
    </table>

  
           
</form>
</div>
<br><br><br>
</div>
</div>


</body>
</html>