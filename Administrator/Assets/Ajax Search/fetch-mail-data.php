<?php
	
	include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_mail_data = $crd->Load_Mail_Data();
            echo $get_mail_data;
        }
    }

?>