<?php
	
	include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_carousel_data = $crd->Load_Carousel_Data();
            echo $get_carousel_data;
        }
    }

?>