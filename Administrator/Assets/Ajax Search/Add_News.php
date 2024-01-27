<?php
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
  
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_news_data = $crd->Load_News_Data();
            echo $get_news_data;
        }
    }

 	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
    	$Heading = $_POST["Heading"];
    	$Body = $_POST["Body"];
    	$Source = $_POST["Source"];
    	$File = $crd->upload_news_image($_FILES["News_Image"]);
    	
    	$newsAdd = $crd->addNews($Heading, $Body, $Source, $File);
}
?>