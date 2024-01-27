  $(function(){

$("#btn-edit-ads").click(function(){

    var Ad_ID = $("#Advertisement_Ad_ID").val();
    var Heading = $("#Advertisement_Heading").val();
    

    var dataString = 'Advertisement_Ad_ID='+Ad_ID+'&Advertisement_Heading='+Heading;

    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/Edit_Ads.php",
      data: dataString,
      success: function(data){
        $("#span-valid").html(data);
      }
        
    });
  
    return false;
  });

$("#btn-edit-slide").click(function(){

    var Carousel_ID = $("#Slide_Carousel_ID").val();
    var Heading = $("#Slide_Heading").val();
    

    var dataString = 'Slide_Carousel_ID='+Carousel_ID+'&Slide_Heading='+Heading;

    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/Edit_Slide.php",
      data: dataString,
      success: function(data){
        $("#span-valid").html(data);
      }
        
    });
  
    return false;
  });

$("#btn-edit-news").click(function(){

    var News_ID = $("#News-News_ID").val();
    var Heading = $("#News-Heading").val();
    var Body = $("#News-Body").val();
    var Source = $("#News-Source").val();
    

    var dataString = 'News-News_ID='+News_ID+'&News-Heading='+Heading+'&News-Body='+Body+'&News-Source='+Source;

    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/Edit_News.php",
      data: dataString,
      success: function(data){
          $("#span-valid").html(data);
          // $("#News_Table").html(data);
      }
        
    });
  
    return false;
  });

$("#btn-edit-research").click(function(){

    var Research_ID = $("#Research_Research_ID").val();
    var Heading = $("#Research_Heading").val();
    var Body = $("#Research_Body").val();
    var User_ID = $("#Research_User_ID").val();
    
    var dataString = 'Research_Research_ID='+Research_ID+'&Research_Heading='+Heading+'&Research_Body='+Body+'&Research_User_ID='+User_ID;

    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/Edit_Research.php",
      data: dataString,
      success: function(data){
          $("#span-valid").html(data);
      }
        
    });
  
    return false;
  });

$("#btn-edit-reading").click(function(){

    var Reading_ID = $("#Reading_ID").val();
    var Body = $("#Reading_Body").val();
    var Question = $("#Reading_Question").val();
    var First_Answer = $("#Reading_First_Answer").val();
    var Second_Answer = $("#Reading_Second_Answer").val();
    var Third_Answer = $("#Reading_Third_Answer").val();
    var Fourth_Answer = $("#Reading_Fourth_Answer").val();
    var Right_Answer = $("#Reading_Right_Answer").val();
    var Book_ID = $("#Reading_Book_ID").val();

    var dataString = 'Reading_ID='+Reading_ID+'&Reading_Body='+Body+'&Reading_Question='+Question+'&Reading_First_Answer='+First_Answer+'&Reading_Second_Answer='+Second_Answer+'&Reading_Third_Answer='+Third_Answer+'&Reading_Fourth_Answer='+Fourth_Answer+'&Reading_Right_Answer='+Right_Answer+'&Reading_Book_ID='+Book_ID;

    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/Edit_Reading.php",
      data: dataString,
      success: function(data){
          $("#span-valid").html(data);
      }
        
    });

    return false;
  });

    $("#btn-edit-grammer").click(function(){

    var Grammer_ID = $("#Grammer_ID").val();
    var Question = $("#Grammer_Question").val();
    var First_Answer = $("#Grammer_First_Answer").val();
    var Second_Answer = $("#Grammer_Second_Answer").val();
    var Third_Answer = $("#Grammer_Third_Answer").val();
    var Fourth_Answer = $("#Grammer_Fourth_Answer").val();
    var Right_Answer = $("#Grammer_Right_Answer").val();
    var Book_ID = $("#Grammer_Book_ID").val();

    var dataString = 'Grammer_ID='+Grammer_ID+'&Grammer_Question='+Question+'&Grammer_First_Answer='+First_Answer+'&Grammer_Second_Answer='+Second_Answer+'&Grammer_Third_Answer='+Third_Answer+'&Grammer_Fourth_Answer='+Fourth_Answer+'&Grammer_Right_Answer='+Right_Answer+'&Grammer_Book_ID='+Book_ID;

    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/Edit_Grammer.php",
      data: dataString,
      success: function(data){
          $("#span-valid").html(data);
      }
        
    });
    return false;
  });

    $("#btn-edit-vocabulary").click(function(){
      
      var Vocabulary_ID = $("#Vocabulary_ID").val();
      var Word = $("#Vocabulary_Word").val();
      var First_Answer = $("#Vocabulary_First_Answer").val();
      var Second_Answer = $("#Vocabulary_Second_Answer").val();
      var Third_Answer = $("#Vocabulary_Third_Answer").val();
      var Fourth_Answer = $("#Vocabulary_Fourth_Answer").val();
      var Right_Answer = $("#Vocabulary_Right_Answer").val();
      var Book_ID = $("#Vocabulary_Book_ID").val();

      var dataString = 'Vocabulary_ID='+Vocabulary_ID+'&Vocabulary_Word='+Word+'&Vocabulary_First_Answer='+First_Answer+'&Vocabulary_Second_Answer='+Second_Answer+'&Vocabulary_Third_Answer='+Third_Answer+'&Vocabulary_Fourth_Answer='+Fourth_Answer+'&Vocabulary_Right_Answer='+Right_Answer+'&Vocabulary_Book_ID='+Book_ID;

      $.ajax({
        type: "POST",
        url: "Assets/Ajax Search/Edit_Vocabulary.php",
        data: dataString,
        success: function(data){
            $("#span-valid").html(data);
        }
          
      });
  
    return false;
  });

