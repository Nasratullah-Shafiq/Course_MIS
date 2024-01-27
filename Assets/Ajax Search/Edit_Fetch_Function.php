<?php 
 $connect= mysqli_connect("localhost", "root", "", "Change");
 if(isset($_POST["User_ID"])){
    $query = "SELECT * from Users WHERE User_ID = '".$_POST["User_ID"]."'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
 }
?>

               
          