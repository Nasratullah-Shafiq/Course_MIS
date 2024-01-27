<?php
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
  
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_advertisement_data = $crd->Load_Advertisement_Data();
            echo $get_advertisement_data;
        }
    }

 	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
    	$Heading = $_POST["Heading"];
    	$Image = $crd->upload_Advertisement_image($_FILES["Advertisement_Image"]);
    	
    	$advertisementAdd = $crd->addAdvertisement($Heading, $Image);
}
?>