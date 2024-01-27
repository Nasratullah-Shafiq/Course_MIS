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

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $Audio = $crd->upload_Conversation_audio($_FILES["Conversation_Audio"]);
        $Book_ID = $_POST["Book_ID"];
        $Conversation_Unit = $_POST["Conversation_Unit"];
        
        $ConversationAdioAdd = $crd->addConversationAudio($Audio, $Book_ID, $Conversation_Unit);

}
?>