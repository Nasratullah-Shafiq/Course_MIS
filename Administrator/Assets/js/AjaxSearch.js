$(document).ready(function(){
    // $(function(){ 
 //========================================================================================================================================
 // Start of All Delete Functions whick Deletes the data through Ajax
 //========================================================================================================================================

$(document).on('click', '.delete-ads', function(event){
    event.preventDefault();
    var Ad_ID = $(this).attr("id");
    var action = "Delete_Ads";
    if(confirm('Are you Sure you want to delete this Advertisement?')){
        $.ajax({
        url:"Assets/Ajax Search/Delete_Functions.php",
        type:"POST",
        data:{Ad_ID:Ad_ID, action:action},
        success:function(data){
            
            Load_Advertisement_Data();
        }
    });
    }
    else{
        return false;
    }
});

$(document).on('click', '.delete-slide', function(event){
    event.preventDefault();
    var Carousel_ID = $(this).attr("id");
    var action = "Delete_Slide";
    if(confirm('Are you Sure you want to delete this Slide?')){
        $.ajax({
        url:"Assets/Ajax Search/Delete_Functions.php",
        type:"POST",
        data:{Carousel_ID:Carousel_ID, action:action},
        success:function(data){
            
            Load_Carousel_Data();
        }
    });
    }
    else{
        return false;
    }
});

$(document).on('click', '.delete-news', function(event){
    event.preventDefault();
    var News_ID = $(this).attr("id");
    var action = "Delete_News";
    if(confirm('Are you Sure you want to delete this News?')){
        $.ajax({
        url:"Assets/Ajax Search/Delete_Functions.php",
        type:"POST",
        data:{News_ID:News_ID, action:action},
        success:function(data){

            Load_News_Data();
        }
    });
    }
    else{
        return false;
    }
});


// $(document).on('click', '.delete-news', function(event){
//     event.preventDefault();
//     var News_ID = $(this).attr("id");
//     var action = "Delete_News";
//     if(confirm('Are you Sure you want to delete this News?')){
//         $.ajax({
//         url:"Assets/Ajax Search/Delete_Functions.php",
//         type:"POST",
//         data:{News_ID:News_ID, action:action},
//         success:function(data){

//             Load_News_Data();
//         }
//     });
//     }
//     else{
//         return false;
//     }
// });


$(document).on('click', '.delete-research', function(event){
    event.preventDefault();
    var Research_ID = $(this).attr("id");
    var action = "Delete_Research";
    if(confirm('Are you Sure you want to delete this Research?')){
        $.ajax({
        url:"Assets/Ajax Search/Delete_Functions.php",
        type:"POST",
        data:{Research_ID:Research_ID, action:action},
        success:function(data){
            
            Load_Research_Data();
        }
    });
    }
    else{
        return false;
    }
});


$(document).on('click', '.delete-book', function(event){
    event.preventDefault();
    var Book_ID = $(this).attr("id");
    var action = "Delete_Book";
    if(confirm('Are you Sure you want to delete this Book?')){
        $.ajax({
        url:"Assets/Ajax Search/Delete_Functions.php",
        type:"POST",
        data:{Book_ID:Book_ID, action:action},
        success:function(data){
            
            Load_Books_Data();
        }
    });
    }
    else{
        return false;
    }
});

$(document).on('click', '.delete-reading-audio', function(event){
    event.preventDefault();
    var Reading_Audio_ID = $(this).attr("id");
    var action = "Delete_Reading_Audio";
    if(confirm('Are you Sure you want to delete this Audio?')){
        $.ajax({
        url:"Assets/Ajax Search/Delete_Functions.php",
        type:"POST",
        data:{Reading_Audio_ID:Reading_Audio_ID, action:action},
        success:function(data){
            
            Load_Reading_Audio_Data();
        }
    });
    }
    else{
        return false;
    }
});

$(document).on('click', '.delete-listening-audio', function(event){
    event.preventDefault();
    var Listening_Audio_ID = $(this).attr("id");
    var action = "Delete_Listening_Audio";
    if(confirm('Are you Sure you want to delete this Audio?')){
        $.ajax({
        url:"Assets/Ajax Search/Delete_Functions.php",
        type:"POST",
        data:{Listening_Audio_ID:Listening_Audio_ID, action:action},
        success:function(data){
            
            Load_Listening_Audio_Data();
        }
    });
    }
    else{
        return false;
    }
});

$(document).on('click', '.delete-vocabulary-audio', function(event){
    event.preventDefault();
    var Vocabulary_Audio_ID = $(this).attr("id");
    var action = "delete";
    if(confirm('Are you Sure you want to delete this Audio?')){
        $.ajax({
        url:"Assets/Ajax Search/Delete_Functions.php",
        type:"POST",
        data:{Vocabulary_Audio_ID:Vocabulary_Audio_ID, action:action},
        success:function(data){
            Load_Vocabulary_Audio_Data();
        }
    });
    }
    else{
        return false;
    }
});

$(document).on('click', '.delete-conversation-audio', function(event){
    event.preventDefault();
    var Conversation_Audio_ID = $(this).attr("id");
    var action = "Delete_Conversation_Audio";
    if(confirm('Are you Sure you want to delete this Audio?')){
        $.ajax({
        url:"Assets/Ajax Search/Delete_Functions.php",
        type:"POST",
        data:{Conversation_Audio_ID:Conversation_Audio_ID, action:action},
        success:function(data){
            
            Load_Conversation_Audio_Data();
        }
    });
    }
    else{
        return false;
    }
});

$(document).on('click', '.delete-audio', function(event){
    event.preventDefault();
    var Audio_ID = $(this).attr("id");
    var action = "Delete_Audio";
    if(confirm('Are you Sure you want to delete this Audio?')){
        $.ajax({
        url:"Assets/Ajax Search/Delete_Functions.php",
        type:"POST",
        data:{Audio_ID:Audio_ID, action:action},
        success:function(data){
            
            Load_Audio_Data();
        }
    });
    }
    else{
        return false;
    }
});

    $(document).on('click', '.delete-reading', function(event){
        event.preventDefault();
        var Reading_ID = $(this).attr("id");
        var action = "Delete_Reading";
        if(confirm('Are you Sure you want to delete this Reading?')){
            $.ajax({
            url:"Assets/Ajax Search/Delete_Functions.php",
            type:"POST",
            data:{Reading_ID:Reading_ID, action:action},
            success:function(data){
                
                Load_Reading_Data();
            }
        });
        }
        else{
            return false;
        }
    });

    $(document).on('click', '.delete-grammer', function(event){
        event.preventDefault();
        var Grammer_ID = $(this).attr("id");
        var action = "Delete_Grammer";
        if(confirm('Are you Sure you want to delete this Gramer?')){
            $.ajax({
            url:"Assets/Ajax Search/Delete_Functions.php",
            type:"POST",
            data:{Grammer_ID:Grammer_ID, action:action},
            success:function(data){
                
                Load_Grammer_Data();
            }
        });
        }
        else{
            return false;
        }
    });

    $(document).on('click', '.delete-vocabulary', function(event){
        event.preventDefault();
        var Vocabulary_ID = $(this).attr("id");
        var action = "Delete_Vocabulary";
        if(confirm('Are you Sure you want to delete this Word?')){
            $.ajax({
            url:"Assets/Ajax Search/Delete_Functions.php",
            type:"POST",
            data:{Vocabulary_ID:Vocabulary_ID, action:action},
            success:function(data){
                
                Load_Vocabulary_Data();
            }
        });
        }
        else{
            return false;
        }
    });

$(document).on('click', '.delete-result', function(event){
    event.preventDefault();
    var Result_ID = $(this).attr("id");
    var action = "Delete_Result";
    if(confirm('Are you Sure you want to delete this Result?')){
        $.ajax({
        url:"Assets/Ajax Search/Delete_Functions.php",
        type:"POST",
        data:{Result_ID:Result_ID, action:action},
        success:function(data){
            
            Load_Result_Data();
        }
    });
    }
    else{
        return false;
    }
});

    $(document).on('click', '.delete-student', function(event){
        event.preventDefault();
        var Student_ID = $(this).attr("id");
        var action = "Delete_Student";
        if(confirm('Are you Sure you want to delete this Student?')){
            $.ajax({
            url:"Assets/Ajax Search/Delete_Functions.php",
            type:"POST",
            data:{Student_ID:Student_ID, action:action},
            success:function(data){
               
                Load_Student_Data();
            }
        });
        }
        else{
            return false;
        }
    });

    $(document).on('click', '.delete-user', function(event){
        event.preventDefault();
        var User_ID = $(this).attr("id");
        var action = "Delete_User";
        // if(confirm('Are you Sure you want to delete this user?')){
            swal("Warning", "Are you Sure you want to delete User?", "warning");
            $.ajax({
            url:"Assets/Ajax Search/Delete_Functions.php",
            type:"POST",
            data:{User_ID:User_ID, action:action},
            success:function(data){
               
                Load_User_Data();
            }
        });
        // }
        // else{
            return false;
        // }
    });


    $(document).on('click', '.delete-about-data', function(event){
        event.preventDefault();
        var About_ID = $(this).attr("id");
        var action = "Delete_About_Data";
        if(confirm('Are you Sure you want to delete?')){
            $.ajax({
            url:"Assets/Ajax Search/Delete_Functions.php",
            type:"POST",
            data:{About_ID:About_ID, action:action},
            success:function(data){
               
                Load_About_Data();
            }
        });
        }
        else{
            return false;
        }
    });

    $(document).on('click', '.delete-mail', function(event){
        event.preventDefault();

        var Contact_ID = $(this).attr("id");
        var action = "Delete_Mail";
        swal("Warning", "Are you Sure you want to delete User?", "warning");
        if(confirm('Are you Sure you want to delete?')){
            $.ajax({
            url:"Assets/Ajax Search/Delete_Functions.php",
            type:"POST",
            data:{Contact_ID:Contact_ID, action:action},
            success:function(data){
               
                Load_Mail_Data();
            }
        });
        }
        else{
            return false;
        }
    });

//========================================================================================================================================
//End of All Delete Functions
//========================================================================================================================================

//=========================================================================================================================================
//Start of All Status Functions
//=========================================================================================================================================

$(document).on('click', '.pending-book', function(event){
        event.preventDefault();

        var Book_ID = $(this).attr("id");
        var action = "Publish-Status";
        if(confirm('Are you Sure you wnat to publish this Book?')){
            $.ajax({
            url:"Assets/Ajax Search/Status.php",
            type:"POST",
            data:{Book_ID:Book_ID, action:action},
            success:function(data){
                
                    Load_Books_Data();
            }
        });
        }
        else{
            return false;
        }
    });

$(document).on('click', '.publish-book', function(event){
        event.preventDefault();

        var Book_ID = $(this).attr("id");
        var action = "Pending-Status";
        if(confirm('Are you Sure you wnat to Pending this Book?')){
            $.ajax({
            url:"Assets/Ajax Search/Status.php",
            type:"POST",
            data:{Book_ID:Book_ID, action:action},
            success:function(data){
                $('#Books_Table').html(data);
                    Load_Books_Data();
            }
        });
        }
        else{
            return false;
        }
    });

$(document).on('click', '.pending-reading', function(event){
        event.preventDefault();

        var Reading_ID = $(this).attr("id");
        var action = "Publish-Reading";
        if(confirm('Are you Sure you wnat to publish this Reading?')){
            $.ajax({
            url:"Assets/Ajax Search/Status.php",
            type:"POST",
            data:{Reading_ID:Reading_ID, action:action},
            success:function(data){
                $('#Reading_Table').html(data);
                    Load_Reading_Data();
            }
        });
        }
        else{
            return false;
        }
    });

$(document).on('click', '.publish-reading', function(event){
        event.preventDefault();

        var Reading_ID = $(this).attr("id");
        var action = "Pending-Reading";
        if(confirm('Are you Sure you wnat to Pending this Reading?')){
            $.ajax({
            url:"Assets/Ajax Search/Status.php",
            type:"POST",
            data:{Reading_ID:Reading_ID, action:action},
            success:function(data){
                $('#Reading_Table').html(data);
                    Load_Reading_Data();
            }
        });
        }
        else{
            return false;
        }
    });

$(document).on('click', '.pending-grammer', function(event){
        event.preventDefault();

        var Grammer_ID = $(this).attr("id");
        var action = "Publish-Grammer";
        if(confirm('Are you Sure you wnat to publish this Grammer?')){
            $.ajax({
            url:"Assets/Ajax Search/Status.php",
            type:"POST",
            data:{Grammer_ID:Grammer_ID, action:action},
            success:function(data){
                $('#Grammer_Table').html(data);
                    Load_Grammer_Data();
            }
        });
        }
        else{
            return false;
        }
    });

$(document).on('click', '.publish-grammer', function(event){
        event.preventDefault();

        var Grammer_ID = $(this).attr("id");
        var action = "Pending-Grammer";
        if(confirm('Are you Sure you wnat to Pending this Grammer?')){
            $.ajax({
            url:"Assets/Ajax Search/Status.php",
            type:"POST",
            data:{Grammer_ID:Grammer_ID, action:action},
            success:function(data){
                $('#Grammer_Table').html(data);
                    Load_Grammer_Data();
            }
        });
        }
        else{
            return false;
        }
    });

$(document).on('click', '.pending-audio', function(event){
        event.preventDefault();

        var Audio_ID = $(this).attr("id");
        var action = "Publish-Audio";
        if(confirm('Are you Sure you wnat to publish this Audio?')){
            $.ajax({
            url:"Assets/Ajax Search/Status.php",
            type:"POST",
            data:{Audio_ID:Audio_ID, action:action},
            success:function(data){
                $('#Audio_Table').html(data);
                    Load_Audio_Data();
            }
        });
        }
        else{
            return false;
        }
    });

$(document).on('click', '.publish-audio', function(event){
        event.preventDefault();

        var Audio_ID = $(this).attr("id");
        var action = "Pending-Audio";
        if(confirm('Are you Sure you wnat to Pending this Audio?')){
            $.ajax({
            url:"Assets/Ajax Search/Status.php",
            type:"POST",
            data:{Audio_ID:Audio_ID, action:action},
            success:function(data){
                $('#Audio_Table').html(data);
                    Load_Audio_Data();
            }
        });
        }
        else{
            return false;
        }
    });

$(document).on('click', '.pending-vocabulary', function(event){
        event.preventDefault();

        var Vocabulary_ID = $(this).attr("id");
        var action = "Publish-Vocabulary";
        if(confirm('Are you Sure you wnat to publish this Vocabulary?')){
            $.ajax({
            url:"Assets/Ajax Search/Status.php",
            type:"POST",
            data:{Vocabulary_ID:Vocabulary_ID, action:action},
            success:function(data){
                $('#Vocabulary_Table').html(data);
                    Load_Vocabulary_Data();
            }
        });
        }
        else{
            return false;
        }
    });

$(document).on('click', '.publish-vocabulary', function(event){
        event.preventDefault();

        var Vocabulary_ID = $(this).attr("id");
        var action = "Pending-Vocabulary";
        if(confirm('Are you Sure you wnat to Pending this Vocabulary?')){
            $.ajax({
            url:"Assets/Ajax Search/Status.php",
            type:"POST",
            data:{Vocabulary_ID:Vocabulary_ID, action:action},
            success:function(data){
                $('#Vocabulary_Table').html(data);
                    Load_Vocabulary_Data();
            }
        });
        }
        else{
            return false;
        }
    });
//=========================================================================================================================================
//End of All Status Functions
//=========================================================================================================================================


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Start of All View Functions
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$(document).on('click', '.view-mail-data', function(event){
            event.preventDefault();
            
            var Contact_ID = $(this).attr("id");
            
            $.ajax({
                url:"Assets/Ajax Search/View_Mail.php",
                type:"POST",
                data:{Contact_ID:Contact_ID},
                success:function(data){
                    $('#View_Mail').html(data);
                    $("#View_Mail_Data").modal("show");
                    
                }

            });
        });


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//End of All View Functions
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


//========================================================================================================================================
//Start of Edit Functions 
//========================================================================================================================================


$(document).on('click', '.edit-ads', function(event){
            event.preventDefault();
            var Ad_ID = $(this).attr("id");
            var action = "Edit_Ads";
            
            $.ajax({
                url:"Assets/Ajax Search/Edit_Fetch_Function.php",
                type:"POST",
                data:{Ad_ID:Ad_ID, action:action},
                dataType:"json",
                success:function(data){
                    $('#Advertisement_Ad_ID').val(data.Ad_ID);
                    $('#Advertisement_Heading').val(data.Heading);
                    $('#Image').val(data.Image);
                    $('#Edit-Advertisement-Modal').modal('show');
                    
                }

            });
        });


$(document).on('click', '.edit-slide', function(event){
            event.preventDefault();
            var Carousel_ID = $(this).attr("id");
            
            
            $.ajax({
                url:"Assets/Ajax Search/Edit_Fetch_Function.php",
                type:"POST",
                data:{Carousel_ID:Carousel_ID},
                dataType:"json",
                success:function(data){
                    $('#Slide_Carousel_ID').val(data.Carousel_ID);
                    $('#Slide_Heading').val(data.Heading);
                    $('#Image').val(data.Image);
                    $('#Edit-Carousel-Modal').modal('show');
                    
                }

            });
        });

$(document).on('click', '.edit-news', function(event){
            event.preventDefault();
            var News_ID = $(this).attr("id");
            
            $.ajax({
                url:"Assets/Ajax Search/Edit_Fetch_Function.php",
                type:"POST",
                data:{News_ID:News_ID},
                dataType:"json",
                success:function(data){
                    
                    $('#News-News_ID').val(data.News_ID);
                    $('#News-Heading').val(data.Heading);
                    $('#News-Body').val(data.Body);
                    $('#News-Source').val(data.Source);
                    $('#News-Status').val(data.Status);

                    $('#Edit-News-Modal').modal('show');
                    
                }

            });
        });

$(document).on('click', '.edit-research', function(event){
            event.preventDefault();
            var Research_ID = $(this).attr("id");
            
            $.ajax({
                url:"Assets/Ajax Search/Edit_Fetch_Function.php",
                type:"POST",
                data:{Research_ID:Research_ID},
                dataType:"json",
                success:function(data){
                    $('#Research_Research_ID').val(data.Research_ID);
                    $('#Research_Heading').val(data.Heading);
                    $('#Research_Body').val(data.Body);

                    $('#Edit-Research-Modal').modal('show');
                }

            });
        });

$(document).on('click', '.edit-book', function(event){
            event.preventDefault();
            var Book_ID = $(this).attr("id");
            
            $.ajax({
                url:"Assets/Ajax Search/Edit_Fetch_Function.php",
                type:"POST",
                data:{Book_ID:Book_ID},
                dataType:"json",
                success:function(data){
                    $('#Book_Book_ID').val(data.Book_ID);
                    $('#Book_Book_Name').val(data.Book_Name);
                    $('#Book_Duration').val(data.Duration);
                    $('#Book_Fees').val(data.Fees);
                    $('#Description').val(data.Description);

                    $('#Edit-Book-Modal').modal('show');
                    
                }

            });
        });

$(document).on('click', '.edit-reading-audio', function(event){
    event.preventDefault();
    var Reading_Audio_ID = $(this).attr("id");
    
    $.ajax({
        url:"Assets/Ajax Search/Edit_Fetch_Function.php",
        type:"POST",
        data:{Reading_Audio_ID:Reading_Audio_ID},
        dataType:"json",
        success:function(data){
            
            $('#Edit_Reading_Audio_ID').val(data.Audio_ID);
            $('#Edit_Reading_Book').val(data.Book);
            $('#Edit_Reading_Unit').val(data.Unit);            
            
            $('#Edit-Reading-Audio-Modal').modal('show');
            
        }

    });
});

$(document).on('click', '.edit-listening-audio', function(event){
    event.preventDefault();
    var Listening_Audio_ID = $(this).attr("id");
    
    $.ajax({
        url:"Assets/Ajax Search/Edit_Fetch_Function.php",
        type:"POST",
        data:{Listening_Audio_ID:Listening_Audio_ID},
        dataType:"json",
        success:function(data){
            
            $('#Edit_Listening_Audio_ID').val(data.Audio_ID);
            $('#Edit_Listening_Book').val(data.Book);
            $('#Edit_Listening_Unit').val(data.Unit);
            
            
            $('#Edit-Listening-Audio-Modal').modal('show');
            
        }

    });
});

$(document).on('click', '.edit-vocabulary-audio', function(event){
    event.preventDefault();
    var Vocabulary_Audio_ID = $(this).attr("id");
    
    $.ajax({
        url:"Assets/Ajax Search/Edit_Fetch_Function.php",
        type:"POST",
        data:{Vocabulary_Audio_ID:Vocabulary_Audio_ID},
        dataType:"json",
        success:function(data){
            
            $('#Edit_Vocabulary_Audio_ID').val(data.Audio_ID);
            $('#Edit_Vocabulary_Book').val(data.Book);
            $('#Edit_Vocabulary_Day').val(data.Day);
            
            $('#Edit-Vocabulary-Audio-Modal').modal('show');
            
        }
    });
});

$(document).on('click', '.edit-conversation-audio', function(event){
    event.preventDefault();
    var Conversation_Audio_ID = $(this).attr("id");
    
    $.ajax({
        url:"Assets/Ajax Search/Edit_Fetch_Function.php",
        type:"POST",
        data:{Conversation_Audio_ID:Conversation_Audio_ID},
        dataType:"json",
        success:function(data){
            
            $('#Edit_Conversation_Audio_ID').val(data.Audio_ID);
            $('#Edit_Conversation_Book').val(data.Book);
            $('#Edit_Conversation_Unit').val(data.Unit);
            
            $('#Edit-Conversation-Audio-Modal').modal('show');
            
        }
    });
});

$(document).on('click', '.edit-audio', function(event){
            event.preventDefault();
            var Audio_ID = $(this).attr("id");
            
            $.ajax({
                url:"Assets/Ajax Search/Edit_Fetch_Function.php",
                type:"POST",
                data:{Audio_ID:Audio_ID},
                dataType:"json",
                success:function(data){
                    
                    $('#Audio_Audio_ID').val(data.Audio_ID);
                    $('#Audio_Question').val(data.Question);
                    $('#Audio_First_Answer').val(data.Answer0);
                    $('#Audio_Second_Answer').val(data.Answer1);
                    $('#Audio_Third_Answer').val(data.Answer2);
                    $('#Audio_Fourth_Answer').val(data.Answer3);
                    $('#Audio_Right_Answer').val(data.Right_Answer);
                    $('#Audio_Description').val(data.Description);
                    $('#Audio_Book_ID').val(data.Book_ID);

                    $('#Edit-Audio-Modal').modal('show');
                    
                }

            });
        });

$(document).on('click', '.edit-reading', function(event){
            event.preventDefault();
            var Reading_ID = $(this).attr("id");
            
            $.ajax({
                url:"Assets/Ajax Search/Edit_Fetch_Function.php",
                type:"POST",
                data:{Reading_ID:Reading_ID},
                dataType:"json",
                success:function(data){
                    
                    $('#Reading_ID').val(data.Reading_ID);
                    $('#Reading_Body').val(data.Body);
                    $('#Reading_Question').val(data.Question);
                    $('#Reading_First_Answer').val(data.Answer0);
                    $('#Reading_Second_Answer').val(data.Answer1);
                    $('#Reading_Third_Answer').val(data.Answer2);
                    $('#Reading_Fourth_Answer').val(data.Answer3);
                    $('#Reading_Right_Answer').val(data.Right_Answer);
                    $('#Reading_Book_ID').val(data.Book_ID);

                    $('#Edit-Reading-Modal').modal('show');
                    
                }

            });
        });

$(document).on('click', '.edit-grammer', function(event){
            event.preventDefault();
            var Grammer_ID = $(this).attr("id");
            
            $.ajax({
                url:"Assets/Ajax Search/Edit_Fetch_Function.php",
                type:"POST",
                data:{Grammer_ID:Grammer_ID},
                dataType:"json",
                success:function(data){
                    $('#Grammer_ID').val(data.Grammer_ID);
                    $('#Grammer_Question').val(data.Question);
                    $('#Grammer_First_Answer').val(data.Answer0);
                    $('#Grammer_Second_Answer').val(data.Answer1);
                    $('#Grammer_Third_Answer').val(data.Answer2);
                    $('#Grammer_Fourth_Answer').val(data.Answer3);
                    $('#Grammer_Right_Answer').val(data.Right_Answer);
                    $('#Grammer_Book_ID').val(data.Book_ID);

                    $('#Edit-Grammer-Modal').modal('show');
                    
                }

            });
        });

$(document).on('click', '.edit-vocabulary', function(event){
            event.preventDefault();
            var Vocabulary_ID = $(this).attr("id");
            
            $.ajax({
                url:"Assets/Ajax Search/Edit_Fetch_Function.php",
                type:"POST",
                data:{Vocabulary_ID:Vocabulary_ID},
                dataType:"json",
                success:function(data){
                    $('#Vocabulary_ID').val(data.Vocabulary_ID);
                    $('#Vocabulary_Word').val(data.Word);
                    $('#Vocabulary_First_Answer').val(data.Answer0);
                    $('#Vocabulary_Second_Answer').val(data.Answer1);
                    $('#Vocabulary_Third_Answer').val(data.Answer2);
                    $('#Vocabulary_Fourth_Answer').val(data.Answer3);
                    $('#Vocabulary_Right_Answer').val(data.Right_Answer);
                    $('#Vocabulary_Book_ID').val(data.Book_ID);

                    $('#Edit-Vocabulary-Modal').modal('show');
                    
                }

            });
        });

$(document).on('click', '.edit-student', function(event){
            event.preventDefault();
            var Student_ID = $(this).attr("id");
            
            
            $.ajax({
                url:"Assets/Ajax Search/Edit_Fetch_Function.php",
                type:"POST",
                data:{Student_ID:Student_ID},
                dataType:"json",
                success:function(data){
                    $('#Student_Student_ID').val(data.Student_ID);
                    $('#Student_St_ID').val(data.St_ID);
                    $('#Student_Full_Name').val(data.Full_Name);
                    $('#Student_Father_Name').val(data.Father_Name);
                    $('#Student_Phone_No').val(data.Phone_No);
                    $('#Student_Book').val(data.Book_Name);

                    $('#Edit-Student-Modal').modal('show');
                    
                }

            });
        });

$(document).on('click', '.edit-user', function(event){
            event.preventDefault();
            var User_ID = $(this).attr("id");       
            
            $.ajax({
                url:"Assets/Ajax Search/Edit_Fetch_Function.php",
                type:"POST",
                data:{User_ID:User_ID},
                dataType:"json",
                success:function(data){
                    $('#User_User_ID').val(data.User_ID);
                    $('#User_Full_Name').val(data.Full_Name);
                    $('#User_Username').val(data.Username);
                    $('#User_Password').val(data.Password);
                    $('#User_Email').val(data.Email);
                    $('#User_Gender').val(data.Gender);
                    $('#User_Phone_No').val(data.Phone_No);

                    $('#Edit-User-Modal').modal('show');
                    
                }

            });
        });

 $(document).on('click', '.edit-about-data', function(event){
            
            var About_ID = $(this).attr("id");
            
            event.preventDefault();
            $.ajax({
                url:"Assets/Ajax Search/Edit_Fetch_Function.php",
                type:"POST",
                data:{About_ID:About_ID},
                dataType:"json",
                success:function(data){
                    $('#About_About_ID').val(data.About_ID);
                    $('#About_Heading').val(data.Heading);
                    $('#About_Body').val(data.Body);
                    
                    $('#Edit_About_Data').modal('show');
                    
                }

            });
        });

Load_Advertisement_Data();
    $('#action').val("Add Data"); 

        function Load_Advertisement_Data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/Fetch_Advertisement.php",
                data:{action:action},
                success:function(data){
                    $('#Advertisement_Table').html(data);
                }
            });
        }

