<?php
// insert.php
$connect = mysqli_connect("localhost", "root", "", "News_Portal");
if(!empty($_POST)){
    $output = '';
    $Username = mysqli_real_escape_string($connect, $_POST["Username"]);
    $Email = mysqli_real_escape_string($connect, $_POST["Email"]);
    $Gender = mysqli_real_escape_string($connect, $_POST["Gender"]);
    $Phone_No = mysqli_real_escape_string($connect, $_POST["Phone_No"]);

    $query = "INSERT INTO Users (Username, Email, Gender, Phone_No)VALUES('$Username', '$Email', '$Gender', '$Phone_No')";

    if(mysqli_query($connect, $query)){
        $output .= 'lablel class = "text-success">Data Inserted Successfully</label>';
        $select_query = "SELECT * FROM Users order by User_ID desc";
        $result = mysqli_query($connect, $select_query);
        $output .='<tble class = "table table-bordered">
            <tr> 
                <th> Username </th> 
                <th> Views </th>
            </tr>
        ';
        while($row = mysqli_fetch_array($result)){
            $output .='
            <tr>
                <td>'. $row["Username"] . '</td>
                <td> <input type = "button" name = "view" value = "view" id = "' . $row["User_ID"] . '" class = "tn btn-info view_data" /></td>
                
            </tr>
            ';
        }
        $output .= '</table>';
    }
    echo $output;
}
?>