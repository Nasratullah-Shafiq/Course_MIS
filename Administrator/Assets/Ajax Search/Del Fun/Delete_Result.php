<?php 
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_result_data = $crd->Load_Result_Data();
        	echo $get_result_data;
        }
    }
 $connect= mysqli_connect("localhost", "root", "", "Change");
 if(isset($_POST["Result_ID"])){

	if($_POST["action"]=='delete'){
	$query = "DELETE FROM Result WHERE Result.`Result_ID` = '".$_POST["Result_ID"]."'";

		$get_result_data = $crd->Load_Result_Data();
        echo $get_result_data;
            

		if(!mysqli_query($connect, $query)){
			echo 'Result Not Deleted From Database';

		}
	}		
    
 }






?>

               
          