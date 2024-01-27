  $(function(){
  //For user Registration (sign up);


  $("#btn_signup").click(function(){
    var Full_Name = $("#Full_Name").val();
    var Username = $("#Username").val();
    var Password = $("#Password").val();
    var Email = $("#Email").val();
    var Gender = $("#Gender").val();
    var Phone_No = $("#Phone_No").val();
    var image = $("#image").val();
    var dataString = 'Full_Name='+Full_Name+'&Username='+Username+'&Password='+Password+'&Email='+Email+'&Gender='+Gender+'&Phone_No='+Phone_No+'&image='+image;
    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/GetSignup.php",
      data: dataString,
      success: function(data){
        $("#span-valid").html(data);
      }
    });
    return false;
  });
  
//For Adding Comment to the specific post of newsportal system

  $("#btnAddLike").click(function(){
    var News_ID = $("#News_ID").val();
    var User_ID = $("#User_ID").val();
    
    var dataString = 'News_ID='+News_ID+'&User_ID='+User_ID;
    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/addLike.php",
      data: dataString,
      success: function(data){
        $("#span-valid").html(data);
      }
    });
    return false;
  });

  $("#btndislike").click(function(){
    var Like_ID = $("#Like_ID").val();
    
    var dataString = 'Like_ID='+Like_ID;
    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/disLike.php",
      data: dataString,
      success: function(data){
        $("#span-valid").html(data);
      }
    });
    return false;
  });

  $("#btnAddComment").click(function(){
    var News_ID = $("#News_ID").val();
    var User_ID = $("#User_ID").val();
    var Comment = $("#Comment").val();
    
    var dataString = 'News_ID='+News_ID+'&User_ID='+User_ID+'&Comment='+Comment;
    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/addComment.php",
      data: dataString,
      success: function(data){
        $("#span-valid").html(data);
      }
    });
    return false;
  });
  

// $("#btn-send-messge").click(function(){
    
//     alert("This is working");
//     var Full_Name = $("#Full_Name").val();
//     var Email = $("#Email").val();
//     var Phone_No = $("#Phone_No").val();
//     var Message = $("#Message").val();
//     var dataString = 'Full_Name='+Full_Name+'&Email='+Email+'&Phone_No='+Phone_No+'&Message='+Message;
//     $.ajax({
//       type: "POST",
//       url: "Assets/Ajax Search/Add_Contact.php",
//       data: dataString,
//       success: function(data){
//         $("#span-valid").html(data);    
//       }
    
//     });

//     return false;
//   });
  $("#btn-update-profile").click(function(){
    var FullName = $("#FullName").val();
    var Username = $("#Username").val();
    var Email = $("#Email").val();
    var Gender = $("#Gender").val();
    var Phone_No = $("#Phone_No").val();
    var Image = $("#Image").val();
    var dataString = 'FullName='+FullName+'&Username='+Username+'&Gender='+Gender+'&Phone_No='+Phone_No+'&Image='+Image;
    $.ajax({
      type: "POST",
      url: "updateProfile.php",
      data: dataString,
      success: function(data){
        $("#span-valid").html(data);
      }

    });
    return false;
  });

 $("#Unit").click(function(){
    $('#Reading-Audio-Data-Modal').modal('hide');
    alert("kjfkhgjkhgjhgjh");
  });


  $("#btn-update-password").click(function(){
    
    var Password = $("#Password").val();
    var User_ID = $("#User_ID").val();
           
    var dataString = 'Password='+Password+'&User_ID='+User_ID;
    $.ajax({
      type: "POST",
      url: "updatePass.php",
      data: dataString,
      success: function(data){
        $("#span-valid").html(data);
        setTimeout(function(){
            $("#span-valid").fadeOut();
          },5000);
        // window.location = "index.php";
      }

    });
    // }
    return false;
  });
  ////////   For User Login   //////////////////////////////////////////////////////////////////

  $("#btn-signin").click(function(){
    var Username = $("#Username").val();
    var Password = $("#Password").val();
    var dataString = 'Username='+Username+'&Password='+Password;
    $.ajax({
      type:"POST",
      url:"Assets/Ajax Search/getLogin.php",
      data: dataString,
      success: function(data){
        if($.trim(data) == "incorrect") {
          $(".incorrect").show();
          setTimeout(function(){
            $(".incorrect").fadeOut();
          },5000);
          $(".empty").hide();
          $(".disable").hide();
          $(".error").hide();
          $(".failed").hide();
        }
        else if($.trim(data) == "empty") {
          $(".empty").show();
          setTimeout(function(){
            $(".empty").fadeOut();
          },5000);
          $(".incorrect").hide();
          $(".disable").hide();
          $(".error").hide();
          $(".failed").hide();
        }
        else if($.trim(data) == "failed"){
          $(".failed").show();
          setTimeout(function(){
            $(".failed").fadeOut();
          },5000);
          $(".incorrect").hide();
          $(".empty").hide();
          $(".disable").hide();
          $(".error").hide();     
        }
        else if($.trim(data) == "disable"){
          $(".empty").hide();
          $(".incorrect").hide();
          $(".failed").hide();
          $(".disable").show();
          setTimeout(function(){
            $(".disable").fadeOut();
          },5000);
          $(".error").hide();     
        }
        else if($.trim(data) == "error"){
          $(".empty").hide();
          $(".incorrect").hide();
          $(".failed").hide();
          $(".disable").hide();
          $(".error").show();
          setTimeout(function(){
            $(".error").fadeOut();
          },5000);
        }
        // else if($.trim(data) == "Administrator"){
        //   window.location = "Administrator/index.php"; 
        // }
        else{
          if($.trim(data) == "Administrator"){
          window.location = "Administrator/index.php"; 
        }
          // else($.trim(data) == "Standard"){
            // window.location = "index.php";
          }
          // window.location = "Administrator/index.php"; 
          // alert(data);
        }
      }
    });
    return true;
  });
    $("#btn-forgot-pass").click(function(){
    var Username = $("#Username").val();
    var Email = $("#Email").val();

    var dataString = 'Username='+Username+'&Email='+Email;;
    $.ajax({
      type:"POST",
      url:"getForgot.php",
      data: dataString,
      success: function(data){
        if($.trim(data) == "error") {
          $(".empty").hide();
          $(".error").show();
          setTimeout(function(){
            $(".error").fadeOut();
          },5000);
        }
        else if($.trim(data) == "empty") {
          $(".empty").show();
          setTimeout(function(){
            $(".empty").fadeOut();
          },5000);
          $(".error").hide();
        }
        else{
          window.location = "Reset-pass.php"; 
        }
      }
    });
    return false;
  });

});

