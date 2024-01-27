$(document).ready(function(){



    load_data();
    load_user_data();
    $('#action').val("Insert"); 

        function load_data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/addUsers.php",
                data:{action:action},
                success:function(data){
                    $('#user_table').html(data);
                }
            });
        }
        function load_user_data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/addUser.php",
                data:{action:action},
                success:function(data){
                    $('#users_table').html(data);
                }
            });
        }
        Load_Comment_Data();
         function Load_Comment_Data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/Fetch_Comment.php",
                data:{action:action},
                success:function(data){
                    $('#Comment_Table').html(data);
                }
            });
        }


$("#btn-add-result").click(function(){
    
    var Username = $("#Username").val();
    var Full_Name = $("#Full_Name").val();
    var Book = $("#Book").val();
    var Subject = $("#Subject").val();
    var TotalNumberOfQuestion = $("#TotalNumberOfQuestion").val();
    var Attempted_Answer = $("#Attempted_Answer").val();
    var Correct_Answer = $("#Correct_Answer").val();
    var Wrong_Answer = $("#Wrong_Answer").val();
    var No_Answer = $("#No_Answer").val();
    var Result = $("#Result").val();
    
    var dataString = 'Username='+Username+'&Full_Name='+Full_Name+'&Book='+Book+'&Subject='+Subject+'&TotalNumberOfQuestion='+TotalNumberOfQuestion+'&Attempted_Answer='+Attempted_Answer+'&Correct_Answer='+Correct_Answer+'&Wrong_Answer='+Wrong_Answer+'&No_Answer='+No_Answer+'&Result='+Result;
    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/Add_Result.php",
      data: dataString,
      success: function(data){
        $("#span-valid").html(data);    
      }
    
    });

    return false;
  });

  
$("#btn-edit-profile").click(function(){
    
    var User_ID = $("#User_ID").val();
    var Full_Name = $("#Full_Name").val();
    var Email = $("#Email").val();
    var Gender = $("#Gender").val();
    var Phone_No = $("#Phone_No").val();
    
    var dataString = 'User_ID='+User_ID+'&Full_Name='+Full_Name+'&Email='+Email+'&Gender='+Gender+'&Phone_No='+Phone_No;
    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/Edit_Profile.php",
      data: dataString,
      success: function(data){
        $("#span-user-valid").html(data);    
      }
    
    });

    return false;
  });

$("#btn-edit-password").click(function(){
    
    var User_ID = $("#User_ID").val();
    var Password = $("#Password").val();
    
    var dataString = 'User_ID='+User_ID+'&Password='+Password;
    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/Edit_Password.php",
      data: dataString,
      success: function(data){
        $("#span-valid-password").html(data);    
      }
    
    });

    return false;
  });

$("#btn-send-message").click(function(){
    
    var Full_Name = $("#Full_Name").val();
    var Email = $("#Email").val();
    var Phone_No = $("#Phone_No").val();
    var Message = $("#Message").val();
    var dataString = 'Full_Name='+Full_Name+'&Email='+Email+'&Phone_No='+Phone_No+'&Message='+Message;
    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/Add_Contact.php",
      data: dataString,
      success: function(data){
        $("#span-valid").html(data);    
      }
    
    });

    return false;
  });

    $("#user_form").on("submit", function(event){
            
            event.preventDefault();
            
            var Full_Name = $('#Full_Name').val();
            var Username = $('#Username').val();
            var Password = $('#Password').val();
            var Email = $('#Email').val();
            var Gender = $('#Gender').val();
            var Phone_No = $('#Phone_No').val();
            var Extension = $('#User_Image').val().split('.').pop().toLowerCase();

            if(Extension != ''){
                if(jQuery.inArray(Extension, ['gif', 'png', 'jpg', 'jpeg', 'mp4', 'mp3', 'mkv']) == -1){
                    alert("Invalid Image File");
                    $('#user_table').val();
                    return false;
                }
            
            }

            if(Full_Name != '' && Username != '' && Extension != ''){
                $.ajax({
                    type:"POST",
                    url:"Assets/Ajax Search/addUsers.php",
                    data:new FormData(this), 
                    contentType:false,
                    processData:false,
                    success:function(data){
                        alert(data);
                        $('#user_form')[0].reset();
                        // $('#Add_Data_Modal').modal('hide');
                        load_data();
                        $('#user_table').html(data);
                    }
                });
            }
            else{
                alert("All Fields are required");
            }

        });




    $('#searchUser').keyup(function(){
        var txtUser = $(this).val();
            $.ajax({
            url:"Ajax Search/fetch-user.php",
            type:"POST",
            data:{search:txtUser},
            dataType:"text",
            success:function(data){
                $('#resultUser').html(data);
            }
         });
    });

    $('#searchTeacher').keyup(function(){
        var txtTeacher = $(this).val();
            $.ajax({
            url:"Ajax Search/fetch-teacher.php",
            type:"POST",
            data:{search:txtTeacher},
            dataType:"text",
            success:function(data){
                $('#resultTeacher').html(data);
            }
         });
    });

    $('#searchQuizResult').keyup(function(){
        var txtQuizResult = $(this).val();
            $.ajax({
            url:"Ajax Search/fetch-QuizResult.php",
            type:"POST",
            data:{search:txtQuizResult},
            dataType:"text",
            success:function(data){
                $('#QuizResult').html(data);
            }
         });
    });

});
function ResultTimeout(){
     
    document.getElementById("btn-add-result").click();

}