$("#btn-edit-reading-audio").click(function(){

        var Audio_ID = $("#Edit_Reading_Audio_ID").val();
        var Book = $("#Edit_Reading_Book").val();
        var Unit = $("#Edit_Reading_Unit").val();

      var dataString = 'Edit_Reading_Audio_ID='+Audio_ID+'&Edit_Reading_Book='+Book+'&Edit_Reading_Unit='+Unit;

    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/Edit_Reading_Audio.php",
      data: dataString,
      success: function(data){
          $("#span-valid").html(data);
      }
        
    });
  
    return false;
  });

$("#btn-edit-listening-audio").click(function(){

      var Audio_ID = $("#Edit_Listening_Audio_ID").val();
      var Book = $("#Edit_Listening_Book").val();
      var Unit = $("#Edit_Listening_Unit").val();

      var dataString = 'Edit_Listening_Audio_ID='+Audio_ID+'&Edit_Listening_Book='+Book+'&Edit_Listening_Unit='+Unit;

    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/Edit_Listening_Audio.php",
      data: dataString,
      success: function(data){
          $("#span-valid").html(data);
      }
        
    });
  
    return false;
  });

$("#btn-edit-vocabulary-audio").click(function(){

      var Audio_ID = $("#Edit_Vocabulary_Audio_ID").val();
      var Book = $("#Edit_Vocabulary_Book").val();
      var Day = $("#Edit_Vocabulary_Day").val();

      var dataString = 'Edit_Vocabulary_Audio_ID='+Audio_ID+'&Edit_Vocabulary_Book='+Book+'&Edit_Vocabulary_Day='+Day;

    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/Edit_Vocabulary_Audio.php",
      data: dataString,
      success: function(data){
          $("#span-valid").html(data);
      }
    });
  
    return false;
  });

$("#btn-edit-conversation-audio").click(function(){

      var Audio_ID = $("#Edit_Conversation_Audio_ID").val();
      var Book = $("#Edit_Conversation_Book").val();
      var Unit = $("#Edit_Conversation_Unit").val();

      var dataString = 'Edit_Conversation_Audio_ID='+Audio_ID+'&Edit_Conversation_Book='+Book+'&Edit_Conversation_Unit='+Unit;

    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/Edit_Conversation_Audio.php",
      data: dataString,
      success: function(data){
          $("#span-valid").html(data);
      }
        
    });
  
    return false;
  });

