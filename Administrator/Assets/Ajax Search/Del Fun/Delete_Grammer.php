<?php 
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_grammer_data = $crd->Load_Grammer_Data();
            echo $get_grammer_data;
        }
    }
 $connect= mysqli_connect("localhost", "root", "", "Change");
 if(isset($_POST["Grammer_ID"])){

	if($_POST["action"]=='delete'){
	$query = "DELETE FROM Grammer WHERE Grammer.`Grammer_ID` = '".$_POST["Grammer_ID"]."'";

	$get_grammer_data = $crd->Load_Grammer_Data();
        echo $get_grammer_data;
            

		if(!mysqli_query($connect, $query)){
			echo 'Student Not Deleted From Database';

		}
	}		
    
 }






?>

               
          