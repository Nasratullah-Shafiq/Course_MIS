<?php
	
	include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_listening_audio_data = $crd->Load_Listening_Audio_Data();
            echo $get_listening_audio_data;
        }
    }

?>