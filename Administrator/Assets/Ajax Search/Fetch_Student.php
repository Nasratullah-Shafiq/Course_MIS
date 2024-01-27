<?php
	
	include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_student_data = $crd->Load_Student_Data();
            echo $get_student_data;
        }
    }

?>