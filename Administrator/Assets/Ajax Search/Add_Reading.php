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

 	if($_SERVER['REQUEST_METHOD'] == 'POST'){
    	$Body = $_POST["Body"];
    	$Question = $_POST["Question"];
    	$First_Answer = $_POST["First_Answer"];
    	$Second_Answer = $_POST["Second_Answer"];
    	$Third_Answer = $_POST["Third_Answer"];
    	$Fourth_Answer = $_POST["Fourth_Answer"];
    	$Right_Answer = $_POST["Right_Answer"];
    	$Book_ID = $_POST["Book_ID"];
    	
    	$readingAdd = $crd->addReading($Body, $Question, $First_Answer, $Second_Answer, $Third_Answer, $Fourth_Answer, $Right_Answer, $Book_ID);

}
?>