$("#btn-edit-audio").click(function(){


      var Audio_ID = $("#Audio_Audio_ID").val();
      var Question = $("#Audio_Question").val();
      var First_Answer = $("#Audio_First_Answer").val();
      var Second_Answer = $("#Audio_Second_Answer").val();
      var Third_Answer = $("#Audio_Third_Answer").val();
      var Fourth_Answer = $("#Audio_Fourth_Answer").val();
      var Right_Answer = $("#Audio_Right_Answer").val();
      var Book_ID = $("#Audio_Book_ID").val();

      var dataString = 'Audio_Audio_ID='+Audio_ID+'&Audio_Question='+Question+'&Audio_First_Answer='+First_Answer+'&Audio_Second_Answer='+Second_Answer+'&Audio_Third_Answer='+Third_Answer+'&Audio_Fourth_Answer='+Fourth_Answer+'&Audio_Right_Answer='+Right_Answer+'&Audio_Book_ID='+Book_ID;

    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/Edit_Audio.php",
      data: dataString,
      success: function(data){
          $("#span-valid").html(data);
      }
        
    });
  
    return false;
  });


$("#btn-edit-student").click(function(){

    var St_ID = $("#Student_St_ID").val();
    var Student_ID = $("#Student_Student_ID").val();
    var Full_Name = $("#Student_Full_Name").val();
    var Father_Name = $("#Student_Father_Name").val();
    var Phone_No = $("#Student_Phone_No").val();
    var Book = $("#Student_Book").val();
    
    var dataString = 'Student_St_ID='+St_ID+'$Student_Student_ID='+Student_ID+'&Student_Full_Name='+Full_Name+'&Student_Father_Name='+Father_Name+'&Student_Phone_No='+Phone_No+'&Student_Book='+Book;

    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/Edit_Student.php",
      data: dataString,
      success: function(data){
          $("#span-valid").html(data);
      }
        
    });
  
    return false;
  });

$("#btn-edit-user").click(function(){

    var User_ID = $("#User_User_ID").val();
    var Full_Name = $("#User_Full_Name").val();
    var Username = $("#User_Username").val();
    var Password = $("#User_Password").val();
    var Email = $("#User_Email").val();
    var Gender = $("#User_Gender").val();
    var Phone_No = $("#User_Phone_No").val();

    
    var dataString = 'User_User_ID='+User_ID+'&User_Full_Name='+Full_Name+'&User_Username='+Username+'&User_Password='+Password+'&User_Email='+Email+'&User_Gender='+Gender+'&User_Phone_No='+Phone_No;

    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/Edit_Users.php",
      data: dataString,
      success: function(data){
          $("#span-valid").html(data);
      }
        
    });
  
    return false;
  });

$("#btn-edit-about-data").click(function(){

    var About_ID = $("#About_About_ID").val();
    var Heading = $("#About_Heading").val();
    var Body = $("#About_Body").val();
    
    var dataString = 'About_About_ID='+About_ID+'&About_Heading='+Heading+'&About_Body='+Body;

    $.ajax({
      type: "POST",
      url: "Assets/Ajax Search/Edit_About_Data.php",
      data: dataString,
      success: function(data){
          $("#span-valid").html(data);
      }
        
    });
  
    return false;
  });
  
/* =======================================================================================
    when update button is clicked. data from specified text box is sent to the editSubject 
    page. and run update query through AJAX
   ======================================================================================= */



});
  $(".set > a").click(function(event){
      event.preventDefault();
  })
      $(document).ready(function(){

      $(".set > a").on("click", function(){
        if($(this).hasClass("active")){
          $(this).removeClass("active");
          $(this).siblings('.content').slideUp(500);
          $(".set > a .fa-angle-down").removeClass("fa-angle-down").addClass("fa-angle-left");
        }
        else{
          $(".set > a .fa-angle-down").removeClass("fa-angle-down").addClass("fa-angle-left");
          $(this).find(".fa-angle-left").removeClass("fa-angle-left").addClass("fa-angle-down");
          $(".set > a").removeClass("active");
          $(this).addClass("active");
          $('.content').slideUp(500);
          $(this).siblings('.content').slideDown(500);
        }
      });
    });