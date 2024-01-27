<?php 
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_news_data = $crd->Load_News_Data();
            echo $get_news_data;
        }
    }
 $connect= mysqli_connect("localhost", "root", "", "Change");
 if(isset($_POST["News_ID"])){

	if($_POST["action"]=='delete'){
	$query = "DELETE FROM News WHERE News.`News_ID` = '".$_POST["News_ID"]."'";

	$get_news_data = $crd->Load_News_Data();
	echo $get_news_data;
                
	$select_query = "SELECT * FROM News WHERE News_ID = '".$_POST["News_ID"]."'";
	$result = mysqli_query($connect, $select_query);
	$row = $result->fetch_assoc();
	$img = $row['File'];

	unlink('./../../../Assets/img/News/'.$img);
		if(mysqli_query($connect, $query)){
			echo 'News Deleted From Database';

		}
	}		
    
 }






?>

               
          