Load_Carousel_Data();
    $('#action').val("Add Carousel"); 

        function Load_Carousel_Data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/Fetch_Carousel.php",
                data:{action:action},
                success:function(data){
                    $('#Slide_Table').html(data);
                }
            });
        }


    Load_User_Data();
    $('#action').val("Register User"); 

        function Load_User_Data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/Fetch_User.php",
                data:{action:action},
                success:function(data){
                    $('#User_Table').html(data);
                }
            });
        }

    Load_Books_Data();
    $('#action').val("Add Books"); 

        function Load_Books_Data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/Fetch_Books.php",
                data:{action:action},
                success:function(data){
                    $('#Books_Table').html(data);
                }
            });
        }


    Load_News_Data();
    $('#action').val("Add News"); 

        function Load_News_Data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/Fetch_News.php",
                data:{action:action},
                success:function(data){
                    $('#News_Table').html(data);
                }
            });
        }

Load_Research_Data();
    $('#action').val("Add Research"); 

        function Load_Research_Data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/Fetch_Research.php",
                data:{action:action},
                success:function(data){
                    $('#Research_Table').html(data);
                }
            });
        }

Load_Student_Data();
    $('#action').val("Register Student"); 

        function Load_Student_Data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/Fetch_Student.php",
                data:{action:action},
                success:function(data){
                    $('#Student_Table').html(data);
                }
            });
        }

