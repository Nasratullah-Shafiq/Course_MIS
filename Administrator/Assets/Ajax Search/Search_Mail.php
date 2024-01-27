<?php 

$output = '';

$connect = mysqli_connect("localhost", "root", "", "Change");
$request = mysqli_real_escape_string($connect, $_POST['search']);
    
$sql = "SELECT * FROM Contact_Us WHERE Full_Name LIKE '%".$request."%'
or Email LIKE '%".$request."%'
or Phone_No LIKE '%".$request."%'";

mysqli_set_charset($connect, 'UTF8');
$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result)>0){

  $output .= '<div calss = "table-responsive">
  <table class="table table-stripped table-hover">
    <thead>
        <tr>
            <th> ID </th>
            <th> Full Name </th>
            <th> Email </th>
            <th> Phone_No </th>
            <th> Date </th>
            <th> View Mail</th>
            <th> Delete </th>
        </tr>
    </thead>';

  while($row = mysqli_fetch_array($result)){
              $i=1;
               $output .='<tr> 
                    <td>' .$i. '</td> 
                    <td>' .$row["Full_Name"]. '</td>  
                    <td>' .$row["Email"]. '</td> 
                    <td>' .$row["Phone_No"]. '</td> 
                    <td>' .$row["Date"]. '</td>
                    <td style = "width: 10%;"> <a href="" class = "view-mail-data" id = "' .$row["Contact_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="View Mail"> <i class = "fa fa-eye"></i> View Mail </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-mail" id = "' .$row["Contact_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete Data"> <i class = "fa fa-times"></i> Delete </a> </td>
                 
               </tr>';
}
    $output .='</table>';
    $output .='</div>';
  echo $output;

}
else{
  echo '<div class="alert alert-danger" role="alert"> Sorry!... No Mail Data Found</div>';
}

?>