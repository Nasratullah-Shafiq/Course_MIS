<?php
	
	include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_result_data = $crd->Load_Result_Data();
            echo $get_result_data;
        }
    }

?>