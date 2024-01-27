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
 $connect= mysqli_connect("localhost", "root", "", "Change");
 if(isset($_POST["Research_ID"])){

	if($_POST["action"]=='delete'){
	$query = "DELETE FROM Research WHERE Research.`Research_ID` = '".$_POST["Research_ID"]."'";

$get_research_data = $crd->Load_Research_Data();
            echo $get_research_data;
            
	$select_query = "SELECT * from Research WHERE Research_ID = '".$_POST["Research_ID"]."'";
	$result = mysqli_query($connect, $select_query);
	$row = $result->fetch_assoc();
	$img = $row['File'];

	unlink('./../../../Assets/img/Research/'.$img);
		if(!mysqli_query($connect, $query)){
			echo 'Research Not Deleted From Database';

		}
	}		
    
 }






?>

               
          