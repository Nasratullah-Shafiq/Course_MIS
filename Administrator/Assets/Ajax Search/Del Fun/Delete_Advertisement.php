<?php 
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_ads_data = $crd->Load_Advertisement_Data();
            echo $get_ads_data;
        }
    }
 $connect= mysqli_connect("localhost", "root", "", "Change");
 if(isset($_POST["Ad_ID"])){

	if($_POST["action"]=='delete'){
	$query = "DELETE FROM Ads WHERE Ads.`Ad_ID` = '".$_POST["Ad_ID"]."'";

	$get_ads_data = $crd->Load_Advertisement_Data();
            echo $get_ads_data;
            
	$select_query = "SELECT * from Ads WHERE Ad_ID = '".$_POST["Ad_ID"]."'";
	$result = mysqli_query($connect, $select_query);
	$row = $result->fetch_assoc();
	$img = $row['Image'];

	unlink('./../../../Assets/img/Ads/'.$img);
		if(!mysqli_query($connect, $query)){
			echo 'Ads Not Deleted From Database';

		}
	}		
    
 }






?>

               
          