$(document).ready(function(){
  $(window).scroll(function(){
           if($(this).scrollTop()>100){
            $('#topBtn').fadeIn();
           }
           else{
             $('#topBtn').fadeOut();
           } 
        });
        $("#topBtn").click(function(){
            $('html, body').animate({scrollTop:0}, 1000);
        });


        $('#AnsZero0').click(function(){
          if($('#AnsZero0').is(':enabled')){
            $('#AnsOne0').prop('disabled',true);
            $('#AnsTwo0').prop('disabled',true);
            $('#AnsThree0').prop('disabled',true);
          }
        });
        $('#AnsOne0').click(function(){
          if($('#AnsOne0').is(':enabled')){
            $('#AnsZero0').prop('disabled',true);
            $('#AnsTwo0').prop('disabled',true);
            $('#AnsThree0').prop('disabled',true);
          }
        });
        $('#AnsTwo0').click(function(){
          if($('#AnsTwo0').is(':enabled')){
            $('#AnsZero0').prop('disabled',true);
            $('#AnsOne0').prop('disabled',true);
            $('#AnsThree0').prop('disabled',true);
          }
        });
        $('#AnsThree0').click(function(){
          if($('#AnsThree0').is(':enabled')){
            $('#AnsZero0').prop('disabled',true);
            $('#AnsTwo0').prop('disabled',true);
            $('#AnsOne0').prop('disabled',true);
          }
        });


        $('#AnsZero1').click(function(){
          if($('#AnsZero1').is(':enabled')){
            $('#AnsOne1').prop('disabled',true);
            $('#AnsTwo1').prop('disabled',true);
            $('#AnsThree1').prop('disabled',true);
          }
        });
        $('#AnsOne1').click(function(){
          if($('#AnsOne1').is(':enabled')){
            $('#AnsZero1').prop('disabled',true);
            $('#AnsTwo1').prop('disabled',true);
            $('#AnsThree1').prop('disabled',true);
          }
        });
        $('#AnsTwo1').click(function(){
          if($('#AnsTwo1').is(':enabled')){
            $('#AnsZero1').prop('disabled',true);
            $('#AnsOne1').prop('disabled',true);
            $('#AnsThree1').prop('disabled',true);
          }
        });
        $('#AnsThree1').click(function(){
          if($('#AnsThree1').is(':enabled')){
            $('#AnsZero1').prop('disabled',true);
            $('#AnsTwo1').prop('disabled',true);
            $('#AnsOne1').prop('disabled',true);
          }
        });


        $('#AnsZero2').click(function(){
          if($('#AnsZero2').is(':enabled')){
            $('#AnsOne2').prop('disabled',true);
            $('#AnsTwo2').prop('disabled',true);
            $('#AnsThree2').prop('disabled',true);
          }
        });
        $('#AnsOne2').click(function(){
          if($('#AnsOne2').is(':enabled')){
            $('#AnsZero2').prop('disabled',true);
            $('#AnsTwo2').prop('disabled',true);
            $('#AnsThree2').prop('disabled',true);
          }
        });
        $('#AnsTwo2').click(function(){
          if($('#AnsTwo2').is(':enabled')){
            $('#AnsZero2').prop('disabled',true);
            $('#AnsOne2').prop('disabled',true);
            $('#AnsThree2').prop('disabled',true);
          }
        });
        $('#AnsThree2').click(function(){
          if($('#AnsThree2').is(':enabled')){
            $('#AnsZero2').prop('disabled',true);
            $('#AnsTwo2').prop('disabled',true);
            $('#AnsOne2').prop('disabled',true);
          }
        });



        $('#AnsZero3').click(function(){
          if($('#AnsZero3').is(':enabled')){
            $('#AnsOne3').prop('disabled',true);
            $('#AnsTwo3').prop('disabled',true);
            $('#AnsThree3').prop('disabled',true);
          }
        });
        $('#AnsOne3').click(function(){
          if($('#AnsOne3').is(':enabled')){
            $('#AnsZero3').prop('disabled',true);
            $('#AnsTwo3').prop('disabled',true);
            $('#AnsThree3').prop('disabled',true);
          }
        });
        $('#AnsTwo3').click(function(){
          if($('#AnsTwo3').is(':enabled')){
            $('#AnsZero3').prop('disabled',true);
            $('#AnsOne3').prop('disabled',true);
            $('#AnsThree3').prop('disabled',true);
          }
        });
        $('#AnsThree3').click(function(){
          if($('#AnsThree3').is(':enabled')){
            $('#AnsZero3').prop('disabled',true);
            $('#AnsTwo3').prop('disabled',true);
            $('#AnsOne3').prop('disabled',true);
          }
        });



        $('#AnsZero4').click(function(){
          if($('#AnsZero4').is(':enabled')){
            $('#AnsOne4').prop('disabled',true);
            $('#AnsTwo4').prop('disabled',true);
            $('#AnsThree4').prop('disabled',true);
          }
        });
        $('#AnsOne4').click(function(){
          if($('#AnsOne4').is(':enabled')){
            $('#AnsZero4').prop('disabled',true);
            $('#AnsTwo4').prop('disabled',true);
            $('#AnsThree4').prop('disabled',true);
          }
        });
        $('#AnsTwo4').click(function(){
          if($('#AnsTwo4').is(':enabled')){
            $('#AnsZero4').prop('disabled',true);
            $('#AnsOne4').prop('disabled',true);
            $('#AnsThree4').prop('disabled',true);
          }
        });
        $('#AnsThree4').click(function(){
          if($('#AnsThree4').is(':enabled')){
            $('#AnsZero4').prop('disabled',true);
            $('#AnsTwo4').prop('disabled',true);
            $('#AnsOne4').prop('disabled',true);
          }
        });


        $('#AnsZero5').click(function(){
          if($('#AnsZero5').is(':enabled')){
            $('#AnsOne5').prop('disabled',true);
            $('#AnsTwo5').prop('disabled',true);
            $('#AnsThree5').prop('disabled',true);
          }
        });
        $('#AnsOne5').click(function(){
          if($('#AnsOne5').is(':enabled')){
            $('#AnsZero5').prop('disabled',true);
            $('#AnsTwo5').prop('disabled',true);
            $('#AnsThree5').prop('disabled',true);
          }
        });
        $('#AnsTwo5').click(function(){
          if($('#AnsTwo5').is(':enabled')){
            $('#AnsZero5').prop('disabled',true);
            $('#AnsOne5').prop('disabled',true);
            $('#AnsThree5').prop('disabled',true);
          }
        });
        $('#AnsThree5').click(function(){
          if($('#AnsThree5').is(':enabled')){
            $('#AnsZero5').prop('disabled',true);
            $('#AnsTwo5').prop('disabled',true);
            $('#AnsOne5').prop('disabled',true);
          }
        });


        $('#AnsZero6').click(function(){
          if($('#AnsZero6').is(':enabled')){
            $('#AnsOne6').prop('disabled',true);
            $('#AnsTwo6').prop('disabled',true);
            $('#AnsThree6').prop('disabled',true);
          }
        });
        $('#AnsOne6').click(function(){
          if($('#AnsOne6').is(':enabled')){
            $('#AnsZero6').prop('disabled',true);
            $('#AnsTwo6').prop('disabled',true);
            $('#AnsThree6').prop('disabled',true);
          }
        });
        $('#AnsTwo6').click(function(){
          if($('#AnsTwo6').is(':enabled')){
            $('#AnsZero6').prop('disabled',true);
            $('#AnsOne6').prop('disabled',true);
            $('#AnsThree6').prop('disabled',true);
          }
        });
        $('#AnsThree6').click(function(){
          if($('#AnsThree6').is(':enabled')){
            $('#AnsZero6').prop('disabled',true);
            $('#AnsTwo6').prop('disabled',true);
            $('#AnsOne6').prop('disabled',true);
          }
        });

        $('#AnsZero7').click(function(){
          if($('#AnsZero7').is(':enabled')){
            $('#AnsOne7').prop('disabled',true);
            $('#AnsTwo7').prop('disabled',true);
            $('#AnsThree7').prop('disabled',true);
          }
        });
        $('#AnsOne7').click(function(){
          if($('#AnsOne7').is(':enabled')){
            $('#AnsZero7').prop('disabled',true);
            $('#AnsTwo7').prop('disabled',true);
            $('#AnsThree7').prop('disabled',true);
          }
        });
        $('#AnsTwo7').click(function(){
          if($('#AnsTwo7').is(':enabled')){
            $('#AnsZero7').prop('disabled',true);
            $('#AnsOne7').prop('disabled',true);
            $('#AnsThree7').prop('disabled',true);
          }
        });
        $('#AnsThree8').click(function(){
          if($('#AnsThree8').is(':enabled')){
            $('#AnsZero8').prop('disabled',true);
            $('#AnsTwo8').prop('disabled',true);
            $('#AnsOne8').prop('disabled',true);
          }
        });
         $('#AnsThree7').click(function(){
          if($('#AnsThree7').is(':enabled')){
            $('#AnsZero7').prop('disabled',true);
            $('#AnsTwo7').prop('disabled',true);
            $('#AnsOne7').prop('disabled',true);
          }
        });

        $('#AnsZero8').click(function(){
          if($('#AnsZero8').is(':enabled')){
            $('#AnsOne8').prop('disabled',true);
            $('#AnsTwo8').prop('disabled',true);
            $('#AnsThree8').prop('disabled',true);
          }
        });
        $('#AnsOne8').click(function(){
          if($('#AnsOne8').is(':enabled')){
            $('#AnsZero8').prop('disabled',true);
            $('#AnsTwo8').prop('disabled',true);
            $('#AnsThree8').prop('disabled',true);
          }
        });
        $('#AnsTwo8').click(function(){
          if($('#AnsTwo8').is(':enabled')){
            $('#AnsZero8').prop('disabled',true);
            $('#AnsOne8').prop('disabled',true);
            $('#AnsThree8').prop('disabled',true);
          }
        });
        $('#AnsThree8').click(function(){
          if($('#AnsThree8').is(':enabled')){
            $('#AnsZero8').prop('disabled',true);
            $('#AnsTwo8').prop('disabled',true);
            $('#AnsOne8').prop('disabled',true);
          }
        });


        $('#AnsZero9').click(function(){
          if($('#AnsZero9').is(':enabled')){
            $('#AnsOne9').prop('disabled',true);
            $('#AnsTwo9').prop('disabled',true);
            $('#AnsThree9').prop('disabled',true);
          }
        });
        $('#AnsOne9').click(function(){
          if($('#AnsOne9').is(':enabled')){
            $('#AnsZero9').prop('disabled',true);
            $('#AnsTwo9').prop('disabled',true);
            $('#AnsThree9').prop('disabled',true);
          }
        });
        $('#AnsTwo9').click(function(){
          if($('#AnsTwo9').is(':enabled')){
            $('#AnsZero9').prop('disabled',true);
            $('#AnsOne9').prop('disabled',true);
            $('#AnsThree9').prop('disabled',true);
          }
        });
        $('#AnsThree9').click(function(){
          if($('#AnsThree9').is(':enabled')){
            $('#AnsZero9').prop('disabled',true);
            $('#AnsTwo9').prop('disabled',true);
            $('#AnsOne9').prop('disabled',true);
          }
        });


        $('#AnsZero10').click(function(){
          if($('#AnsZero10').is(':enabled')){
            $('#AnsOne10').prop('disabled',true);
            $('#AnsTwo10').prop('disabled',true);
            $('#AnsThree10').prop('disabled',true);
          }
        });
        $('#AnsOne10').click(function(){
          if($('#AnsOne10').is(':enabled')){
            $('#AnsZero10').prop('disabled',true);
            $('#AnsTwo10').prop('disabled',true);
            $('#AnsThree10').prop('disabled',true);
          }
        });
        $('#AnsTwo10').click(function(){
          if($('#AnsTwo10').is(':enabled')){
            $('#AnsZero10').prop('disabled',true);
            $('#AnsOne10').prop('disabled',true);
            $('#AnsThree10').prop('disabled',true);
          }
        });
        $('#AnsThree10').click(function(){
          if($('#AnsThree10').is(':enabled')){
            $('#AnsZero10').prop('disabled',true);
            $('#AnsTwo10').prop('disabled',true);
            $('#AnsOne10').prop('disabled',true);
          }
        });


        $('#AnsZero11').click(function(){
          if($('#AnsZero11').is(':enabled')){
            $('#AnsOne11').prop('disabled',true);
            $('#AnsTwo11').prop('disabled',true);
            $('#AnsThree11').prop('disabled',true);
          }
        });
        $('#AnsOne11').click(function(){
          if($('#AnsOne11').is(':enabled')){
            $('#AnsZero11').prop('disabled',true);
            $('#AnsTwo11').prop('disabled',true);
            $('#AnsThree11').prop('disabled',true);
          }
        });
        $('#AnsTwo11').click(function(){
          if($('#AnsTwo11').is(':enabled')){
            $('#AnsZero11').prop('disabled',true);
            $('#AnsOne11').prop('disabled',true);
            $('#AnsThree11').prop('disabled',true);
          }
        });
        $('#AnsThree11').click(function(){
          if($('#AnsThree11').is(':enabled')){
            $('#AnsZero11').prop('disabled',true);
            $('#AnsTwo11').prop('disabled',true);
            $('#AnsOne11').prop('disabled',true);
          }
        });

        $('#AnsZero12').click(function(){
          if($('#AnsZero12').is(':enabled')){
            $('#AnsOne12').prop('disabled',true);
            $('#AnsTwo12').prop('disabled',true);
            $('#AnsThree12').prop('disabled',true);
          }
        });
        $('#AnsOne12').click(function(){
          if($('#AnsOne12').is(':enabled')){
            $('#AnsZero12').prop('disabled',true);
            $('#AnsTwo12').prop('disabled',true);
            $('#AnsThree12').prop('disabled',true);
          }
        });
        $('#AnsTwo3').click(function(){
          if($('#AnsTwo12').is(':enabled')){
            $('#AnsZero12').prop('disabled',true);
            $('#AnsOne12').prop('disabled',true);
            $('#AnsThree12').prop('disabled',true);
          }
        });
        $('#AnsThree12').click(function(){
          if($('#AnsThree12').is(':enabled')){
            $('#AnsZero12').prop('disabled',true);
            $('#AnsTwo12').prop('disabled',true);
            $('#AnsOne12').prop('disabled',true);
          }
        });

        $('#AnsZero13').click(function(){
          if($('#AnsZero13').is(':enabled')){
            $('#AnsOne13').prop('disabled',true);
            $('#AnsTwo13').prop('disabled',true);
            $('#AnsThree13').prop('disabled',true);
          }
        });
        $('#AnsOne13').click(function(){
          if($('#AnsOne13').is(':enabled')){
            $('#AnsZero13').prop('disabled',true);
            $('#AnsTwo13').prop('disabled',true);
            $('#AnsThree13').prop('disabled',true);
          }
        });
        $('#AnsTwo13').click(function(){
          if($('#AnsTwo13').is(':enabled')){
            $('#AnsZero13').prop('disabled',true);
            $('#AnsOne13').prop('disabled',true);
            $('#AnsThree13').prop('disabled',true);
          }
        });
        $('#AnsThree13').click(function(){
          if($('#AnsThree13').is(':enabled')){
            $('#AnsZero13').prop('disabled',true);
            $('#AnsTwo13').prop('disabled',true);
            $('#AnsOne13').prop('disabled',true);
          }
        });



        $('#AnsZero14').click(function(){
          if($('#AnsZero14').is(':enabled')){
            $('#AnsOne14').prop('disabled',true);
            $('#AnsTwo14').prop('disabled',true);
            $('#AnsThree14').prop('disabled',true);
          }
        });
        $('#AnsOne14').click(function(){
          if($('#AnsOne14').is(':enabled')){
            $('#AnsZero14').prop('disabled',true);
            $('#AnsTwo14').prop('disabled',true);
            $('#AnsThree14').prop('disabled',true);
          }
        });
        $('#AnsTwo14').click(function(){
          if($('#AnsTwo14').is(':enabled')){
            $('#AnsZero14').prop('disabled',true);
            $('#AnsOne14').prop('disabled',true);
            $('#AnsThree14').prop('disabled',true);
          }
        });
        $('#AnsThree14').click(function(){
          if($('#AnsThree14').is(':enabled')){
            $('#AnsZero14').prop('disabled',true);
            $('#AnsTwo14').prop('disabled',true);
            $('#AnsOne14').prop('disabled',true);
          }
        });


        $('#AnsZero15').click(function(){
          if($('#AnsZero15').is(':enabled')){
            $('#AnsOne15').prop('disabled',true);
            $('#AnsTwo15').prop('disabled',true);
            $('#AnsThree15').prop('disabled',true);
          }
        });
        $('#AnsOne15').click(function(){
          if($('#AnsOne15').is(':enabled')){
            $('#AnsZero15').prop('disabled',true);
            $('#AnsTwo15').prop('disabled',true);
            $('#AnsThree15').prop('disabled',true);
          }
        });
        $('#AnsTwo15').click(function(){
          if($('#AnsTwo15').is(':enabled')){
            $('#AnsZero15').prop('disabled',true);
            $('#AnsOne15').prop('disabled',true);
            $('#AnsThree15').prop('disabled',true);
          }
        });
        $('#AnsThree15').click(function(){
          if($('#AnsThree15').is(':enabled')){
            $('#AnsZero15').prop('disabled',true);
            $('#AnsTwo15').prop('disabled',true);
            $('#AnsOne15').prop('disabled',true);
          }
        });


        $('#AnsZero16').click(function(){
          if($('#AnsZero16').is(':enabled')){
            $('#AnsOne16').prop('disabled',true);
            $('#AnsTwo16').prop('disabled',true);
            $('#AnsThree16').prop('disabled',true);
          }
        });
        $('#AnsOne16').click(function(){
          if($('#AnsOne16').is(':enabled')){
            $('#AnsZero16').prop('disabled',true);
            $('#AnsTwo16').prop('disabled',true);
            $('#AnsThree16').prop('disabled',true);
          }
        });
        $('#AnsTwo16').click(function(){
          if($('#AnsTwo16').is(':enabled')){
            $('#AnsZero16').prop('disabled',true);
            $('#AnsOne16').prop('disabled',true);
            $('#AnsThree16').prop('disabled',true);
          }
        });
        $('#AnsThree16').click(function(){
          if($('#AnsThree16').is(':enabled')){
            $('#AnsZero16').prop('disabled',true);
            $('#AnsTwo16').prop('disabled',true);
            $('#AnsOne16').prop('disabled',true);
          }
        });

        $('#AnsZero17').click(function(){
          if($('#AnsZero17').is(':enabled')){
            $('#AnsOne17').prop('disabled',true);
            $('#AnsTwo17').prop('disabled',true);
            $('#AnsThree17').prop('disabled',true);
          }
        });
        $('#AnsOne17').click(function(){
          if($('#AnsOne17').is(':enabled')){
            $('#AnsZero17').prop('disabled',true);
            $('#AnsTwo17').prop('disabled',true);
            $('#AnsThree17').prop('disabled',true);
          }
        });
        $('#AnsTwo17').click(function(){
          if($('#AnsTwo17').is(':enabled')){
            $('#AnsZero17').prop('disabled',true);
            $('#AnsOne17').prop('disabled',true);
            $('#AnsThree17').prop('disabled',true);
          }
        });


        $('#AnsThree18').click(function(){
          if($('#AnsThree18').is(':enabled')){
            $('#AnsZero18').prop('disabled',true);
            $('#AnsTwo18').prop('disabled',true);
            $('#AnsOne18').prop('disabled',true);
          }
        });
        $('#AnsZero18').click(function(){
          if($('#AnsZero18').is(':enabled')){
            $('#AnsOne18').prop('disabled',true);
            $('#AnsTwo18').prop('disabled',true);
            $('#AnsThree18').prop('disabled',true);
          }
        });
        $('#AnsOne18').click(function(){
          if($('#AnsOne18').is(':enabled')){
            $('#AnsZero18').prop('disabled',true);
            $('#AnsTwo18').prop('disabled',true);
            $('#AnsThree18').prop('disabled',true);
          }
        });
        $('#AnsTwo18').click(function(){
          if($('#AnsTwo18').is(':enabled')){
            $('#AnsZero18').prop('disabled',true);
            $('#AnsOne18').prop('disabled',true);
            $('#AnsThree18').prop('disabled',true);
          }
        });
        

        $('#AnsZero19').click(function(){
          if($('#AnsZero19').is(':enabled')){
            $('#AnsOne19').prop('disabled',true);
            $('#AnsTwo19').prop('disabled',true);
            $('#AnsThree19').prop('disabled',true);
          }
        });
        $('#AnsOne19').click(function(){
          if($('#AnsOne19').is(':enabled')){
            $('#AnsZero19').prop('disabled',true);
            $('#AnsTwo19').prop('disabled',true);
            $('#AnsThree19').prop('disabled',true);
          }
        });
        $('#AnsTwo19').click(function(){
          if($('#AnsTwo19').is(':enabled')){
            $('#AnsZero19').prop('disabled',true);
            $('#AnsOne19').prop('disabled',true);
            $('#AnsThree19').prop('disabled',true);
          }
        });
        $('#AnsThree19').click(function(){
          if($('#AnsThree19').is(':enabled')){
            $('#AnsZero19').prop('disabled',true);
            $('#AnsTwo19').prop('disabled',true);
            $('#AnsOne19').prop('disabled',true);
          }
        });


        $('#AnsZero20').click(function(){
          if($('#AnsZero20').is(':enabled')){
            $('#AnsOne20').prop('disabled',true);
            $('#AnsTwo20').prop('disabled',true);
            $('#AnsThree20').prop('disabled',true);
          }
        });
        $('#AnsOne20').click(function(){
          if($('#AnsOne20').is(':enabled')){
            $('#AnsZero20').prop('disabled',true);
            $('#AnsTwo20').prop('disabled',true);
            $('#AnsThree20').prop('disabled',true);
          }
        });
        $('#AnsTwo20').click(function(){
          if($('#AnsTwo20').is(':enabled')){
            $('#AnsZero20').prop('disabled',true);
            $('#AnsOne20').prop('disabled',true);
            $('#AnsThree20').prop('disabled',true);
          }
        });
        $('#AnsThree20').click(function(){
          if($('#AnsThree20').is(':enabled')){
            $('#AnsZero20').prop('disabled',true);
            $('#AnsTwo20').prop('disabled',true);
            $('#AnsOne20').prop('disabled',true);
          }
        });


        $('#AnsZero21').click(function(){
          if($('#AnsZero21').is(':enabled')){
            $('#AnsOne21').prop('disabled',true);
            $('#AnsTwo21').prop('disabled',true);
            $('#AnsThree21').prop('disabled',true);
          }
        });
        $('#AnsOne21').click(function(){
          if($('#AnsOne21').is(':enabled')){
            $('#AnsZero21').prop('disabled',true);
            $('#AnsTwo21').prop('disabled',true);
            $('#AnsThree21').prop('disabled',true);
          }
        });
        $('#AnsTwo21').click(function(){
          if($('#AnsTwo21').is(':enabled')){
            $('#AnsZero21').prop('disabled',true);
            $('#AnsOne21').prop('disabled',true);
            $('#AnsThree21').prop('disabled',true);
          }
        });
        $('#AnsThree21').click(function(){
          if($('#AnsThree21').is(':enabled')){
            $('#AnsZero21').prop('disabled',true);
            $('#AnsTwo21').prop('disabled',true);
            $('#AnsOne21').prop('disabled',true);
          }
        });


        $('#AnsZero22').click(function(){
          if($('#AnsZero22').is(':enabled')){
            $('#AnsOne22').prop('disabled',true);
            $('#AnsTwo22').prop('disabled',true);
            $('#AnsThree22').prop('disabled',true);
          }
        });
        $('#AnsOne22').click(function(){
          if($('#AnsOne22').is(':enabled')){
            $('#AnsZero22').prop('disabled',true);
            $('#AnsTwo22').prop('disabled',true);
            $('#AnsThree22').prop('disabled',true);
          }
        });
        $('#AnsTwo22').click(function(){
          if($('#AnsTwo22').is(':enabled')){
            $('#AnsZero22').prop('disabled',true);
            $('#AnsOne22').prop('disabled',true);
            $('#AnsThree22').prop('disabled',true);
          }
        });
        $('#AnsThree22').click(function(){
          if($('#AnsThree22').is(':enabled')){
            $('#AnsZero22').prop('disabled',true);
            $('#AnsTwo22').prop('disabled',true);
            $('#AnsOne22').prop('disabled',true);
          }
        });



        $('#AnsZero23').click(function(){
          if($('#AnsZero23').is(':enabled')){
            $('#AnsOne23').prop('disabled',true);
            $('#AnsTwo23').prop('disabled',true);
            $('#AnsThree23').prop('disabled',true);
          }
        });
        $('#AnsOne23').click(function(){
          if($('#AnsOne23').is(':enabled')){
            $('#AnsZero23').prop('disabled',true);
            $('#AnsTwo23').prop('disabled',true);
            $('#AnsThree23').prop('disabled',true);
          }
        });
        $('#AnsTwo3').click(function(){
          if($('#AnsTwo23').is(':enabled')){
            $('#AnsZero23').prop('disabled',true);
            $('#AnsOne23').prop('disabled',true);
            $('#AnsThree23').prop('disabled',true);
          }
        });
        $('#AnsThree23').click(function(){
          if($('#AnsThree23').is(':enabled')){
            $('#AnsZero23').prop('disabled',true);
            $('#AnsTwo23').prop('disabled',true);
            $('#AnsOne23').prop('disabled',true);
          }
        });



        $('#AnsZero24').click(function(){
          if($('#AnsZero24').is(':enabled')){
            $('#AnsOne24').prop('disabled',true);
            $('#AnsTwo24').prop('disabled',true);
            $('#AnsThree24').prop('disabled',true);
          }
        });
        $('#AnsOne24').click(function(){
          if($('#AnsOne24').is(':enabled')){
            $('#AnsZero24').prop('disabled',true);
            $('#AnsTwo24').prop('disabled',true);
            $('#AnsThree24').prop('disabled',true);
          }
        });
        $('#AnsTwo24').click(function(){
          if($('#AnsTwo24').is(':enabled')){
            $('#AnsZero24').prop('disabled',true);
            $('#AnsOne24').prop('disabled',true);
            $('#AnsThree24').prop('disabled',true);
          }
        });
        $('#AnsThree24').click(function(){
          if($('#AnsThree24').is(':enabled')){
            $('#AnsZero24').prop('disabled',true);
            $('#AnsTwo24').prop('disabled',true);
            $('#AnsOne24').prop('disabled',true);
          }
        });


        $('#AnsZero25').click(function(){
          if($('#AnsZero25').is(':enabled')){
            $('#AnsOne25').prop('disabled',true);
            $('#AnsTwo25').prop('disabled',true);
            $('#AnsThree25').prop('disabled',true);
          }
        });
        $('#AnsOne25').click(function(){
          if($('#AnsOne25').is(':enabled')){
            $('#AnsZero25').prop('disabled',true);
            $('#AnsTwo25').prop('disabled',true);
            $('#AnsThree25').prop('disabled',true);
          }
        });
        $('#AnsTwo25').click(function(){
          if($('#AnsTwo25').is(':enabled')){
            $('#AnsZero25').prop('disabled',true);
            $('#AnsOne25').prop('disabled',true);
            $('#AnsThree25').prop('disabled',true);
          }
        });
        $('#AnsThree25').click(function(){
          if($('#AnsThree25').is(':enabled')){
            $('#AnsZero25').prop('disabled',true);
            $('#AnsTwo25').prop('disabled',true);
            $('#AnsOne25').prop('disabled',true);
          }
        });


        $('#AnsZero26').click(function(){
          if($('#AnsZero26').is(':enabled')){
            $('#AnsOne26').prop('disabled',true);
            $('#AnsTwo26').prop('disabled',true);
            $('#AnsThree26').prop('disabled',true);
          }
        });
        $('#AnsOne26').click(function(){
          if($('#AnsOne26').is(':enabled')){
            $('#AnsZero26').prop('disabled',true);
            $('#AnsTwo26').prop('disabled',true);
            $('#AnsThree26').prop('disabled',true);
          }
        });
        $('#AnsTwo26').click(function(){
          if($('#AnsTwo26').is(':enabled')){
            $('#AnsZero26').prop('disabled',true);
            $('#AnsOne26').prop('disabled',true);
            $('#AnsThree26').prop('disabled',true);
          }
        });
        $('#AnsThree26').click(function(){
          if($('#AnsThree26').is(':enabled')){
            $('#AnsZero26').prop('disabled',true);
            $('#AnsTwo26').prop('disabled',true);
            $('#AnsOne26').prop('disabled',true);
          }
        });

        $('#AnsZero27').click(function(){
          if($('#AnsZero27').is(':enabled')){
            $('#AnsOne27').prop('disabled',true);
            $('#AnsTwo27').prop('disabled',true);
            $('#AnsThree27').prop('disabled',true);
          }
        });
        $('#AnsOne27').click(function(){
          if($('#AnsOne27').is(':enabled')){
            $('#AnsZero27').prop('disabled',true);
            $('#AnsTwo27').prop('disabled',true);
            $('#AnsThree27').prop('disabled',true);
          }
        });
        $('#AnsTwo27').click(function(){
          if($('#AnsTwo27').is(':enabled')){
            $('#AnsZero27').prop('disabled',true);
            $('#AnsOne27').prop('disabled',true);
            $('#AnsThree27').prop('disabled',true);
          }
        });
        $('#AnsThree8').click(function(){
          if($('#AnsThree8').is(':enabled')){
            $('#AnsZero8').prop('disabled',true);
            $('#AnsTwo8').prop('disabled',true);
            $('#AnsOne8').prop('disabled',true);
          }
        });


        $('#AnsZero28').click(function(){
          if($('#AnsZero28').is(':enabled')){
            $('#AnsOne28').prop('disabled',true);
            $('#AnsTwo28').prop('disabled',true);
            $('#AnsThree28').prop('disabled',true);
          }
        });
        $('#AnsOne28').click(function(){
          if($('#AnsOne28').is(':enabled')){
            $('#AnsZero28').prop('disabled',true);
            $('#AnsTwo28').prop('disabled',true);
            $('#AnsThree28').prop('disabled',true);
          }
        });
        $('#AnsTwo28').click(function(){
          if($('#AnsTwo28').is(':enabled')){
            $('#AnsZero28').prop('disabled',true);
            $('#AnsOne28').prop('disabled',true);
            $('#AnsThree28').prop('disabled',true);
          }
        });
        $('#AnsThree28').click(function(){
          if($('#AnsThree28').is(':enabled')){
            $('#AnsZero28').prop('disabled',true);
            $('#AnsTwo28').prop('disabled',true);
            $('#AnsOne28').prop('disabled',true);
          }
        });


        $('#AnsZero29').click(function(){
          if($('#AnsZero29').is(':enabled')){
            $('#AnsOne29').prop('disabled',true);
            $('#AnsTwo29').prop('disabled',true);
            $('#AnsThree29').prop('disabled',true);
          }
        });
        $('#AnsOne29').click(function(){
          if($('#AnsOne29').is(':enabled')){
            $('#AnsZero29').prop('disabled',true);
            $('#AnsTwo29').prop('disabled',true);
            $('#AnsThree29').prop('disabled',true);
          }
        });
        $('#AnsTwo29').click(function(){
          if($('#AnsTwo29').is(':enabled')){
            $('#AnsZero29').prop('disabled',true);
            $('#AnsOne29').prop('disabled',true);
            $('#AnsThree29').prop('disabled',true);
          }
        });
        $('#AnsThree29').click(function(){
          if($('#AnsThree29').is(':enabled')){
            $('#AnsZero29').prop('disabled',true);
            $('#AnsTwo29').prop('disabled',true);
            $('#AnsOne29').prop('disabled',true);
          }
        });

        $('#AnsZero30').click(function(){
          if($('#AnsZero30').is(':enabled')){
            $('#AnsOne30').prop('disabled',true);
            $('#AnsTwo30').prop('disabled',true);
            $('#AnsThree30').prop('disabled',true);
          }
        });
        $('#AnsOne30').click(function(){
          if($('#AnsOne30').is(':enabled')){
            $('#AnsZero30').prop('disabled',true);
            $('#AnsTwo30').prop('disabled',true);
            $('#AnsThree30').prop('disabled',true);
          }
        });
        $('#AnsTwo30').click(function(){
          if($('#AnsTwo30').is(':enabled')){
            $('#AnsZero30').prop('disabled',true);
            $('#AnsOne30').prop('disabled',true);
            $('#AnsThree30').prop('disabled',true);
          }
        });
        $('#AnsThree30').click(function(){
          if($('#AnsThree30').is(':enabled')){
            $('#AnsZero30').prop('disabled',true);
            $('#AnsTwo30').prop('disabled',true);
            $('#AnsOne30').prop('disabled',true);
          }
        });

        $('#AnsZero31').click(function(){
          if($('#AnsZero31').is(':enabled')){
            $('#AnsOne31').prop('disabled',true);
            $('#AnsTwo31').prop('disabled',true);
            $('#AnsThree31').prop('disabled',true);
          }
        });
        $('#AnsOne31').click(function(){
          if($('#AnsOne31').is(':enabled')){
            $('#AnsZero31').prop('disabled',true);
            $('#AnsTwo31').prop('disabled',true);
            $('#AnsThree31').prop('disabled',true);
          }
        });
        $('#AnsTwo31').click(function(){
          if($('#AnsTwo31').is(':enabled')){
            $('#AnsZero31').prop('disabled',true);
            $('#AnsOne31').prop('disabled',true);
            $('#AnsThree31').prop('disabled',true);
          }
        });
        $('#AnsThree31').click(function(){
          if($('#AnsThree31').is(':enabled')){
            $('#AnsZero31').prop('disabled',true);
            $('#AnsTwo31').prop('disabled',true);
            $('#AnsOne31').prop('disabled',true);
          }
        });


        $('#AnsZero32').click(function(){
          if($('#AnsZero32').is(':enabled')){
            $('#AnsOne32').prop('disabled',true);
            $('#AnsTwo32').prop('disabled',true);
            $('#AnsThree32').prop('disabled',true);
          }
        });
        $('#AnsOne32').click(function(){
          if($('#AnsOne32').is(':enabled')){
            $('#AnsZero32').prop('disabled',true);
            $('#AnsTwo32').prop('disabled',true);
            $('#AnsThree32').prop('disabled',true);
          }
        });
        $('#AnsTwo2').click(function(){
          if($('#AnsTwo32').is(':enabled')){
            $('#AnsZero32').prop('disabled',true);
            $('#AnsOne32').prop('disabled',true);
            $('#AnsThree32').prop('disabled',true);
          }
        });
        $('#AnsThree32').click(function(){
          if($('#AnsThree32').is(':enabled')){
            $('#AnsZero32').prop('disabled',true);
            $('#AnsTwo32').prop('disabled',true);
            $('#AnsOne32').prop('disabled',true);
          }
        });



        $('#AnsZero33').click(function(){
          if($('#AnsZero33').is(':enabled')){
            $('#AnsOne33').prop('disabled',true);
            $('#AnsTwo33').prop('disabled',true);
            $('#AnsThree33').prop('disabled',true);
          }
        });
        $('#AnsOne33').click(function(){
          if($('#AnsOne33').is(':enabled')){
            $('#AnsZero33').prop('disabled',true);
            $('#AnsTwo33').prop('disabled',true);
            $('#AnsThree33').prop('disabled',true);
          }
        });
        $('#AnsTwo33').click(function(){
          if($('#AnsTwo33').is(':enabled')){
            $('#AnsZero33').prop('disabled',true);
            $('#AnsOne33').prop('disabled',true);
            $('#AnsThree33').prop('disabled',true);
          }
        });
        $('#AnsThree33').click(function(){
          if($('#AnsThree33').is(':enabled')){
            $('#AnsZero33').prop('disabled',true);
            $('#AnsTwo33').prop('disabled',true);
            $('#AnsOne33').prop('disabled',true);
          }
        });



        $('#AnsZero34').click(function(){
          if($('#AnsZero34').is(':enabled')){
            $('#AnsOne34').prop('disabled',true);
            $('#AnsTwo34').prop('disabled',true);
            $('#AnsThree34').prop('disabled',true);
          }
        });
        $('#AnsOne34').click(function(){
          if($('#AnsOne34').is(':enabled')){
            $('#AnsZero34').prop('disabled',true);
            $('#AnsTwo34').prop('disabled',true);
            $('#AnsThree34').prop('disabled',true);
          }
        });
        $('#AnsTwo34').click(function(){
          if($('#AnsTwo34').is(':enabled')){
            $('#AnsZero34').prop('disabled',true);
            $('#AnsOne34').prop('disabled',true);
            $('#AnsThree34').prop('disabled',true);
          }
        });
        $('#AnsThree34').click(function(){
          if($('#AnsThree34').is(':enabled')){
            $('#AnsZero34').prop('disabled',true);
            $('#AnsTwo34').prop('disabled',true);
            $('#AnsOne34').prop('disabled',true);
          }
        });


        $('#AnsZero35').click(function(){
          if($('#AnsZero35').is(':enabled')){
            $('#AnsOne35').prop('disabled',true);
            $('#AnsTwo35').prop('disabled',true);
            $('#AnsThree35').prop('disabled',true);
          }
        });
        $('#AnsOne35').click(function(){
          if($('#AnsOne35').is(':enabled')){
            $('#AnsZero35').prop('disabled',true);
            $('#AnsTwo35').prop('disabled',true);
            $('#AnsThree35').prop('disabled',true);
          }
        });
        $('#AnsTwo5').click(function(){
          if($('#AnsTwo5').is(':enabled')){
            $('#AnsZero5').prop('disabled',true);
            $('#AnsOne5').prop('disabled',true);
            $('#AnsThree5').prop('disabled',true);
          }
        });
        $('#AnsThree35').click(function(){
          if($('#AnsThree35').is(':enabled')){
            $('#AnsZero35').prop('disabled',true);
            $('#AnsTwo35').prop('disabled',true);
            $('#AnsOne35').prop('disabled',true);
          }
        });


        $('#AnsZero36').click(function(){
          if($('#AnsZero36').is(':enabled')){
            $('#AnsOne36').prop('disabled',true);
            $('#AnsTwo36').prop('disabled',true);
            $('#AnsThree36').prop('disabled',true);
          }
        });
        $('#AnsOne36').click(function(){
          if($('#AnsOne36').is(':enabled')){
            $('#AnsZero36').prop('disabled',true);
            $('#AnsTwo36').prop('disabled',true);
            $('#AnsThree36').prop('disabled',true);
          }
        });
        $('#AnsTwo36').click(function(){
          if($('#AnsTwo36').is(':enabled')){
            $('#AnsZero36').prop('disabled',true);
            $('#AnsOne36').prop('disabled',true);
            $('#AnsThree36').prop('disabled',true);
          }
        });
        $('#AnsThree36').click(function(){
          if($('#AnsThree36').is(':enabled')){
            $('#AnsZero36').prop('disabled',true);
            $('#AnsTwo36').prop('disabled',true);
            $('#AnsOne36').prop('disabled',true);
          }
        });

        $('#AnsZero37').click(function(){
          if($('#AnsZero37').is(':enabled')){
            $('#AnsOne37').prop('disabled',true);
            $('#AnsTwo37').prop('disabled',true);
            $('#AnsThree37').prop('disabled',true);
          }
        });
        $('#AnsOne37').click(function(){
          if($('#AnsOne37').is(':enabled')){
            $('#AnsZero37').prop('disabled',true);
            $('#AnsTwo37').prop('disabled',true);
            $('#AnsThree37').prop('disabled',true);
          }
        });
        $('#AnsTwo37').click(function(){
          if($('#AnsTwo37').is(':enabled')){
            $('#AnsZero37').prop('disabled',true);
            $('#AnsOne37').prop('disabled',true);
            $('#AnsThree37').prop('disabled',true);
          }
        });
        $('#AnsThree38').click(function(){
          if($('#AnsThree38').is(':enabled')){
            $('#AnsZero38').prop('disabled',true);
            $('#AnsTwo38').prop('disabled',true);
            $('#AnsOne38').prop('disabled',true);
          }
        });


        $('#AnsZero38').click(function(){
          if($('#AnsZero38').is(':enabled')){
            $('#AnsOne38').prop('disabled',true);
            $('#AnsTwo38').prop('disabled',true);
            $('#AnsThree38').prop('disabled',true);
          }
        });
        $('#AnsOne38').click(function(){
          if($('#AnsOne38').is(':enabled')){
            $('#AnsZero38').prop('disabled',true);
            $('#AnsTwo38').prop('disabled',true);
            $('#AnsThree38').prop('disabled',true);
          }
        });
        $('#AnsTwo38').click(function(){
          if($('#AnsTwo38').is(':enabled')){
            $('#AnsZero38').prop('disabled',true);
            $('#AnsOne38').prop('disabled',true);
            $('#AnsThree38').prop('disabled',true);
          }
        });
        $('#AnsThree38').click(function(){
          if($('#AnsThree38').is(':enabled')){
            $('#AnsZero38').prop('disabled',true);
            $('#AnsTwo38').prop('disabled',true);
            $('#AnsOne38').prop('disabled',true);
          }
        });


        $('#AnsZero39').click(function(){
          if($('#AnsZero39').is(':enabled')){
            $('#AnsOne39').prop('disabled',true);
            $('#AnsTwo39').prop('disabled',true);
            $('#AnsThree39').prop('disabled',true);
          }
        });
        $('#AnsOne39').click(function(){
          if($('#AnsOne39').is(':enabled')){
            $('#AnsZero39').prop('disabled',true);
            $('#AnsTwo39').prop('disabled',true);
            $('#AnsThree39').prop('disabled',true);
          }
        });
        $('#AnsTwo39').click(function(){
          if($('#AnsTwo39').is(':enabled')){
            $('#AnsZero39').prop('disabled',true);
            $('#AnsOne39').prop('disabled',true);
            $('#AnsThree39').prop('disabled',true);
          }
        });
        $('#AnsThree39').click(function(){
          if($('#AnsThree39').is(':enabled')){
            $('#AnsZero39').prop('disabled',true);
            $('#AnsTwo39').prop('disabled',true);
            $('#AnsOne39').prop('disabled',true);
          }
        });


        $('#AnsZero40').click(function(){
          if($('#AnsZero40').is(':enabled')){
            $('#AnsOne40').prop('disabled',true);
            $('#AnsTwo40').prop('disabled',true);
            $('#AnsThree40').prop('disabled',true);
          }
        });
        $('#AnsOne40').click(function(){
          if($('#AnsOne40').is(':enabled')){
            $('#AnsZero40').prop('disabled',true);
            $('#AnsTwo40').prop('disabled',true);
            $('#AnsThree40').prop('disabled',true);
          }
        });
        $('#AnsTwo40').click(function(){
          if($('#AnsTwo40').is(':enabled')){
            $('#AnsZero40').prop('disabled',true);
            $('#AnsOne40').prop('disabled',true);
            $('#AnsThree40').prop('disabled',true);
          }
        });
        $('#AnsThree40').click(function(){
          if($('#AnsThree40').is(':enabled')){
            $('#AnsZero40').prop('disabled',true);
            $('#AnsTwo40').prop('disabled',true);
            $('#AnsOne40').prop('disabled',true);
          }
        });

        });
function timeout(){
         var minute = Math.floor(timeLeft/60);
         var second = timeLeft%60;
         if(timeLeft<=0){
          clearTimeout(tm);
          document.getElementById("QuizAnswer").submit();
         }
         else{
            if(second<10){
                second="0"+second;
            }
            if(minute<=0 && second<10){
                document.getElementById("msg").innerHTML=('You are out of time Submit the quiz!');
            }
            if(minute<=0 && second<3){
                var audio = new Audio("Tere Meri Kahaani.mp3");
                audio.play();
            }
            if(minute<=0 && second<2){
                alert('you have not complete the quiz in givin time!');
            }
            if(minute<10){
                minute="0"+minute;
            }
            document.getElementById("Time").innerHTML=minute+":"+second;
         }
         timeLeft--;
         var tm = setTimeout(function(){timeout()},1000);
      }

 function ResultTimeout(){
     
      document.getElementById("btn-add-result").click();

}
// var audio = new Audio("Tere Meri Kahaani.mp3");
//   audio.play();