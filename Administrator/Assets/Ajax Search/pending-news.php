<?php 
 $connect= mysqli_connect("localhost", "root", "", "News_Portal");
 if(isset($_POST["News_ID"])){
    
$query = "UPDATE News SET  Status = 'Publish'  WHERE news.`News_ID` = '".$_POST["News_ID"]."'";
			
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
 }
?>

               
          