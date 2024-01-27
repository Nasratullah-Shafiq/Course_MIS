<?php 
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_audio_data = $crd->Load_Audio_Data();
            echo $get_audio_data;
        }
    }
 $connect= mysqli_connect("localhost", "root", "", "Change");
 if(isset($_POST["Audio_ID"])){

	if($_POST["action"]=='delete'){
	$query = "DELETE FROM Audio WHERE Audio.`Audio_ID` = '".$_POST["Audio_ID"]."'";

	$get_audio_data = $crd->Load_Audio_Data();
	echo $get_audio_data;
                
	$select_query = "SELECT * FROM Audio WHERE Audio_ID = '".$_POST["Audio_ID"]."'";
	$result = mysqli_query($connect, $select_query);
	$row = $result->fetch_assoc();
	$Aud = $row['Audio'];

	unlink('./../../../Assets/Audio/'.$Aud);
		if(!mysqli_query($connect, $query)){
			echo 'Audio Not Deleted From Database';

		}
	}		
    
 }

?>

               
          