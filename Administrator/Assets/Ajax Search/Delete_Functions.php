<?php 
 	
 $connect= mysqli_connect("localhost", "root", "", "Change");
	if($_POST["action"]=='Delete_Reading_Audio'){
	$query = "DELETE FROM Reading_Audio WHERE Reading_Audio.`Audio_ID` = '".$_POST["Reading_Audio_ID"]."'";
                
	$select_query = "SELECT * FROM Reading_Audio WHERE Audio_ID = '".$_POST["Reading_Audio_ID"]."'";
	$result = mysqli_query($connect, $select_query);
	$row = $result->fetch_assoc();
	$Aud = $row['Audio'];

	unlink('./../../../Assets/Audio/Reading_Audio/'.$Aud);
		if(!mysqli_query($connect, $query)){
			echo 'Audio Not Deleted From Database';

		}
	}
	if($_POST["action"]=='Delete_Listening_Audio'){
	$query = "DELETE FROM listening_audio WHERE listening_audio.`Audio_ID` = '".$_POST["Listening_Audio_ID"]."'";
                
	$select_query = "SELECT * FROM listening_audio WHERE Audio_ID = '".$_POST["Listening_Audio_ID"]."'";
	$result = mysqli_query($connect, $select_query);
	$row = $result->fetch_assoc();
	$Aud = $row['Audio'];

	unlink('./../../../Assets/Audio/Listening_Audio/'.$Aud);
		if(!mysqli_query($connect, $query)){
			echo 'Audio Not Deleted From Database';

		}
	}
	if($_POST["action"]=='Delete_Vocabulary_Audio'){
	$query = "DELETE FROM vocabulary_audio WHERE vocabulary_audio.`Audio_ID` = '".$_POST["Vocabulary_Audio_ID"]."'";
                
	$select_query = "SELECT * FROM vocabulary_audio WHERE Audio_ID = '".$_POST["Vocabulary_Audio_ID"]."'";
	$result = mysqli_query($connect, $select_query);
	$row = $result->fetch_assoc();
	$Aud = $row['Audio'];

	unlink('./../../../Assets/Audio/Vocabulary_Audio/'.$Aud);
		if(!mysqli_query($connect, $query)){
			echo 'Audio Not Deleted From Database';

		}
	}		
	if($_POST["action"]=='Delete_Conversation_Audio'){
	$query = "DELETE FROM conversation_audio WHERE conversation_audio.`Audio_ID` = '".$_POST["Conversation_Audio_ID"]."'";
                
	$select_query = "SELECT * FROM conversation_audio WHERE Audio_ID = '".$_POST["Conversation_Audio_ID"]."'";
	$result = mysqli_query($connect, $select_query);
	$row = $result->fetch_assoc();
	$Aud = $row['Audio'];

	unlink('./../../../Assets/Audio/Conversation_Audio/'.$Aud);
		if(!mysqli_query($connect, $query)){
			echo 'Audio Not Deleted From Database';

		}
	}
	if($_POST["action"]=='Delete_Slide'){
	$query = "DELETE FROM carousel WHERE carousel.`Carousel_ID` = '".$_POST["Carousel_ID"]."'";
                
	$select_query = "SELECT * FROM carousel WHERE Carousel_ID = '".$_POST["Carousel_ID"]."'";
	$result = mysqli_query($connect, $select_query);
	$row = $result->fetch_assoc();
	$Aud = $row['Audio'];

	unlink('./../../../Assets/Audio/Carousel/'.$Aud);
		if(!mysqli_query($connect, $query)){
			echo 'Audio Not Deleted From Database';

		}
	}
	  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_student_data = $crd->Load_Student_Data();
            echo $get_student_data;
        }
    }
 

