<script>
        
        $(document).ready(function()
        {
            $('.p1').hide();
            $('.userlog').hide();
            $('.userreg').hide();
            $('.userpas').hide();
            $('.lb').hide();
            $('.backlog').hide();
            $('.vertical-menu').hide();
    $('.Bookcls1').hide();
    
    $('.Bookcls').click(function(){

var Bookcls_id=$(this).attr("vals");
//alert(Bookcls_id);


$("#bookbut1").prop('value', Bookcls_id);
$('.vertical-menu').show();
$('.book').hide();
$('.Bookcls1').show();

})


$('.Bookcls1').click(function(){

var Bookcls_id=$(this).val();
//alert(Bookcls_id);

var status='';

  
var username = $('#bookname').val();

var password = $('#bookpass').val();

var fromdate = $('#bookfrom').val();

var todate = $('#bookto').val();

var message = $('#bookmsg').val();


 
$.ajax({

url : 'login.php',
type : 'post',
dataType : 'json',
data : {
  username:username,
  password:password
},
success: function(result)
{
  if(result)
  {
        $.ajax({

                url : 'updatevehicle.php',
                type : 'post',
                dataType : 'json',
                data:{
                vehicleid:Bookcls_id
                },
                success: function(result)
                {
                  if(result)
                  {
                      alert('status updated');
                      location.replace('userpage.php');

                  }
                  else
                  {
                      alert('failed to update');
                  }
                }
        })

      $.ajax({

                url : 'bookupquery.php',
                type : 'post',
                dataType : 'json',
                data:{
                  Bookcls_id:Bookcls_id,
                username:username,
                message:message,
                fromdate:fromdate,
                todate:todate
                },
                success: function(result)
                {
                  if(result)
                  {
                      alert('Booking Successfull');
                      location.replace('userpage.php');

                  }
                  else
                  {
                      alert('failed to update');
                  }
                }
      })

    }
          else{
             
             alert("wrong Credentials");
             
          }
      }
  })
})

           
          
          
          
            $('.login').click(function()
            {
            
           
                $('.panel').hide();
                $('.p1').show();
                $('.lb').hide();
                $('.d2').hide();
                $('#homediv').hide();
              $('.backlog').hide();
                $('.userreg').hide();
                $('.userpas').hide();
                $('.userlog').show();
                $('.regbp').show();
                $('.usercon').hide();
                $('.ab').hide();
                $('.ba').hide();
                $('.abb').hide();
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
                $('.ab').hide();
                $('.ba').hide();
                $('.abb').hide();
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
                $('.ab').hide();
                $('.ba').hide();
                $('.abb').hide();
                $('.bigpanel').hide();
            })


          
           
        })
        </script>