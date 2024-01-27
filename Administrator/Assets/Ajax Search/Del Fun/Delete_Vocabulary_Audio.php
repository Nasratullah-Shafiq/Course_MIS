<?php 

 $connect= mysqli_connect("localhost", "root", "", "Change");
 if(isset($_POST["Vocabulary_Audio_ID"])){

	if($_POST["action"]=='delete'){
	$query = "DELETE FROM Vocabulary_Audio WHERE Vocabulary_Audio.`Audio_ID` = '".$_POST["Vocabulary_Audio_ID"]."'";

	$select_query = "SELECT * FROM Vocabulary_Audio WHERE Audio_ID = '".$_POST["Vocabulary_Audio_ID"]."'";
	$result = mysqli_query($connect, $select_query);
	$row = $result->fetch_assoc();
	$Aud = $row['Audio'];

	unlink('./../../../Assets/Audio/Vocabulary_Audio/'.$Aud);
		if(!mysqli_query($connect, $query)){
			echo 'Audio Not Deleted From Database';

		}
	}		
    
 }

?>

               
          