Load_Reading_Audio_Data();
    $('#action').val("Add Audio"); 

        function Load_Reading_Audio_Data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/Fetch_Reading_Audio.php",
                data:{action:action},
                success:function(data){
                    $('#Reading_Audio_Table').html(data);
                }
            });
        }

Load_Listening_Audio_Data();
    $('#action').val("Add Audio"); 

        function Load_Listening_Audio_Data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/Fetch_Listening_Audio.php",
                data:{action:action},
                success:function(data){
                    $('#Listening_Audio_Table').html(data);
                }
            });
        }

Load_Vocabulary_Audio_Data();
    $('#action').val("Add Voabulary Audio"); 

        function Load_Vocabulary_Audio_Data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/Fetch_Vocabulary_Audio.php",
                data:{action:action},
                success:function(data){
                    $('#Vocabulary_Audio_Table').html(data);
                }
            });
        }

Load_Conversation_Audio_Data();
    $('#action').val("Add Audio"); 

        function Load_Conversation_Audio_Data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/Fetch_Conversation_Audio.php",
                data:{action:action},
                success:function(data){
                    $('#Conversation_Audio_Table').html(data);
                }
            });
        }

Load_Audio_Data();
    $('#action').val("Add Audio"); 

        function Load_Audio_Data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/Fetch_Audio.php",
                data:{action:action},
                success:function(data){
                    $('#Audio_Table').html(data);
                }
            });
        }

