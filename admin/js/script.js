$(document).ready(function(){
//admin login
    $('#adlogin').click(function(){
        
    var name = $('.na').val();
    var password = $('.pa').val();

    $.ajax({

        url : 'admi.php',
        type : 'post',
        dataType : 'json',
        data : {
            name:name,
            password:password
        },
        success: function(result)
        {
            if(result)
            {
              location.replace('adminpage.php');
            }
            else{ 
               alert("Wrong Credentials: Check your Username and Password");
            }
        }
    })
    })

    // ===================================================================================================
    //admin change password 
    $('.loginb').click(function(){
        var admname= $('.chgna').val();
        var admpassword = $('.chgpass').val();
        var admconpass = $('.chgcpass').val();

        $.ajax({
    
            url : 'update.php',
            type : 'post',
            dataType : 'json',
            data : {
                admname:admname,
                admpassword: admpassword,
                admconpass:admconpass,
               
            },
            success: function(result)
            {
                if(admname>0||admpassword>0||admconpass>0)
                {
                    if(result)
                    {
                        alert("Sussesfully Changed your Password");

                    }
                }
                else
                    {
                        alert("Failed To Change Your Password");
                    }
            }
        })  
})
// =====================================================================================================================
//delete user details
$(".delete").click(function(){
    var name=$(this).attr("name");
    if(name=='deletes')
    {
        var userdelete_id=$(this).attr("vals");
        //alert(userdelete_name);
        $.ajax({
            url:'delete1.php',
            type: 'post',
            dataType: 'json',
            data:{
               userid:userdelete_id,
            },
            success:function(result)
            {
            if(result)
            {
            alert('Deleted'); 
            location.reload();
           
            }
            else{
                alert('Failed to Delete Data');
            }
           
    
        }
    })
   
    }
})
//=====================================================================================
//delete vehicle details
$(".delete1").click(function(){

    var name=$(this).attr("name");
    if(name=='deletes')
    {

        var vehicledelete_id=$(this).attr("vals1");
        //alert(vehicledelete_id);
        $.ajax({
            url:'delete2.php',
            type: 'post',
            dataType: 'json',
            data:{
               vehicleid:vehicledelete_id,
            },
            success:function(result)
            {
            if(result)
            {
            alert('Deleted'); 
            location.reload();
           
            }
            else{
                alert('Failed to Delete Data');
            }
        }
    })
   
    }
})
//=========================================================================================
//delete booking details
$(".delete2").click(function(){

    var name=$(this).attr("name");
    if(name=='deletes')
    {

        var bookdelete_id=$(this).attr("vals2");

        //var vid=$(".vehicleid").attr("value");
        var vid=event.target.id;
    
        $.ajax({
            url:'delete3.php',
            type: 'post',
            dataType: 'json',
            data:{
               id:bookdelete_id,
            },
            success:function(result)
            {
            if(result)
            {
            alert('Deleted'); 
            location.reload();
           
            }
            else{
                alert('Failed to Delete Data');
            }
        }
    })


    $.ajax({
        url:'update5.php',
        type: 'post',
        dataType: 'json',
        data:{
           vehicleid:vid,
        },
        success:function(result)
        {
        if(result)
        {
        alert('Status updated'); 
        location.reload();
       
        }
        else{
            alert('Failed to Delete Data');
        }
    }
})
   
    }
})
//=====================================================================================
//update user details
$('.update').click(function(){
    
    var userupdate_id=$(this).attr("vals");

    var name='';
    var password='';
    var email='';
    var contactno='';
    var address='';
    var state='';
    var pin='';
    var dob='';
    var regdate='';
    var updatedate='';
  

     
    $(this).closest('tr').find('#name').each(function()
    {
        name=$(this).val();
    })
    $(this).closest('tr').find('#password').each(function()
    {
        password=$(this).val();
    })
    
    $(this).closest('tr').find('#email').each(function()
    {
        email=$(this).val();
    })
    $(this).closest('tr').find('#contactno').each(function()
    {
        contactno=$(this).val();
    })
    $(this).closest('tr').find('#address').each(function()
    {
        address=$(this).val();
    })
    $(this).closest('tr').find('#state').each(function()
    {
        state=$(this).val();
    })
    
    $(this).closest('tr').find('#pin').each(function()
    {
        pin=$(this).val();
    })
    $(this).closest('tr').find('#dob').each(function()
    {
        dob=$(this).val();
    })
    $(this).closest('tr').find('#regdate').each(function()
    {
        regdate=$(this).val();
    })
    $(this).closest('tr').find('#updatedate').each(function()
    {
        updatedate=$(this).val();
    })

    $.ajax({

        url : 'update1.php',
        type : 'post',
        dataType : 'json',
        data : {
            userid:userupdate_id,
            name:name,
            password: password,
            email:email,
            contactno:contactno,
            address:address, 
            state:state,  
            pin:pin,
            dob: dob,
            regdate:regdate,
            updatedate:updatedate,
        },
        
        success: function(result)
        {
           
            if(result)
            {
                alert('Updated Sussesfully');
           location.reload();
           
            }
            else{
                alert('Failed to Update Data');
            } 
        }
     
    })
})
//======================================================================================
$('.update1').click(function(){

   var vehicleupdate_id=$(this).attr("vals1");

   var vehicletitle='';
   var vehiclebrand='';
   var priceperday='';
   var fueltype='';
   var modelyear='';
   var seat='';
   var vimage='';
   var ac='';
   var cdplayer='';
   var updatedate='';
   var status='';

   $(this).closest('tr').find('#vehicletitle').each(function()
    {
    vehicletitle=$(this).val();
    })

    $(this).closest('tr').find('#vehiclebrand').each(function()
    {
    vehiclebrand=$(this).val();
    })
    $(this).closest('tr').find('#priceperday').each(function()
    {
    priceperday=$(this).val();
    })
    $(this).closest('tr').find('#fueltype').each(function()
    {
    fueltype=$(this).val();
    })

    $(this).closest('tr').find('#modelyear').each(function()
    {
    modelyear=$(this).val();
    })
    $(this).closest('tr').find('#seat').each(function()
    {
    seat=$(this).val();
    })
    $(this).closest('tr').find('#vimage').each(function()
    {
    vimage=$(this).val();
    })

    $(this).closest('tr').find('#ac').each(function()
    {
    ac=$(this).val();
    })
    $(this).closest('tr').find('#cdplayer').each(function()
    {
    cdplayer=$(this).val();
    })
    $(this).closest('tr').find('#updatedate').each(function()
    {
    updatedate=$(this).val();
    })
    $(this).closest('tr').find('#status').each(function()
    {
    status=$(this).val();
    })

    $.ajax({

    url : 'update2.php',
    type : 'post',
    dataType : 'json',
    data : {
        vehicleid:vehicleupdate_id,
        vehicletitle:vehicletitle,
        vehiclebrand:vehiclebrand,
        priceperday:priceperday,
        fueltype:fueltype,
        modelyear:modelyear,
        seat:seat,
        vimage:vimage,
        ac:ac,
        cdplayer:cdplayer,
        updatedate:updatedate,
        vehstatus:status, 
    },

    success: function(result)
    {

        if(result)
        {
            alert('Updated Sussesfully');
    location.reload();

        }
        else{
            alert('Failed to Update Data');
        } 
    }

    })
})

//=========================================================================================
$('.update2').click(function(){

    var bookupdate_id=$(this).attr("vals2");
  
    var username='';
    var vehicleid='';
    var fromdate='';
    var todate='';
    var message='';
    var postingdate='';
    
    $(this).closest('tr').find('#username').each(function()
    {
        username=$(this).val();
    })
    $(this).closest('tr').find('#vehicleid').each(function()
    {
        vehicleid=$(this).val();
    })
    $(this).closest('tr').find('#fromdate').each(function()
    {
        fromdate=$(this).val();
    })
    $(this).closest('tr').find('#todate').each(function()
    {
        todate=$(this).val();
    })
    $(this).closest('tr').find('#message').each(function()
    {
        message=$(this).val();
    })
    $(this).closest('tr').find('#postingdate').each(function()
    {
        postingdate=$(this).val();
    })  

    $.ajax({

        url : 'update3.php',
        type : 'post',
        dataType : 'json',
        data : {
            id:bookupdate_id,
            username: username,
            vehicleid:vehicleid, 
            fromdate: fromdate,
            todate:todate,
            message: message,
            postingdate:postingdate,
        },
        
        success: function(result)
        {
           
            if(result)
            {
                alert('Updated Sussesfully');
           location.reload();
           
            }
            else{
                alert('Failed to Update Data');
            } 
        }
     
    })
   
})

//===========================================================================================

$('.update3').click(function(){

    var constupdate_id=$(this).attr("vals2");

    var email='';
    var contactno='';
    var message='';
    var postdate='';
    var name='';
  
    $(this).closest('tr').find('#email').each(function()
    {
        email=$(this).val();
    })
    $(this).closest('tr').find('#contactno').each(function()
    {
        contactno=$(this).val();
    })
    $(this).closest('tr').find('#message').each(function()
    {
        message=$(this).val();
    })
    $(this).closest('tr').find('#postdate').each(function()
    {
        postdate=$(this).val();
    })
    $(this).closest('tr').find('#name').each(function()
    {
        name=$(this).val();
    })
   
    $.ajax({

        url : 'update4.php',
        type : 'post',
        dataType : 'json',
        data : {
            id:constupdate_id,
           
            email:email,
            contactno:contactno,
            message:message,
            postdate:postdate,
            name:name,
        },
        
        success: function(result)
        {
           
            if(result)
            {
                alert('Updated Sussesfully');
                location.reload();
            }
            else{
                alert('Failed to Update Data');
            } 
        }
     
    })
   
})
//==================================================================================================================
//ADD car details
$('.submit').click(function(){
         var vehicletitle=$('#id1').val();
         var vehiclebrand=$('#id2').val();
         var priceperday=$('#id3').val();
         var fueltype=$('#id4').val();
         var modelyear=$('#id5').val();
         var seat=$('#id6').val();
         var vimage=$('#id7').val();
         var ac=$('#id8').val();
         var cdplayer=$('#id9').val();
         
         var status=$('#id12').val();
 
if(vehicletitle>0||vehiclebrand.length>0||priceperday.length>0||fueltype.length>0||modelyear.length>0||seat.length>0||ac.length>0||cdplayer.length>0||status.length>0)
{
        $.ajax({
            url:'insert1.php',
            type: 'post',
            dataType: 'json',
            data:{
                vehicletitle:vehicletitle,
                vehiclebrand:vehiclebrand,
                priceperday:priceperday,
                fueltype:fueltype,
                modelyear:modelyear,
                seat:seat,
                vimage:vimage,
                ac:ac,
                cdplayer:cdplayer,
               
                status:status
            },
            success:function(result)
            {
                if(result)
                {
                    alert('Inserted CarData Sussesfully');
                    location.reload();
            
                }
                else{
                    alert('Failed to Insert Data');
                }
            }
        })
    }
    else
    {
        alert('entries should be valid');
    }

    })
})