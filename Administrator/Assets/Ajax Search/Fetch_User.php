<?php
	
	include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_user_data = $crd->Load_User_Data();
            echo $get_user_data;
        }
    }

?>