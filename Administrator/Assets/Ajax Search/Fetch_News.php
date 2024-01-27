<?php
	
	include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_news_data = $crd->Load_News_Data();
            echo $get_news_data;
        }
    }

?>