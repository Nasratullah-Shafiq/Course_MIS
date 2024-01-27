<?php 
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_slide_data = $crd->Load_Carousel_Data();
            echo $get_slide_data;
        }
    }
 $connect= mysqli_connect("localhost", "root", "", "Change");
 if(isset($_POST["Carousel_ID"])){

	if($_POST["action"]=='delete'){
	$query = "DELETE FROM Carousel WHERE Carousel.`Carousel_ID` = '".$_POST["Carousel_ID"]."'";

$get_slide_data = $crd->Load_Carousel_Data();
            echo $get_slide_data;
            
	$select_query = "SELECT * from Carousel WHERE Carousel_ID = '".$_POST["Carousel_ID"]."'";
	$result = mysqli_query($connect, $select_query);
	$row = $result->fetch_assoc();
	$img = $row['Image'];

	unlink('./../../../Assets/img/Carousel/'.$img);
		if(!mysqli_query($connect, $query)){
			echo 'Carousel Not Deleted From Database';

		}
	}		
    
 }






?>

               
          