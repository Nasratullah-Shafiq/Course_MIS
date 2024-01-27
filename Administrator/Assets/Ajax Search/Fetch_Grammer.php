<?php
	
	include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_grammer_data = $crd->Load_Grammer_Data();
            echo $get_grammer_data;
        }
    }

?>