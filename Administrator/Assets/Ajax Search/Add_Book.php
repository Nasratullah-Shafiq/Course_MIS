<?php
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');

 	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
    	$Full_Name = $_POST["Full_Name"];
    	$Duration = $_POST["Duration"];
    	$Fees = $_POST["Fees"];
        $Description = $_POST["Description"];
    	$Image = $crd->upload_book_image($_FILES["Book_Image"]);
    	
    	$bookAdd = $crd->addBook($Full_Name, $Duration, $Fees, $Description, $Image);
}
?>