<?php 

$output = '';

$connect = mysqli_connect("localhost", "root", "", "Change");
$request = mysqli_real_escape_string($connect, $_POST['search']);
    
$sql = "SELECT * FROM Viw_Audio WHERE Description LIKE '%".$request."%'
or Book_Name LIKE '%".$request."%'";

mysqli_set_charset($connect, 'UTF8');
$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result)>0){

  $output .= '<div calss = "table-responsive">
        <table class="table table-stripped table-hover">
            <thead>
               <tr>
                    <th> ID No </th>
                    <th> Listening </th>
                    <th> Description </th>
                    <th> Book </th>
                    <th> View </th>
                    <th> Status </th>
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
                    <td><audio src=".././Assets/Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2"  controls > </audio> </td>
                    <td>' .$row["Description"]. '</td>
                    <td>' .$row["Book_Name"]. '</td>
                    <td>' .$row["Status"]. '</td>                    
                    <td> <a href="" class = "Publish-Link" id = "' .$row["Audio_ID"]. '"style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="This News is Published Change Status to Pending?"> Pending </a> </td>
                    <td style = "width: 6%;"> <a href="" class = "edit-audio" id = "' .$row["Audio_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> Edit </a></td>
                    <td style = "width: 7%;" > <a href="" class = "delete-audio" id = "' .$row["Audio_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-times"></i> Delete </a> </td>
                 </tr>
                 ';
            $i++;;
    }
    $output .='</table>';
    $output .='</div>';
  echo $output;

}
else{
  echo '<div class="alert alert-danger" role="alert"> Sorry!... No Audio Found</div>';
}

?>