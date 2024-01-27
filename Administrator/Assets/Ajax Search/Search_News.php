<?php 

$output = '';

$connect = mysqli_connect("localhost", "root", "", "Change");
$request = mysqli_real_escape_string($connect, $_POST['search']);
    
$sql = "SELECT * FROM News WHERE Heading LIKE '%".$request."%'
or Source LIKE '%".$request."%'
or Date LIKE '%".$request."%'";
mysqli_set_charset($connect, 'UTF8');
$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result)>0){

  $output .= '<div calss = "table-responsive">
  <table class="table table-stripped table-hover">
    <thead>
        <tr>
            <th> ID </th>
            <th> Heading </th>
            <th> Source </th>
            <th> Date </th>
            <th> Edit </th>
            <th> Delete </th>
        </tr>
    </thead>';

  while($row = mysqli_fetch_array($result)){

               $output .='<tr> 
                    <td>' .$row["News_ID"]. '</td> 
                    <td>' .$row["Heading"]. '</td>  
                    <td>' .$row["Source"]. '</td> 
                    <td>' .$row["Date"]. '</td>  
                    <td> <a href="" class = "edit-news" id = "' .$row["News_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> Edit </a> </td>
                    <td> <a href="" class = "delete-news" id = "' .$row["News_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-times"></i> Delete </a> </td>

               </tr>';
}
    $output .='</table>';
    $output .='</div>';
  echo $output;

}
else{
  echo '<div class="alert alert-danger" role="alert"> Sorry!... No News record Found</div>';
}

?>