Load_Reading_Data();
    $('#action').val("Add Reading"); 

        function Load_Reading_Data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/Fetch_Reading.php",
                data:{action:action},
                success:function(data){
                    $('#Reading_Table').html(data);
                }
            });
        }

Load_Result_Data();
    $('#action').val("Add Result"); 

        function Load_Result_Data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/Fetch_Result.php",
                data:{action:action},
                success:function(data){
                    $('#Result_Table').html(data);
                }
            });
        }


Load_Grammer_Data();
    $('#action').val("Add Grammer"); 

        function Load_Grammer_Data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/Fetch_Grammer.php",
                data:{action:action},
                success:function(data){
                    $('#Grammer_Table').html(data);
                }
            });
        }

Load_Vocabulary_Data();
    $('#action').val("Add Data"); 

        function Load_Vocabulary_Data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/Fetch_Vocabulary.php",
                data:{action:action},
                success:function(data){
                    $('#Vocabulary_Table').html(data);
                }
            });
        }

        Load_About_Data();
        $('#action').val("Add About");
        function Load_About_Data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/fetch-about-data.php",
                data:{action:action},
                success:function(data){
                    $('#About_Data_Table').html(data);
                }
            });
        }
        Load_Mail_Data();
        $('#action').val("Add Mail");
        function Load_Mail_Data(){
            var action = "Load";
            $.ajax({
                type:"POST",
                url:"Assets/Ajax Search/fetch-mail-data.php",
                data:{action:action},
                success:function(data){
                    $('#Mail_Data_Table').html(data);
                }
            });
        }
    // 
