<?php 

$output = '';

$connect = mysqli_connect("localhost", "root", "", "Change");
$request = mysqli_real_escape_string($connect, $_POST['search']);
    
$sql = "SELECT * FROM Result WHERE Username LIKE '%".$request."%'
or Full_Name LIKE '%".$request."%'
or Book LIKE '%".$request."%'
or Subject LIKE '%".$request."%'";

mysqli_set_charset($connect, 'UTF8');
$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result)>0){

  $output .='
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th> No </th>
                    <th> Username </th>
                    <th> Name </th>
                    <th> Book </th>
                    <th> Subject </th>
                    <th> Ttl Qustn </th>
                    <th> Corct Ans </th>
                    <th> Wrng Ans </th>
                    <th> No Ans </th>
                    <th> Result </th>
                    <th> Delete </th>
                </tr>
            </thead>
        ';  
        $i=1;
        while($row = mysqli_fetch_array($result)){

                $output .='
                 <tr>
                    <td>' .$i. '</td>
                    <td>' .$row["Username"]. '</td> 
                    <td>' .$row["Full_Name"]. '</td>
                    <td>' .$row["Book"]. '</td> 
                    <td>' .$row["Subject"]. '</td>
                    <td>' .$row["Total_Question"]. '</td>                    
                    <td>' .$row["Attempted_Answer"]. '</td>
                    <td>' .$row["Correct_Answer"]. '</td>
                    <td>' .$row["Wrong_Answer"]. '</td>                    
                    <td>' .$row["No_Answer"]. '</td>
                    <td>' .$row["Result"]. '</td>
                    <td style = "width: 7%;" > <a href="" class = "delete-result" id = "' .$row["Result_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete Result"> <i class = "fa fa-times"></i> Delete </a> </td>
                </tr>
                 ';  
            $i++;
    }
    $output .='</table>';
    $output .='</div>';
  echo $output;

}
else{
  echo '<div class="alert alert-danger" role="alert"> Sorry!... No Result Found</div>';
}

?>