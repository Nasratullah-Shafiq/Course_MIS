<?php 
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_conversation_audio_data = $crd->Load_Conversation_Audio_Data();
            echo $get_conversation_audio_data;
        }
    }
 $connect= mysqli_connect("localhost", "root", "", "Change");
 if(isset($_POST["Conversation_Audio_ID"])){

	if($_POST["action"]=='delete'){
	$query = "DELETE FROM Conversation_Audio WHERE Conversation_Audio.`Audio_ID` = '".$_POST["Conversation_Audio_ID"]."'";

	$get_conversation_audio_data = $crd->Load_Conversation_Audio_Data();
	echo $get_conversation_audio_data;
                
	$select_query = "SELECT * FROM Conversation_Audio WHERE Audio_ID = '".$_POST["Conversation_Audio_ID"]."'";
	$result = mysqli_query($connect, $select_query);
	$row = $result->fetch_assoc();
	$Aud = $row['Audio'];

	unlink('./../../../Assets/Audio/Conversation_Audio/'.$Aud);
		if(!mysqli_query($connect, $query)){
			echo 'Audio Not Deleted From Database';

		}
	}		
    
 }

?>

               
          