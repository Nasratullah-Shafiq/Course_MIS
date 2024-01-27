<?php
	
	include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_about_data = $crd->Load_About_Data();
            echo $get_about_data;
        }
    }

 // 	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	// if($_POST["action"] == "Add News"){
 //    	$Heading = $_POST["Heading"];
 //    	$Body = $_POST["Body"];
 //    	$Source = $_POST["Source"];
 //    	$Category_ID = $_POST["Category_ID"];
 //    	$Image = $crd->upload_file($_FILES["News_Image"]);
    	
 //    	$newsAdd = $crd->addNews($Heading, $Body, $Source, $Category_ID, $Image);
 //    	}
// }
?>