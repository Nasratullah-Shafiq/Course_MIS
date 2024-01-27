<?php 
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
    
    
if(isset($_POST["Contact_ID"])){
	$output = '';
    $connect = mysqli_connect("localhost", "root", "", "Change" );
    $query = "SELECT * from Contact_Us where Contact_ID = '".$_POST["Contact_ID"]."'";
    $result = mysqli_query($connect, $query);
    $output .='
    	<div class = "table-responsive"> 
    	<table class = "table table-responsive table-stripped table-hover">';
    while ($row = mysqli_fetch_array($result)) {
    	$output .='
    	<tr>
    		<td width = "30%"> <label> Name </label></td>
    		<td width = "30%">'.$row["Full_Name"].'</td>  
    	</tr>
        <tr>
            <td width = "30%"> <label> Message </label></td>
            <td width = "30%">'.$row["Message"].'</td> 
        </tr>
    	<tr>
    		<td width = "30%"> <label> Email </label></td>
    		<td width = "30%">'.$row["Email"].'</td> 
    	</tr>
    	<tr>
    		<td width = "30%"> <label> Phone No </label></td>
    		<td width = "30%">'.$row["Phone_No"].'</td> 
    	</tr>
    	<tr>
    		<td width = "30%"> <label> Date </label></td>
    		<td width = "30%">'.$row["Date"].'</td> 
    	</tr>
    	';
    }
$output .= "</table> </div>";
echo $output; 
}
if(isset($_POST["Contact_ID"])){
    
    $connect = mysqli_connect("localhost", "root", "", "Change" );
    $query = "UPDATE Contact_Us SET Status = 0 where Contact_ID = '".$_POST["Contact_ID"]."'";
    $result = mysqli_query($connect, $query);
    
}    



?>
