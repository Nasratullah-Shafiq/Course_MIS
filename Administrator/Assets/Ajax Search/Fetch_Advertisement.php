<?php
	
	include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_advertisement_data = $crd->Load_Advertisement_Data();
            echo $get_advertisement_data;
        }
    }

?>