$("#Advertisement_Form").on("submit", function(event){
            event.preventDefault();
            var Heading = $('#Heading').val();
            var Extension = $('#Advertisement_Image').val().split('.').pop().toLowerCase();

            if(Extension != ''){
                if(jQuery.inArray(Extension, ['gif', 'png', 'jpg', 'jpeg']) == -1){
                    alert("Invalid Image File");
                    $('#Advertisement_Table').val();
                    return false;
                }
            
            }

            if(Heading != '' && Extension != ''){
                $.ajax({
                    type:"POST",
                    url:"Assets/Ajax Search/Add_Advertisement.php",
                    data:new FormData(this), 
                    contentType:false,
                    processData:false,
                    success:function(data){
                        alert(data);
                        $('#Advertisement_Form')[0].reset();
                        Load_Advertisement_Data();
                    }
                });
            }
            else{
                alert("Both Field are required");
            }

        });

  $("#Research_Form").on('submit', function(event){
            
            event.preventDefault();
            
            var Heading = $('#Heading').val();
            var Body = $('#Body').val();
            var Full_Name = $('#Full_Name').val();
            var Extension = $('#Research_Image').val().split('.').pop().toLowerCase();
            
            if(Extension != ''){
                if(jQuery.inArray(Extension, ['gif', 'png', 'jpg', 'jpeg']) == -1){
                    alert("Invalid Image File");
                    $('#Research_Table').val();
                    return false;
                }
            
            }

            if(Heading != '' && Extension != ''){
                $.ajax({
                    type:"POST",
                    url:"Assets/Ajax Search/Add_Research.php",
                    data:new FormData(this), 
                    contentType:false,
                    processData:false,
                    success:function(data){
                        alert(data);
                        // $('#Research_Form')[0].reset();
                        Load_Research_Data();
                    }
                });
            }
            else{
                alert("All Fields are required");
            }

        });


