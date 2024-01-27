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
 $connect= mysqli_connect("localhost", "root", "", "Change");
 if(isset($_POST["About_ID"])){

	if($_POST["action"]=='delete'){
	$query = "DELETE FROM About_Us WHERE About_Us.`About_ID` = '".$_POST["About_ID"]."'";

$get_about_data = $crd->Load_About_Data();
            echo $get_about_data;
            

		if(!mysqli_query($connect, $query)){
			echo 'Data Not Deleted From Database';

		}
	}		
    
 }






?>

               
          