<?php 
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_reading_data = $crd->Load_Reading_Data();
            echo $get_reading_data;
        }
    }
 $connect= mysqli_connect("localhost", "root", "", "Change");
 if(isset($_POST["Reading_ID"])){

	if($_POST["action"]=='delete'){
	$query = "DELETE FROM Reading WHERE Reading.`Reading_ID` = '".$_POST["Reading_ID"]."'";

	$get_reading_data = $crd->Load_Reading_Data();
            echo $get_reading_data;
            

		if(!mysqli_query($connect, $query)){
			echo 'Reading Not Deleted From Database';

		}
	}		
    
 }






?>

               
          