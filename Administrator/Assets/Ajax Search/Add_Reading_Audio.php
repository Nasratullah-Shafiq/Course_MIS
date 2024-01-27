<?php
	$filepath = realpath(dirname(__FILE__));
	include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_reading_audio_data = $crd->Load_Reading_Audio_Data();
            echo $get_reading_audio_data;
        }
    }

 	if($_SERVER['REQUEST_METHOD'] == 'POST'){
    	
        $Audio = $crd->upload_reading_audio($_FILES["Reading_Audio"]);
        $Book_ID = $_POST["Book_ID"];
        $Reading_Unit = $_POST["Reading_Unit"];
    	
    	$readingAdioAdd = $crd->addReadingAudio($Audio, $Book_ID, $Reading_Unit);

}
?>