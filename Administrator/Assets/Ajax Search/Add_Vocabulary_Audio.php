<?php
    $filepath = realpath(dirname(__FILE__));
    include('./../_Partial Components/CRUD.php');
    
    $crd = new CRUD();
    if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_vocabulary_audio_data = $crd->Load_Vocabulary_Audio_Data();
            echo $get_vocabulary_audio_data;
        }
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $Audio = $crd->upload_vocabulary_audio($_FILES["Vocabulary_Audio"]);
        $Book_ID = $_POST["Book_ID"];
        $Vocabulary_Day = $_POST["Vocabulary_Day"];
        
        $vocabularyAdioAdd = $crd->addVocabularyAudio($Audio, $Book_ID, $Vocabulary_Day);

}
?>