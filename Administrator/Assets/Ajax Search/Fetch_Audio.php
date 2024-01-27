<?php
	
	include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_audio_data = $crd->Load_Audio_Data();
            echo $get_audio_data;
        }
    }

?>