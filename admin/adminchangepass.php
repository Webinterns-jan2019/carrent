<html>
<title>change pass</title>
<script src='js/jquery-3.1.1.js'></script>
        <link rel='stylesheet'>
        <script src='js/script.js'></script>
<head>
<style>
.adminchangelog{
     background-size: cover;
}
html, body{
  height: 100%;
  width:100%;
  background-image:url("img/img1.jpeg");
}
</style>
</head>
<body>
<div id="change_login" class="adminchangelog" > 
<a href="adminlogin.php"><img src="img/delete.jpeg" style="width:43px; height:40px; margin-rleft:-65px; margin-top:-10px;"> </a>

<div align="center">

<form name="f1" method="post" action="" id="f1" style="margin-left:40px;">
    <table>
    
      <br>
        <h2 style="margin-top:100px; color:white;"><b>UPDATE PASSWORD</b></h2>

        <!-- <div class="under" ></div> -->
       
        <tr>
            <td style="color:white;"><b>Admin Name :</b></td><td style="width:400px;"><input class="chgna" style="margin:15px; width:290px; padding:5px;" required id="adminname" type="text"  name="adminname" value=""/>
            </td>
        </tr>
        <tr>
            <td style="color:white;" ><b>Password :</b></td><td style="width:400px;"><input class="chgpass" style="margin:15px;  width:290px;  padding:5px;" required id="password" type="password" name="password" value=""/>
            </td>
        </tr>
        <tr>
            <td style="color:white;"><b>Change Password :</b></td><td style="width:400px;"><input class="chgcpass" style="margin:15px;  width:290px;  padding:5px;" required id="changepassword" type="password" name="password" value=""/>
            </td>
        </tr>
    </table>     
</form>
<button style="margin:15px; padding:6px 115px;  background-color:skyblue; color:black; border:none; height:40px; width:450px; margin-right:70px;" id="adchange" type="submit" class="loginb"  ><b >CHANGE</b></a></button></td>
</div>
</body>
</html>
