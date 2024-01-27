<?php 

$output = '';

$connect = mysqli_connect("localhost", "root", "", "Change");
$request = mysqli_real_escape_string($connect, $_POST['search']);
    
$sql = "SELECT * FROM Research WHERE Heading LIKE '%".$request."%'
or User LIKE '%".$request."%'";

mysqli_set_charset($connect, 'UTF8');
$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result)>0){

  $output .= '<div calss = "table-responsive">
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th> ID No </th>
                    <th> Heading </th>
                    <th> Body </th>
                    <th> File </th>
                    <th> User </th>
                    <th> Edit </th>
                    <th> Delete </th>
                </tr>
            </thead>
        '; 
        $i=1;
        while($row = mysqli_fetch_array($result)){

                $output .='
                 <tr>
                    <td>' .$i. '</td>
                    <td>' .$row["Heading"]. '</td> 
                    <td>' .$row["Body"]. '</td>
                    <td>' .$row["File"]. '</td>
                    <td>' .$row["User"]. '</td>                    
                    <td style = "width: 6%;"> <a href="" class = "edit-research" id = "' .$row["Research_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> Edit </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-research" id = "' .$row["Research_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-times"></i> Delete </a> </td>
                 </tr>
                 ';
            $i++;
    }
    $output .='</table>';
    $output .='</div>';
  echo $output;

}
else{
  echo '<div class="alert alert-danger" role="alert"> Sorry!... No Research Data Found</div>';
}

?>