if($_POST["action"]=='Delete_Student'){
	$query = "DELETE FROM Student WHERE Student.`Student_ID` = '".$_POST["Student_ID"]."'";
                
		if(!mysqli_query($connect, $query)){
			echo 'Data Not Deleted From Database';

		}
	}

	if($_POST["action"]=='Delete_Book'){
	$query = "DELETE FROM book WHERE book.`Book_ID` = '".$_POST["Book_ID"]."'";
                
	$select_query = "SELECT * FROM book WHERE Book_ID = '".$_POST["Book_ID"]."'";
	$result = mysqli_query($connect, $select_query);
	$row = $result->fetch_assoc();
	$Aud = $row['Audio'];

	unlink('./../../../Assets/Audio/Book/'.$Aud);
		if(!mysqli_query($connect, $query)){
			echo 'Data Not Deleted From Database';

		}
	}

	if($_POST["action"]=='Delete_Research'){
	$query = "DELETE FROM research WHERE research.`Research_ID` = '".$_POST["Research_ID"]."'";
                
	$select_query = "SELECT * FROM research WHERE Research_ID = '".$_POST["Research_ID"]."'";
	$result = mysqli_query($connect, $select_query);
	$row = $result->fetch_assoc();
	$Aud = $row['Audio'];

	unlink('./../../../Assets/Audio/Research/'.$Aud);
		if(!mysqli_query($connect, $query)){
			echo 'Data Not Deleted From Database';

		}
	}
	if($_POST["action"]=='Delete_Book'){
	$query = "DELETE FROM book WHERE book.`Book_ID` = '".$_POST["Book_ID"]."'";
                
	$select_query = "SELECT * FROM book WHERE Book_ID = '".$_POST["Book_ID"]."'";
	$result = mysqli_query($connect, $select_query);
	$row = $result->fetch_assoc();
	$Aud = $row['Audio'];

	unlink('./../../../Assets/Audio/Book/'.$Aud);
		if(!mysqli_query($connect, $query)){
			echo 'Data Not Deleted From Database';

		}
	}
	if($_POST["action"]=='Delete_News'){
	$query = "DELETE FROM news WHERE news.`News_ID` = '".$_POST["News_ID"]."'";
                
	$select_query = "SELECT * FROM news WHERE News_ID = '".$_POST["News_ID"]."'";
	$result = mysqli_query($connect, $select_query);
	$row = $result->fetch_assoc();
	$Aud = $row['Audio'];

	unlink('./../../../Assets/Audio/News/'.$Aud);
		if(!mysqli_query($connect, $query)){
			echo 'Data Not Deleted From Database';

		}
	}
	if($_POST["action"]=='Delete_About_Data'){
	$query = "DELETE FROM about_us WHERE about_us.`About_ID` = '".$_POST["About_ID"]."'";
 
		if(!mysqli_query($connect, $query)){
			echo 'Audio Not Deleted From Database';

		}
	}

if($_POST["action"]=='Delete_Audio'){
	$query = "DELETE FROM reading WHERE reading.`Audio_ID` = '".$_POST["Reading_ID"]."'";
                
	$select_query = "SELECT * FROM reading WHERE Audio_ID = '".$_POST["Reading_ID"]."'";
	$result = mysqli_query($connect, $select_query);
	$row = $result->fetch_assoc();
	$Aud = $row['Audio'];

	unlink('./../../../Assets/Audio/Reading_Audio/'.$Aud);
		if(!mysqli_query($connect, $query)){
			echo 'Audio Not Deleted From Database';

		}
	}
	if($_POST["action"]=='Delete_Grammer'){
	$query = "DELETE FROM grammer WHERE grammer.`Audio_ID` = '".$_POST["Grammer_ID"]."'";
      
		if(!mysqli_query($connect, $query)){
			echo 'Audio Not Deleted From Database';

		}
	}

	if($_POST["action"]=='Delete_Reading'){
	$query = "DELETE FROM reading WHERE reading.`Reading_ID` = '".$_POST["Reading_ID"]."'";
                
		if(!mysqli_query($connect, $query)){
			echo 'Audio Not Deleted From Database';

		}
	}

if($_POST["action"]=='Delete_Result'){
	$query = "DELETE FROM result WHERE result.`Result_ID` = '".$_POST["Result_ID"]."'";
                
		if(!mysqli_query($connect, $query)){
			echo 'Audio Not Deleted From Database';

		}
	}
if($_POST["action"]=='Delete_User'){
	$query = "DELETE FROM users WHERE users.`User_ID` = '".$_POST["User_ID"]."'";
                
	$select_query = "SELECT * FROM users WHERE User_ID = '".$_POST["User_ID"]."'";
	$result = mysqli_query($connect, $select_query);
	$row = $result->fetch_assoc();
	$Aud = $row['Audio'];

	unlink('./../../../Assets/Audio/Users/'.$Aud);
		if(!mysqli_query($connect, $query)){
			echo 'Audio Not Deleted From Database';

		}
	}

?>

               
          