$("#Reading_Audio_Form").on('submit', function(event){
            
            event.preventDefault();
            
            var Extension = $('#Reading_Audio').val().split('.').pop().toLowerCase();
            var Book_ID = $('#Book_ID').val();
            var Reading_Unit = $('#Reading_Unit').val();            
            $('#loader-icon').show();
            if(Extension != ''){
                if(jQuery.inArray(Extension, ['mp3', 'wma', 'wav', 'amr']) == -1){
                    alert("Invalid Audio File");
                    $('#Reading_Audio_Table').val();
                    return false;
                }
            
            }

            if(Book_ID != '' && Reading_Unit != '' && Extension != ''){
                $.ajax({
                    type:"POST",
                    url:"Assets/Ajax Search/Add_Reading_Audio.php",
                    data:new FormData(this), 
                    contentType:false,
                    processData:false,
                    success:function(data){
                        $('#loader-icon').hide();
                        alert(data);
                        $('#Reading_Audio_Form')[0].reset();
                        Load_Reading_Audio_Data();
                        
                    }
                });
            }
            else{
                alert("All Fields are required");
                $('#loader-icon').hide();
            }

        });


// $("#Reading_Audio_Upload").on('submit', function(event){
                        
//             if($('#Reading_Audio').val()){
//                 event.preventDefault();
//                 $('#loader-icon').show();
//                 $(this).ajaxSubmit({
//                     target: ".targetLayer",
//                     beforeSubmit: function(){
//                         $('.progress-bar').width('0%')
//                     },
//                     uploadProgress: function(event, position, total, percentComplete){
//                         $(".progress-bar").width(percentComplete+'%')
//                         $(".progress-bar").html('<div id = "progress-status">'+percentComplete'% </div>')
//                     }
//                 });
//             }
//             success:function(data){
//                 $('#loader-icon').hide();
//             },
//             resetForm: true;
//         });
//             return false;
//         });


$("#Listening_Audio_Form").on('submit', function(event){
            
            event.preventDefault();
            
            var Extension = $('#Listening_Audio').val().split('.').pop().toLowerCase();
            var Book_ID = $('#Book_ID').val();
            var Listening_Unit = $('#Listening_Unit').val();            

            if(Extension != ''){
                if(jQuery.inArray(Extension, ['mp3', 'wma', 'wav', 'amr']) == -1){
                    alert("Invalid Audio File");
                    $('#Listening_Audio_Table').val();
                    return false;
                }
            
            }

            if(Book_ID != '' && Listening_Unit != '' && Extension != ''){
                $.ajax({
                    type:"POST",
                    url:"Assets/Ajax Search/Add_Listening_Audio.php",
                    data:new FormData(this), 
                    contentType:false,
                    processData:false,
                    success:function(data){
                        alert(data);
                        $('#Listening_Audio_Form')[0].reset();
                        Load_Listening_Audio_Data();
                    }
                });
            }
            else{
                alert("All Fields are required");
            }

        });


$("#Vocabulary_Audio_Form").on('submit', function(event){
            
            event.preventDefault();
            
            var Extension = $('#Vocabulary_Audio').val().split('.').pop().toLowerCase();
            var Book_ID = $('#Book_ID').val();
            var Vocabulary_Day = $('#Vocabulary_Day').val();            

            if(Extension != ''){
                if(jQuery.inArray(Extension, ['mp3', 'wma', 'wav', 'amr']) == -1){
                    alert("Invalid Audio File");
                    $('#Vocabulary_Audio_Table').val();
                    return false;
                }
            
            }

            if(Book_ID != '' && Vocabulary_Day != '' && Extension != ''){
                $.ajax({
                    type:"POST",
                    url:"Assets/Ajax Search/Add_Vocabulary_Audio.php",
                    data:new FormData(this), 
                    contentType:false,
                    processData:false,
                    success:function(data){
                        alert(data);
                        $('#Vocabulary_Audio_Form')[0].reset();
                        Load_Vocabulary_Audio_Data();
                    }
                });
            }
            else{
                alert("All Fields are required");
            }

        });

$("#Conversation_Audio_Form").on('submit', function(event){
            
            event.preventDefault();
            
            var Extension = $('#Conversation_Audio').val().split('.').pop().toLowerCase();
            var Book_ID = $('#Book_ID').val();
            var Conversation_Unit = $('#Conversation_Unit').val();            

            if(Extension != ''){
                if(jQuery.inArray(Extension, ['mp3', 'wma', 'wav', 'amr']) == -1){
                    alert("Invalid Audio File");
                    $('#Conversation_Audio_Table').val();
                    return false;
                }
            
            }

            if(Book_ID != '' && Conversation_Unit != '' && Extension != ''){
                $.ajax({
                    type:"POST",
                    url:"Assets/Ajax Search/Add_Conversation_Audio.php",
                    data:new FormData(this), 
                    contentType:false,
                    processData:false,
                    success:function(data){
                        alert(data);
                        $('#Conversation_Audio_Form')[0].reset();
                        Load_Conversation_Audio_Data();
                    }
                });
            }
            else{
                alert("All Fields are required");
            }

        });


   $("#Audio_Form").on('submit', function(event){
            
            event.preventDefault();
            
            var Extension = $('#Change_Audio').val().split('.').pop().toLowerCase();
            var Question = $('#Question').val();
            var First_Answer = $('#First_Answer').val();
            var Second_Answer = $('#Second_Answer').val();
            var Third_Answer = $('#Third_Answer').val();
            var Fourth_Answer = $('#Fourth_Answer').val();
            var Right_Answer = $('#Right_Answer').val();
            var Book_ID = $('#Book_ID').val();
            var Description = $('#Description').val();
            

            if(Extension != ''){
                if(jQuery.inArray(Extension, ['mp3', 'wma', 'wav', 'amr']) == -1){
                    alert("Invalid Audio File");
                    $('#Audio_Table').val();
                    return false;
                }
            
            }

            if(Book_ID != '' && Description != '' && Extension != ''){
                $.ajax({
                    type:"POST",
                    url:"Assets/Ajax Search/Add_Audio.php",
                    data:new FormData(this), 
                    contentType:false,
                    processData:false,
                    success:function(data){
                        alert(data);
                        $('#Audio_Form')[0].reset();
                        Load_Audio_Data();
                    }
                });
            }
            else{
                alert("All Fields are required");
            }

        });
 

$("#Reading_Form").on("submit", function(event){
            
            event.preventDefault();

            var Body = $('#Body').val();
            var Question = $('#Question').val();
            var First_Answer = $('#First_Answer').val();
            var Second_Answer = $('#Second_Answer').val();
            var Third_Answer = $('#Third_Answer').val();
            var Fourth_Answer = $('#Fourth_Answer').val();
            var Right_Answer = $('#Right_Answer').val();
            var Book_ID = $('#Book_ID').val();

            if(Body != '' && Question != '' && First_Answer != '' && Second_Answer != '' && Third_Answer != '' && Fourth_Answer != '' && Right_Answer != '' && Book_ID != ''){
                $.ajax({
                    type:"POST",
                    url:"Assets/Ajax Search/Add_Reading.php",
                    data:new FormData(this), 
                    contentType:false,
                    processData:false,
                    success:function(data){
                        alert(data);
                        $('#Reading_Form')[0].reset();
                        Load_Reading_Data();
                    }
                });
            }
            else{
                alert("All Fields are required");
            }

        });

