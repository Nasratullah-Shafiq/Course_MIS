<?php 
 $connect= mysqli_connect("localhost", "root", "", "Change");
 if(isset($_POST["Ad_ID"])){
    $query = "SELECT * from Ads WHERE Ad_ID = '".$_POST["Ad_ID"]."'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
 }
 if(isset($_POST["Carousel_ID"])){
    $query = "SELECT * from Carousel WHERE Carousel_ID = '".$_POST["Carousel_ID"]."'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
 }
  if(isset($_POST["News_ID"])){
    $query = "SELECT * from News WHERE News_ID = '".$_POST["News_ID"]."'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
 }
   if(isset($_POST["Research_ID"])){
    $query = "SELECT * from Research WHERE Research_ID = '".$_POST["Research_ID"]."'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
 }
   if(isset($_POST["Book_ID"])){
    $query = "SELECT * from Book WHERE Book_ID = '".$_POST["Book_ID"]."'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
 }
   if(isset($_POST["Reading_Audio_ID"])){
    $query = "SELECT * from Reading_Audio WHERE Audio_ID = '".$_POST["Reading_Audio_ID"]."'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
 }
 if(isset($_POST["Listening_Audio_ID"])){
    $query = "SELECT * from Listening_Audio WHERE Audio_ID = '".$_POST["Listening_Audio_ID"]."'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
 }
 if(isset($_POST["Vocabulary_Audio_ID"])){
    $query = "SELECT * from Vocabulary_Audio WHERE Audio_ID = '".$_POST["Vocabulary_Audio_ID"]."'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
 }

  if(isset($_POST["Conversation_Audio_ID"])){
    $query = "SELECT * from Conversation_Audio WHERE Audio_ID = '".$_POST["Conversation_Audio_ID"]."'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
 }

 
   if(isset($_POST["Audio_ID"])){
    $query = "SELECT * from Audio WHERE Audio_ID = '".$_POST["Audio_ID"]."'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
 }
 if(isset($_POST["Reading_ID"])){
    $query = "SELECT * from Reading WHERE Reading_ID = '".$_POST["Reading_ID"]."'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
 }
 if(isset($_POST["Grammer_ID"])){
    $query = "SELECT * from Grammer WHERE Grammer_ID = '".$_POST["Grammer_ID"]."'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
 }
 if(isset($_POST["Vocabulary_ID"])){
    $query = "SELECT * from Vocabulary WHERE Vocabulary_ID = '".$_POST["Vocabulary_ID"]."'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
 }
   if(isset($_POST["Student_ID"])){
    $query = "SELECT * from Viw_Student WHERE Student_ID = '".$_POST["Student_ID"]."'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
 }
   if(isset($_POST["User_ID"])){
    $query = "SELECT * from Users WHERE User_ID = '".$_POST["User_ID"]."'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
 }
   if(isset($_POST["About_ID"])){
   	$query = "SELECT * from About_Us WHERE About_ID = '".$_POST["About_ID"]."'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
 }
 if(isset($_POST["Contact_ID"])){
    $query = "SELECT * from Contact_Us WHERE Contact_ID = '".$_POST["Contact_ID"]."'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
 }
?>

               
          