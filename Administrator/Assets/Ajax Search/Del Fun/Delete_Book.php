<?php 
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
	
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_books_data = $crd->Load_Books_Data();
            echo $get_books_data;
        }
    }
 $connect= mysqli_connect("localhost", "root", "", "Change");
 if(isset($_POST["Book_ID"])){

	if($_POST["action"]=='delete'){
	$query = "DELETE FROM Book WHERE Book.`Book_ID` = '".$_POST["Book_ID"]."'";

	$get_books_data = $crd->Load_Books_Data();
	echo $get_books_data;
                
	$select_query = "SELECT * FROM Book WHERE Book_ID = '".$_POST["Book_ID"]."'";
	$result = mysqli_query($connect, $select_query);
	$row = $result->fetch_assoc();
	$img = $row['Image'];

	unlink('./../../../Assets/img/Book/'.$img);
		if(mysqli_query($connect, $query)){
			echo 'Books Deleted From Database';

		}
	}		
    
 }

?>

               
          