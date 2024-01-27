<?php 
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_vocabulary_data = $crd->Load_Vocabulary_Data();
            echo $get_vocabulary_data;
        }
    }
    
 $connect= mysqli_connect("localhost", "root", "", "Change");
 if(isset($_POST["Vocabulary_ID"])){

	if($_POST["action"]=='delete'){
	$query = "DELETE FROM Vocabulary WHERE Vocabulary.`Vocabulary_ID` = '".$_POST["Vocabulary_ID"]."'";

	$get_vocabulary_data = $crd->Load_Vocabulary_Data();
        echo $get_vocabulary_data;
            

		if(!mysqli_query($connect, $query)){
			echo 'Vocabulary Not Deleted From Database';

		}
	}		
    
 }






?>

               
          