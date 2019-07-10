<html>
<head>
<title>Admin login</title>
<script src='js/jquery-3.1.1.js'></script>
        <link rel='stylesheet'>
        <script src='js/script.js'></script>
<style>
html, body{
  height: 100%;
  width:100%;
  background-image:url("img/login-bg.jpg");
}
@media screen and (max-width: 600px) {
 /* table{
     width:200px;

 } */
}

</style>
</head>
<body>
         
<div align="center">
<div id="admin_login" class="adminlog" > 
<div align="center">
<form name="f1" method="post" action="" id="f1">
    <table>
      <br>
        <h2 style="margin-top:100px; color:white;"><b>ADMIN LOGIN</b></h2>
       
        <tr>
            <td style="color:white;"><b id="name">Admin Name :</b></td><td style="width:400px;"><input class="na" style="margin:15px; width:400px; padding:5px;" required id="adminname" type="text"  name="adminname" value=""/>
            </td>
        </tr>
        <tr>
            <td style="color:white;" ><b id="name">Password :</b></td><td style="width:400px;"><input class="pa" style="margin:15px;  width:400px;  padding:5px;" required id="password" type="password" name="password" value=""/>
            </td>
        </tr>
        <tr>          
            <td class="f1_label"></td> <td> 
           <button style="margin:15px; padding:6px 115px; height:40px; width:400px; background-color:#11111f; color:white; border:none;" id="adlogin" type="submit"  > LOG IN</a></button></td>
        </tr>
    </table>     
   
</form>
</div>
    <div align="center">
            <div class="regbp"><div align="center">
                <label style="color:white;"><b>Do you want to change the password?</label> <button style="width:120px; height:30px;  border:none; background-color:none;" id="changepss" class="changepss"><a href="adminchangepass.php" ><b style="color:black;">click Here</b></a></button><br>
            </div>
        </div>
    </div>
</div>
</div>

</body>
</html>