$("#Grammer_Form").on("submit", function(event){
            
            event.preventDefault();

            var Question = $('#Question').val();
            var First_Answer = $('#First_Answer').val();
            var Second_Answer = $('#Second_Answer').val();
            var Third_Answer = $('#Third_Answer').val();
            var Fourth_Answer = $('#Fourth_Answer').val();
            var Right_Answer = $('#Right_Answer').val();
            var Book_ID = $('#Book_ID').val();

            if(Question != '' && First_Answer != '' && Second_Answer != '' && Third_Answer != '' && Fourth_Answer != ''&& Right_Answer != '' && Book_ID != ''){
                $.ajax({
                    type:"POST",
                    url:"Assets/Ajax Search/Add_Grammer.php",
                    data:new FormData(this), 
                    contentType:false,
                    processData:false,
                    success:function(data){
                        alert(data);
                        $('#Grammer_Form')[0].reset();
                        Load_Grammer_Data();
                    }
                });
            }
            else{
                alert("All Fields are required");
            }

        });

$("#Vocabulary_Form").on("submit", function(event){
            
            event.preventDefault();

            var Word = $('#Word').val();
            var First_Answer = $('#First_Answer').val();
            var Second_Answer = $('#Second_Answer').val();
            var Third_Answer = $('#Third_Answer').val();
            var Fourth_Answer = $('#Fourth_Answer').val();
            var Right_Answer = $('#Right_Answer').val();
            var Book_ID = $('#Book_ID').val();

            if(Word != '' && First_Answer != '' && Second_Answer != '' && Third_Answer != '' && Fourth_Answer != ''&& Right_Answer != '' && Book_ID != ''){
                $.ajax({
                    type:"POST",
                    url:"Assets/Ajax Search/Add_Vocabulary.php",
                    data:new FormData(this), 
                    contentType:false,
                    processData:false,
                    success:function(data){
                        alert(data);
                        $('#Vocabulary_Form')[0].reset();
                        Load_Vocabulary_Data();
                    }
                });
            }
            else{
                alert("All Fields are required");
            }

        });

$("#Student_Form").on("submit", function(event){
            
            event.preventDefault();

            var St_ID = $('#St_ID').val();
            var Full_Name = $('#Full_Name').val();
            var Father_Name = $('#Father_Name').val();
            var Marks = $('#Marks').val();
            var Grade = $('#Grade').val();
            var Phone_No = $('#Phone_No').val();
            var Book_ID = $('#Book_ID').val();

            if(St_ID != '' && Full_Name != '' && Phone_No != '' && Marks != '' && Grade != '' && Book_ID != ''){
                $.ajax({
                    type:"POST",
                    url:"Assets/Ajax Search/Add_Student.php",
                    data:new FormData(this), 
                    contentType:false,
                    processData:false,
                    success:function(data){
                        alert(data);
                        $('#Student_Form')[0].reset();
                        Load_Student_Data();
                    }
                });
            }
            else{
                alert("All Fields are required");
            }

        });


    $("#News_Form").on("submit", function(event){
            
            event.preventDefault();
            var Heading = $('#Heading').val();
            var Body = $('#Body').val();
            var Source = $('#Source').val();
            var Extension = $('#News_Image').val().split('.').pop().toLowerCase();

            if(Extension != ''){
                if(jQuery.inArray(Extension, ['gif', 'png', 'jpg', 'jpeg']) == -1){
                    alert("Invalid Image File");
                    $('#News_Table').val();
                    return false;
                }
            
            }

            if(Heading != '' && Body != '' && Source != '' && Extension != ''){
                $.ajax({
                    type:"POST",
                    url:"Assets/Ajax Search/Add_News.php",
                    data:new FormData(this), 
                    contentType:false,
                    processData:false,
                    success:function(data){
                        alert(data);
                        $('#News_Form')[0].reset();
                        Load_News_Data();
                    }
                });
            }
            else{
                alert("Both Field are required");
            }

        });

    $("#UserForm").on("submit", function(event){
            event.preventDefault();
            var Full_Name = $('#Full_Name').val();
            var Username = $('#Username').val();
            var Password = $('#Password').val();
            var Email = $('#Email').val();
            var Gender = $('#Gender').val();
            var Phone_No = $('#Phone_No').val();
            var Extension = $('#User_Image').val().split('.').pop().toLowerCase();
            if(Extension != ''){
                if(jQuery.inArray(Extension, ['gif', 'png', 'jpg', 'jpeg']) == -1){
                    swal("Oops!", "Invalid Image File", "error");
                    $('#User_Table').val();
                    return false;
                }
            
            }
            if(Full_Name != '' && Username != '' && Password != ''&& Email != '' && Gender != '' && Phone_No != '' && Extension != ''){
                $.ajax({
                    type:"POST",
                    url:"Assets/Ajax Search/Add_Usr.php",
                    data:new FormData(this), 
                    contentType:false,
                    processData:false,
                    success:function(data){
                        alert(data);
                        // if(data=="success"){
                            // swal("Success", "Registration Successfully", "success");
                            // alert("this is done");
                            
                        // }
                        // else if(data=="error"){
                        //     swal("Error", "User Info Not Updated", "error");   
                        // }
                        // else if(data=="empty"){
                        //     swal("Error!", "All fields are mandatory", "error");
                        // }
                        // else if(data=="repeat-username"){
                        //     swal("Error!", "Username Already Exist Try new one", "error");
                        // }
                        // else if(data=="repeat-email"){
                        //     swal("Error!", "Email Already Exist try new one", "error");
                        // }
                        // else if(data=="error-email"){
                        //     swal("Error!", "Wrong Email Address", "error");
                        // }
                        $('#UserForm')[0].reset();
                        Load_User_Data();
                    }
                    // error:function(data){
                    //     swal("Error!", "You are out of time", "error");
                    // }
                });
            }
            else{
                swal("Oops!", "Registration Failed", "error");
            }

        });
