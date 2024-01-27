<?php
	
	include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_data = $crd->get_users_in_table();
            echo $get_data;
        }
    }
?>