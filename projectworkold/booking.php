
<div class='book'>
<!-- <div align='center'> -->
<?php

include 'connect.php';

$sql = "select * from tbluser u,tblvehicle v,tblbook b where u.name='".$_SESSION['username']."' and u.password='".$_SESSION['password']."' and u.name=b.username and b.vehicleid=v.vehicleid ";


$result = $conn->query($sql);
if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc())
    {
       
        ?>
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
<td colspan=2>From Date :</td><td><?php  echo $row['fromdate'];?></td>
</tr>
<tr>
<td colspan=2>To Date :</td><td><?php  echo $row['fromdate'];?></td>
</tr>
<tr>
  <td colspan=2>Message :</td><td><?php  echo $row['message'];?></td>
</tr>

<tr>
<td ></td>
</tr>
</table>
</div><br>
<!-- </div> -->
<?php

        }
    }
    ?>
</div>
</div>

       