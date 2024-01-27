<?php
	
	include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_book_data = $crd->Load_Books_Data();
            echo $get_book_data;
        }
    }

?>