<?php
	
	include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_reading_audio_data = $crd->Load_Reading_Audio_Data();
            echo $get_reading_audio_data;
        }
    }

?>