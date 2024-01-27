<?php 
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_mail_data = $crd->Load_Mail_Data();
            echo $get_mail_data;
        }
    }
 $connect= mysqli_connect("localhost", "root", "", "Change");
 if(isset($_POST["Contact_ID"])){

	if($_POST["action"]=='delete'){
	$query = "DELETE FROM Contact_Us WHERE Contact_Us.`Contact_ID` = '".$_POST["Contact_ID"]."'";

	$get_mail_data = $crd->Load_Mail_Data();
        echo $get_mail_data;
            

		if(!mysqli_query($connect, $query)){
			echo 'Mail Not Deleted From Database';

		}
	}		
    
 }






?>

               
          