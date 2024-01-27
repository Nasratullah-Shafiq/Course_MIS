<?php
    $filepath = realpath(dirname(__FILE__));
    include('./../_Partial Components/CRUD.php');
    
    $crd = new CRUD();
    if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_listening_audio_data = $crd->Load_Listening_Audio_Data();
            echo $get_listening_audio_data;
        }
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $Audio = $crd->upload_listening_audio($_FILES["Listening_Audio"]);
        $Book_ID = $_POST["Book_ID"];
        $Listening_Unit = $_POST["Listening_Unit"];
        
        $listeningAdioAdd = $crd->addListeningAudio($Audio, $Book_ID, $Listening_Unit);

}
?>