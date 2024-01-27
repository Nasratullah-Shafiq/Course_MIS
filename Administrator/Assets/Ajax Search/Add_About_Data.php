<?php
	$filepath = realpath(dirname(__FILE__));
	include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_about_data = $crd->Load_About_Data();
            echo $get_about_data;
        }
    }

 	if($_SERVER['REQUEST_METHOD'] == 'POST'){

    	$Heading = $_POST["Heading"];
    	$Body = $_POST["Body"];
    	
    	$aboutDataAdd = $crd->addAboutData($Heading, $Body);

}
?>