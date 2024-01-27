<?php 
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_student_data = $crd->Load_Student_Data();
            echo $get_student_data;
        }
    }
 $connect= mysqli_connect("localhost", "root", "", "Change");
 if(isset($_POST["Student_ID"])){

	if($_POST["action"]=='delete'){
	$query = "DELETE FROM Student WHERE Student.`Student_ID` = '".$_POST["Student_ID"]."'";

$get_student_data = $crd->Load_Student_Data();
            echo $get_student_data;
            

		if(!mysqli_query($connect, $query)){
			echo 'Student Not Deleted From Database';

		}
	}		
    
 }

?>

               
          