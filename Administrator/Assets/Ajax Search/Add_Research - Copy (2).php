<?php
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
  
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_research_data = $crd->Load_Research_Data();
            echo $get_research_data;
        }
    }

 	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
    	$Heading = $_POST["Heading"];
    	$Body = $_POST["Body"];
    	$Full_Name = $_POST["Full_Name"];
    	$File = $crd->upload_research_image($_FILES["Research_Image"]);
    	
    	$researchAdd = $crd->addResearch($Heading, $Body, $Full_Name, $File);
}

     $Heading = $_POST["Heading"];
     $Body = $_POST["Body"];
     $Full_Name = $_POST["Full_Name"];
     $File = $crd->upload_research_image($_FILES["Research_Image"]);
?>