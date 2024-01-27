<?php
	
	include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_conversation_audio_data = $crd->Load_Conversation_Audio_Data();
            echo $get_conversation_audio_data;
        }
    }

?>