$(document).ready(function(){



    $('#register').click(function(){

       
        var username = $('#regname').val();

        var mblno = $('#regmblno').val();

        var email = $('#regemail').val();

        var password = $('#regpassword').val();

        var conpass = $('#regconpass').val();

        // alert(username);

        // alert(mblno);
        // alert(email);

        // alert(password);
        // alert(conpass);

 

       
        if(username.length>0 && email.length>0 && password.length>0 && mblno.length>0 )
        {
            if(conpass==password)
            {

           
                  $.ajax
                  ({
    
                        url : 'insert.php',
                        type : 'post',
                        dataType : 'json',
                        data : {
                            username:username,
                            mblno:mblno,
                            email:email,
                            password:password,
                            conpass:conpass
                        },
                        success: function(result)
                        {
                            if(result)
                            {
                            alert('success');
                            
                            
                            }
                            else{
                                alert('failed to insert data');
                            }
                        }
                  })
             }
             else
             {
                 alert('Password do not match');
                 
             }
        }
        else
        {
            alert('Please fill out all details');
        }

    //     $('.userlog').hide();
    //     $('.panel').hide();
    //     $('.regbp').hide();
    //     $('.lb').show();
    //    $('.backlog').hide();
    //     $('.userpas').hide();
    //     $('.userreg').show();

    $('#userreg').load(location.href+"#userreg");
       

    })


    $('#loginb').click(function(){

        var username = $('#logusername').val();
        var password = $('#logpassword').val();
     
    // alert(username);
    // alert(password);

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
                  location.replace('userpage.php');
                  $.ajax
                  ({
    
                        url : 'userpage.php',
                        type : 'post',
                        dataType : 'json',
                        data : {
                            username:username
                           
                        },
                        success: function(result)
                        {
                            if(result)
                            {
                            alert('success');
                            
                            
                            }
                            else{
                                alert('failed to insert data');
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


    $('#resetpas').click(function(){

        var email = $('#resetemail').val();
        var mblno = $('#resetmblno').val();
        var password = $('#resetpassword').val();
        var conpass = $('#resetconpass').val();
    // alert(email);
    // alert(password);

        $.ajax({
    
            url : 'resetlog.php',
            type : 'post',
            dataType : 'json',
            data : {
                email:email,
                mblno:mblno
            },
            success: function(result)
            {
                if(result)
                {

                    
                  if(password==conpass)
                  {
                     
                    
                    $.ajax({
    
                                    url : 'update.php',
                                    type : 'post',
                                    dataType : 'json',
                                    data:{
                                        email:email,
                                        mblno:mblno,
                                        password:password
                                    },
                                    success: function(result)
                                    {
                                        if(result)
                                        {
                                            alert('Password changed successfully');
                                            location.reload();
                        
                                        }
                                        else
                                        {
                                            alert('failed to update');
                                        }
                                    }
                                
                                })
                        



                  }
                 else
                 {
                     alert("password do not match");
                 }
  
                }
                else
                {
                   
                   alert("wrong Credentials");
                //   console.log(result);
                }
            }
        })
  
      
       
    })


    $('#msg').click(function(){

       
        var name = $('#conname').val();

        var mblno = $('#conmblno').val();

        var email = $('#conemail').val();

        var message = $('#message').val();

        

        // alert(name);

        // alert(mblno);
        // alert(email);

        // alert(message);
        

 

       
        if(name.length>0 && email.length>0 && message.length>0 && mblno.length>0 )
        {

           
                  $.ajax
                  ({
    
                        url : 'insertcon.php',
                        type : 'post',
                        dataType : 'json',
                        data : {
                            name:name,
                            mblno:mblno,
                            email:email,
                            message:message
                        },
                        success: function(result)
                        {
                            if(result)
                            {
                            alert('success');
                            
                            
                            }
                            else{
                                alert('failed to insert data');
                            }
                        }
                  })
             
        }
        else
        {
            alert('Please fill out all details');
        }

   
       

    })



    $('.updateprfl').click(function(){

        var Book_id=$(this).attr("vals");
       // alert(Book_id);
        var pemail = $('#profileemail').val();
        var pmblno = $('#profilemblno').val();
        var pdob = $('#profiledob').val();
        var paddress = $('#add').val();
        var pstate = $('#profilestate').val();
        var ppin = $('#profilepin').val();
        

       

         $.ajax
         ({
    
              url : 'profileupdate.php',
               type : 'post',
                dataType : 'json',
               data:{
                pemail:pemail,
              pmblno:pmblno,
              pdob:pdob,
              paddress:paddress,
             pstate:pstate,
               ppin:ppin,
               Book_id:Book_id
                 },
              success: function(result)
              {
                if(result)
                {
                    alert('Profile Updated successfully');
                    location.reload();
                    
                }
                else
                {
                    alert('failed to update');
                }
            }
        
        })

       
       // alert(pemail); alert(pmblno); alert(pusername); alert(paddress); alert(ppin); alert(pstate); alert(pdob);

})                           





    $('.changepas').click(function()
    {
        
        var pass_id=$(this).attr("vals");
        //alert(pass_id);
       
        var password = $('#cpas').val();

        var newpas = $('#npas').val();

        var conpas = $('#cnpas').val();

      //alert(password);alert(newpas);alert(conpas);

       if(newpas==conpas)
       {
       
                 $.ajax({

                                url : 'changepas.php',
                                type : 'post',
                                dataType : 'json',
                                data:{
                                    pass_id:pass_id,
                                    password:password,
                                    newpas:newpas
                                },
                                success: function(result)
                                {
                                    if(result)
                                    {
                                      //  alert('Password changed successfully');
                                        location.reload();
                    
                                    }
                                    else
                                    {
                                        alert('wrong Credentials');
                                    }
                                }
                            
                        })
                     }    
        else
         {
              alert("password do not match");
         }
})




})
   
   


   
  


