<?php 

$output = '';

$connect = mysqli_connect("localhost", "root", "", "Change");
$request = mysqli_real_escape_string($connect, $_POST['search']);
    
$sql = "SELECT * FROM Viw_Student WHERE St_ID LIKE '%".$request."%'
or Full_Name LIKE '%".$request."%'
or Father_Name LIKE '%".$request."%'
or Book_Name LIKE '%".$request."%'";

mysqli_set_charset($connect, 'UTF8');
$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result)>0){

  $output .= '<div calss = "table-responsive">
  <table class="table table-stripped table-hover">
    <thead>
        <tr>
            <th> No </th>
            <th> Student ID </th>
            <th> Name </th>
            <th> Father Name </th>
            <th> Phone No </th>
            <th> Book </th>
            <th> Edit </th>
            <th> Delete </th>
        </tr>
    </thead>';

  while($row = mysqli_fetch_array($result)){
  	$i=1;
  	$output .='
                 <tr>
                    <td>' .$i. '</td>
                    <td>' .$row["St_ID"]. '</td> 
                    <td>' .$row["Full_Name"]. '</td>
                    <td>' .$row["Father_Name"]. '</td>
                    <td>' .$row["Phone_No"]. '</td>
                    <td>' .$row["Book_Name"]. '</td>                    
                    
                    <td style = "width: 6%;"> <a href="" class = "edit-student" id = "' .$row["Student_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> Edit </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-student" id = "' .$row["Student_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-times"></i> Delete </a> </td>
                 </tr>
                 ';
            $i++;
}
    $output .='</table>';
    $output .='</div>';
  echo $output;

}
else{
  echo '<div class="alert alert-danger" role="alert"> Sorry!... No Students Data Found</div>';
}

?>