$("#Slide_Form").on("submit", function(event){
            event.preventDefault();
            // $('#button_action').html("Uploading...");
            $('.add-slide').html("Uploading...");
            var Heading = $('#Heading').val();
            var Extension = $('#Carousel_Image').val().split('.').pop().toLowerCase();
            
            if(Extension != ''){
                if(jQuery.inArray(Extension, ['gif', 'png', 'jpg', 'jpeg']) == -1){
                    alert("Invalid Image File");
                    $('#Slide_Table').val();
                    return false;
                }
            
            }

            if(Heading != '' && Extension != ''){
                $.ajax({
                    type:"POST",
                    url:"Assets/Ajax Search/Add_Slide.php",
                    data:new FormData(this), 
                    contentType:false,
                    processData:false,
                    success:function(data){
                        // alert(data);
                        $('#Slide_Form')[0].reset();
                        Load_Carousel_Data();
                        // $('#button_action').html("Add Slide");
                        $('.add-slide').html("Add Slide");
                    }
                });
            }
            else{
                alert("Both Field are required");
                $('.add-slide').html("Add Slide");
            }

        });

    $("#Book_Form").on("submit", function(event){
            
            event.preventDefault();

            var Full_Name = $('#Full_Name').val();
            var Duration = $('#Duration').val();
            var Fees = $('#Fees').val();
            var Description = $('#Description').val();
            var Extension = $('#Book_Image').val().split('.').pop().toLowerCase();

            if(Extension != ''){
                if(jQuery.inArray(Extension, ['gif', 'png', 'jpg', 'jpeg']) == -1){
                    alert("Invalid Image File");
                    $('#Books_Table').val();
                    return false;
                }
            
            }

            if(Full_Name != '' && Duration != '' && Fees != '' && Description != '' && Extension != ''){
                $.ajax({
                    type:"POST",
                    url:"Assets/Ajax Search/Add_Book.php",
                    data:new FormData(this), 
                    contentType:false,
                    processData:false,
                    success:function(data){
                        alert(data);
                        $('#Book_Form')[0].reset();
                        Load_Books_Data();
                    }
                });
            }
            else{
                alert("Both Field are required");
            }

        });

$("#About_Data_Form").on("submit", function(event){
            
            event.preventDefault();

            var Heading = $('#Heading').val();
            var Body = $('#Body').val();

            if(Heading != '' && Body != ''){
                $.ajax({
                    type:"POST",
                    url:"Assets/Ajax Search/Add_About_Data.php",
                    data:new FormData(this), 
                    contentType:false,
                    processData:false,
                    success:function(data){
                        alert(data);
                        $('#About_Data_Form')[0].reset();
                        Load_About_Data();
                    }
                });
            }
            else{
                alert("All Fields are required");
            }

        });

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Following functions Search the data Live through ajax without the page is being refreshed
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$('#searchReading').keyup(function(){
        var txtReading = $(this).val();
            $.ajax({
            url:"Assets/Ajax Search/Search_Reading.php",
            type:"POST",
            data:{search:txtReading},
            dataType:"text",
            success:function(data){
                $('#Reading_Table').html(data);
            }
         });
    });

$('#searchGrammer').keyup(function(){
        var txtGrammer = $(this).val();
            $.ajax({
            url:"Assets/Ajax Search/Search_Grammer.php",
            type:"POST",
            data:{search:txtGrammer},
            dataType:"text",
            success:function(data){
                $('#Grammer_Table').html(data);
            }
         });
    });

$('#searchVocabulary').keyup(function(){
        var txtVocabulary = $(this).val();
            $.ajax({
            url:"Assets/Ajax Search/Search_Vocabulary.php",
            type:"POST",
            data:{search:txtVocabulary},
            dataType:"text",
            success:function(data){
                $('#Vocabulary_Table').html(data);
            }
         });
    });

$('#searchAudio').keyup(function(){
        var txtAudio = $(this).val();
            $.ajax({
            url:"Assets/Ajax Search/Search_Audio.php",
            type:"POST",
            data:{search:txtAudio},
            dataType:"text",
            success:function(data){
                $('#Audio_Table').html(data);
            }
         });
    });


$('#searchResearch').keyup(function(){
        var txtResearch = $(this).val();
            $.ajax({
            url:"Assets/Ajax Search/Search_Research.php",
            type:"POST",
            data:{search:txtResearch},
            dataType:"text",
            success:function(data){
                $('#Research_Table').html(data);
            }
         });
    });

    $('#SearchBook').keyup(function(){
        var txtBook = $(this).val();
            $.ajax({
            url:"Assets/Ajax Search/Search_Book.php",
            type:"POST",
            data:{search:txtBook},
            dataType:"text",
            success:function(data){
                $('#Books_Table').html(data);
            }
         });
    });

$('#searchResult').keyup(function(){
        var txtResult = $(this).val();
    
            $.ajax({
            url:"Assets/Ajax Search/Search_Result.php",
            type:"POST",
            data:{search:txtResult},
            dataType:"text",
            success:function(data){
                $('#Result_Table').html(data);
            }
         });
    });

$('#searchStudent').keyup(function(){
        var txtStudent = $(this).val();
    
            $.ajax({
            url:"Assets/Ajax Search/Search_Student.php",
            type:"POST",
            data:{search:txtStudent},
            dataType:"text",
            success:function(data){
                $('#Student_Table').html(data);
            }
         });
    });

$('#searchNews').keyup(function(){
        var txtNews = $(this).val();
        
            $.ajax({
            url:"Assets/Ajax Search/Search_News.php",
            type:"POST",
            data:{search:txtNews},
            dataType:"text",
            success:function(data){
                $('#News_Table').html(data);
            }
         });
    });

$('#search_Reading_Audio').keyup(function(){
        var txtAudio = $(this).val();
        
            $.ajax({
            url:"Assets/Ajax Search/Search_Reading_Audio.php",
            type:"POST",
            data:{search:txtAudio},
            dataType:"text",
            success:function(data){
                $('#Reading_Audio_Table').html(data);
            }
         });
    });

$('#search_Listening_Audio').keyup(function(){
        var txtAudio = $(this).val();
        
            $.ajax({
            url:"Assets/Ajax Search/Search_Listening_Audio.php",
            type:"POST",
            data:{search:txtAudio},
            dataType:"text",
            success:function(data){
                $('#Listening_Audio_Table').html(data);
            }
         });
    });

$('#search_Vocabulary_Audio').keyup(function(){
        var txtAudio = $(this).val();
        
            $.ajax({
            url:"Assets/Ajax Search/Search_Vocabulary_Audio.php",
            type:"POST",
            data:{search:txtAudio},
            dataType:"text",
            success:function(data){
                $('#Vocabulary_Audio_Table').html(data);
            }
         });
    });

$('#search_Conversation_Audio').keyup(function(){
        var txtAudio = $(this).val();
        
            $.ajax({
            url:"Assets/Ajax Search/Search_Conversation.php",
            type:"POST",
            data:{search:txtAudio},
            dataType:"text",
            success:function(data){
                $('#Conversation_Audio_Table').html(data);
            }
         });
    });

    $('#searchMail').keyup(function(){
        var txtMail = $(this).val();
        // alert("THis is working");
            $.ajax({
            url:"Assets/Ajax Search/Search_Mail.php",
            type:"POST",
            data:{search:txtMail},
            dataType:"text",
            success:function(data){
                $('#Mail_Data_Table').html(data);
            }
         });
    });

    $('#searchUser').keyup(function(){
        var txtUsers = $(this).val();
            $.ajax({
            url:"Assets/Ajax Search/Search_User.php",
            type:"POST",
            data:{search:txtUsers},
            dataType:"text",
            success:function(data){
                $('#User_Table').html(data);
            }
         });
    });

    
});

