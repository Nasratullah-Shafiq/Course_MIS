<?php
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
  
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_carousel_data = $crd->Load_Carousel_Data();
            echo $get_carousel_data;
        }
    }

 	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
    	$Heading = $_POST["Heading"];
    	$Image = $crd->upload_carousel_image($_FILES["Carousel_Image"]);
    	
    	$carouselAdd = $crd->addCarousel($Heading, $Image);
}
?>