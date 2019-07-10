<html>
<head>
<title>Add Car Details</title>
<script src='js/jquery-3.1.1.js'></script>
<script src='js/script.js'></script>
<style>
html{
    background-color:#10000f;
}
.addcar{
    width:1350px;
    height:900px;
    /* background-color:#10000f; */
    margin-left:50px;
}
td{
    padding:4px;
}
.sideimg{
    width:780px;height:400px;margin-left:570px;margin-top:-600px;;
}
</style>
</head>
<body>
<div class="addcar">
            <div id="Addcar_form">
            <a href="adminpage.php"><img src="img/delete.jpeg" style="width:43px; height:40px; margin-left:-60px; margin-top:-10px;"> </a>

                <!-- <div align="center"> -->
                    <form class="f1" method="post" id="f1">
                            <table>
                                <br>
                                <h2 style="color:lightgray;">Add Car Details</h2>
                                <br>
                                   <!-- <tr>
                                    <td><input type='text' id='car_id' value="<?php echo $row['car_id'];?>"></td></tr> -->
                                    <tr>
                                        <td class="f1_label"><b style="margin-right:100px;color:white">Vehicle title:   </B></td><td><input id="id1" type="text" placeholder="Enter Vehicle title" name="carname" value="" style="padding:8px;padding-right:60px;padding-left:110px"/>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td class="f1_label"><b style="color:white">Vehicle brand :</b></td><td><input id="id2" type="text" placeholder="Enter Vehicle brand"name="type" value="" style="padding:8px;padding-right:60px;padding-left:110px"/>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td class="f1_label"><b style="color:white">Price per day :</b></td><td><input id="id3" type="text" placeholder="Enter Price per day" name="color" value="" style="padding:8px;padding-right:60px;padding-left:110px"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="f1_label"><b style="margin-right:100px;color:white">Fuel type:   </B></td><td><input id="id4" type="text" placeholder="Enter Fuel type" name="carname" value="" style="padding:8px;padding-right:60px;padding-left:110px"/>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td class="f1_label"><b style="color:white">Model year :</b></td><td><input id="id5" type="text" placeholder="Enter Model year"name="type" value="" style="padding:8px;padding-right:60px;padding-left:110px"/>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td class="f1_label"><b style="color:white">Seat :</b></td><td><input id="id6" type="text" placeholder="Enter Seat" name="color" value="" style="padding:8px;padding-right:60px;padding-left:110px"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="f1_label"><b style="color:white">Vehicle image :</b></td><td><input src="img/.." id="id7" type="text" placeholder="Enter ****.jpg" name="text" value="" style="padding:8px;padding-right:60px;padding-left:110px"/>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td class="f1_label"><b style="color:white">A C :</b></td><td><input id="id8" type="text" name="color" value="" style="padding:8px;padding-right:60px;padding-left:110px"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="f1_label"><b style="color:white">CD Player :</b></td><td><input id="id9" type="text" placeholder="Enter CD Player "name="type" value="" style="padding:8px;padding-right:60px;padding-left:110px"/>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                   
                                    <tr></tr>
                                    <tr>
                                        <td class="f1_label"><b style="color:white">Status :</b></td><td><input id="id12" type="text" placeholder="Enter 1(active) or 0(inavtive)" name="color" value="" style="padding:8px;padding-right:60px;padding-left:110px"/>
                                        </td>
                                    </tr>
                                  </table>
                                  </form>
                                  <br><br><br>
                                    <button class="submit" style="padding:10px;padding-right:250px;padding-left:250px;algin-text:center;background-color:gray;"><a href="adminpage.php"><b><h4>Add</h4></a></button></b>
                                    <div>
                                        <img src="img/car.jpeg" class="sideimg">
                                
                                     </div>   
                                
                                  </div>      
                            </div>  
                    
    </body>
</html>