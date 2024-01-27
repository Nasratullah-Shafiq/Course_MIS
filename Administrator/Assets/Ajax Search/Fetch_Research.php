<?php
	
	include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_research_data = $crd->Load_Research_Data();
            echo $get_research_data;
        }
    }

?>