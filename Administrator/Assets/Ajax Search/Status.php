<?php 
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();

 $connect= mysqli_connect("localhost", "root", "", "Change");
 if(isset($_POST["Book_ID"])){

	if($_POST["action"]=='Publish-Status'){
	$query = "UPDATE Book SET Status = 'Publish' WHERE Book.`Book_ID` = '".$_POST["Book_ID"]."'";

	$get_book_data = $crd->Load_Books_Data();
        echo $get_book_data;
            

		if(!mysqli_query($connect, $query)){
			echo 'Failure: Not Updated';

		}
	}
	if($_POST["action"]=='Pending-Status'){
	$query = "UPDATE Book SET Status = 'Pending' WHERE Book.`Book_ID` = '".$_POST["Book_ID"]."'";

	$get_book_data = $crd->Load_Books_Data();
        echo $get_book_data;
            

		if(!mysqli_query($connect, $query)){
			echo 'Failure: Not Updated';

		}
	}   
 }

 if(isset($_POST["Reading_ID"])){

	if($_POST["action"]=='Pending-Reading'){
	$query = "UPDATE Reading SET Status = '0' WHERE Reading.`Reading_ID` = '".$_POST["Reading_ID"]."'";

		$get_reading_data = $crd->Load_Reading_Data();
        echo $get_reading_data;
            
		if(!mysqli_query($connect, $query)){
			echo 'Failure: Not Updated';

		}
	}

	if($_POST["action"]=='Publish-Reading'){
	$query = "UPDATE Reading SET Status = '1' WHERE Reading.`Reading_ID` = '".$_POST["Reading_ID"]."'";

		$get_reading_data = $crd->Load_Reading_Data();
        echo $get_reading_data;
            
		if(!mysqli_query($connect, $query)){
			echo 'Failure: Not Updated';

		}
	} 
 } 

 if(isset($_POST["Audio_ID"])){

	if($_POST["action"]=='Pending-Audio'){
	$query = "UPDATE Audio SET Status = '0' WHERE Audio.`Audio_ID` = '".$_POST["Audio_ID"]."'";

		$get_audio_data = $crd->Load_Audio_Data();
        echo $get_audio_data;
            
		if(!mysqli_query($connect, $query)){
			echo 'Failure: Not Updated';

		}
	}

	if($_POST["action"]=='Publish-Audio'){
	$query = "UPDATE Audio SET Status = '1' WHERE Audio.`Audio_ID` = '".$_POST["Audio_ID"]."'";

		$get_audio_data = $crd->Load_Audio_Data();
        echo $get_audio_data;
            
		if(!mysqli_query($connect, $query)){
			echo 'Failure: Not Updated';

		}
	} 
 }

 if(isset($_POST["Grammer_ID"])){

	if($_POST["action"]=='Pending-Grammer'){
	$query = "UPDATE Grammer SET Status = '0' WHERE Grammer.`Grammer_ID` = '".$_POST["Grammer_ID"]."'";

	$get_book_data = $crd->Load_Books_Data();
        echo $get_book_data;
            
		if(!mysqli_query($connect, $query)){
			echo 'Failure: Not Updated';

		}
	}

	if($_POST["action"]=='Publish-Grammer'){
	$query = "UPDATE Grammer SET Status = '1' WHERE Grammer.`Grammer_ID` = '".$_POST["Grammer_ID"]."'";

	$get_grammer_data = $crd->Load_Grammer_Data();
        echo $get_grammer_data;
            
		if(!mysqli_query($connect, $query)){
			echo 'Failure: Not Updated';

		}
	} 
 }


 if(isset($_POST["Vocabulary_ID"])){

	if($_POST["action"]=='Pending-Vocabulary'){
	$query = "UPDATE Vocabulary SET Status = '0' WHERE Vocabulary.`Vocabulary_ID` = '".$_POST["Vocabulary_ID"]."'";

		$get_vocabulary_data = $crd->Load_Vocabulary_Data();
        echo $get_vocabulary_data;
            
		if(!mysqli_query($connect, $query)){
			echo 'Failure: Not Updated';

		}
	}

	if($_POST["action"]=='Publish-Vocabulary'){
	$query = "UPDATE Vocabulary SET Status = '1' WHERE Vocabulary.`Vocabulary_ID` = '".$_POST["Vocabulary_ID"]."'";

		$get_vocabulary_data = $crd->Load_Vocabulary_Data();
        echo $get_vocabulary_data;
            
		if(!mysqli_query($connect, $query)){
			echo 'Failure: Not Updated';

		}
	} 
 }


?>

               
          