<?php 

$output = '';

$connect = mysqli_connect("localhost", "root", "", "change");
$request = mysqli_real_escape_string($connect, $_POST['search']);
    
$sql = "SELECT * FROM Viw_Users WHERE Full_Name LIKE '%".$request."%' 
or Username LIKE '%".$request."%'
or Email LIKE '%".$request."%'
or Gender LIKE '%".$request."%'";
mysqli_set_charset($connect, 'UTF8');
$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result)>0){

  $output .='
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th> ID No </th>
                    <th> Name </th>
                    <th> Username </th>
                    <th> Email </th>
                    <th> Gender </th>
                    <th> Phone_No </th>
                    <th> Image </th>
                    <th> Role </th>
                    <th> Action </th>
                    <th> Edt </th>
                    <th> Dlt </th>
                </tr>
            </thead>
        '; 
        $i=1;
        while($row = mysqli_fetch_array($result)){

            if($row['Status']=="Pending"){
               $output .='<tr> 
                    <td style = "color: #D05454;">'.'<i class = "fa fa-lock"></i> ' .$i. '</td> 
                    <td style = "color: #D05454;">' .$row["Heading"]. '</td> 
                    <td style = "color: #D05454;">' .$row["Source"]. '</td>
                    <td style = "color: #D05454;">' .$row["Date"]. '</td> 
                    <td style = "color: #D05454;">' .$row["Visits"]. '</td> 
                    <td style = "color: #D05454;">' .$row["Status"]. '</td>
                    <td> <a href="'.$pendglink.'" style="color: #32C5D2;"  data-toggle="tooltip" data-placement="top" title="This News is Pending Change Status To Publish?"> Publish </a> </td>
                    <td> <a href="'.$edtlink.'" style="color: #32C5D2;"  data-toggle="tooltip" data-placement="top" title="Edit News"> <i class = "fa fa-pencil"></i> Edit</a></td>
                    <td> <a href="'.$dltlink.'" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-times"></i> Delete </a> </td>

               </tr>';
            }
            else{
                
                $output .='
                 <tr>
                    <td>' .$i. '</td>
                    <td><img class="img-circle" width="30px;" height = "30px" src=".././Assets/img/_Profile_Picture/' .$row["Image"]. '" style = "margin-top: -5px; margin-bottom: -5px;" />  </td>
                    <td>' .$row["Full_Name"]. '</td> 
                    <td>' .$row["Username"]. '</td>
                    <td>' .$row["Email"]. '</td>
                    <td>' .$row["Gender"]. '</td>
                    <td>' .$row["Phone_No"]. '</td>
                    <td>' .$row["Role"]. '</td>
                    
                    <td> <a href="" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="This User is Published Change Status to Pending?"> Pending </a> </td>
                    <td> <a href="" class = "edit-user" id = "' .$row["User_ID"]. '" style="color: #32C5D2;" data-toggle="tooltip" data-placement="top" title="Edit User"> <i class = "fa fa-pencil"></i> Edit </a> </td>
                    <td> <a href="" class = "delete-user" id = "' .$row["User_ID"]. '" style="color: #D05454;"  data-toggle="tooltip" data-placement="top" title="Delete News"> <i class = "fa fa-times"></i> Delete </a> </td>

                 </tr>
                 ';
            }$i++;
    }
    $output .='</table>';
    echo $output;
}
else{
  echo '<div class="alert alert-danger" role="alert"> Sorry!... No Users record Found</div>';
}

?>