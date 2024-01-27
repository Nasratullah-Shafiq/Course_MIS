<?php 

$connect = mysqli_connect("localhost", "root", "", "Change");
if(isset($_POST["News_ID"])){
    $query = "SELECT * FROM News WHERE News_ID = '".$_POST["News_ID"]."'";
    $result = myslqi_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
}

    



?>