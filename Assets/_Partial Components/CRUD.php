<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath.'./Database.php');
include_once($filepath.'./Format.php');
class CRUD{

	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
/*============================================================================================================================================
	START OF ALL SELECT FUNCTION (SELECT FUNCTIONS FETCH DATA FROM DATABASE AND SHWO IN WEBPAGE)
============================================================================================================================================*/
	public function get_comment_data_in_table($News_ID){
	// public function get_data_in_table(){
		$output = '';
		$query = "SELECT * FROM Comment where News_ID = '$News_ID'";
		$getResult = $this->db->select($query);
		$total = $getResult->num_rows;
		
		if(!$getResult){
			return "0";

		}else{
			$total =$getResult->num_rows;
			return $total;
		}
	}


	public function get_data_in_table(){
		$output = '';
		$query = "SELECT * FROM Users order by User_ID desc";
		$result = $this->db->select($query);
		$output .='
		<table class = "table table-bordered table-stripped">
			<tr>
				<th width = "10%"> User ID </th>
				<th width = "10%"> Uername </th>
				<th width = "10%"> Password </th>
				<th width = "10%"> Email </th>
				<th width = "10%"> Gender </th>
				<th width = "10%"> Phone No </th>
				<th width = "10%"> Role </th>
				<th width = "10%"> View </th>
				<th width = "10%"> Edit </th>
				<th width = "10%"> Delete </th>
				<th width = "10%"> Image </th>
			</tr>
		';
		while($row = mysqli_fetch_array($result)){
			
			$output .='
				<tr>
				<td> '.$row["Full_Name"].' </td>
				<td> '.$row["Username"].' </td>
				<td> '.$row["Password"].' </td>
				<td> '.$row["Email"].' </td>
				<td> '.$row["Gender"].' </td>
				<td> '.$row["Phone_No"].' </td>
				<td> '.$row["Role_ID"].' </td>
				<td> <input type = "button" name = "sme"  value ="View"  id = "'. $row["User_ID"] .'" class = "btn btn-info view_data" ></td>
				<td> <input type = "button" name = "edit" value = "Edit" id = "'. $row["User_ID"] .'" class = "btn btn-info edit_data" ></td>
				<td> <input type = "button" name = "remove-file" value = "Delete" id = "'. $row["User_ID"] .'" class = "btn btn-danger remove-file" ></td>
				<td><img class="img-circle" width="70px;" height = "70px" src="./Assets/img/_Profile_Picture/' .$row["Image"]. '" style = "margin-top: -5px; margin-bottom: -5px;" />  </td>
				</tr>
			';
	}
	$output .='</table>';
	return $output;
}

	public function get_users_in_table(){
		$output = '';
		$query = "SELECT * FROM Users order by User_ID desc";
		$result = $this->db->select($query);
		$output .='<table class = "table table-bordered">
            <tr> 
                <th> Username </th>
                <th> Username </th> 
                <th> Views </th>
            </tr>
        ';
        while($row = mysqli_fetch_array($result)){
            $output .='
            <tr>
                <td>'. $row["Username"] . '</td>
                <td> <input type = "button" name = "view" value = "view" id = "' . $row["User_ID"] . '" class = "btn btn-info view_data" ></td>
                <td> <input type = "button" name = "edit" value = "Edit" id = "' . $row["User_ID"] . '" class = "btn btn-info edit_data" ></td>
            </tr>
            ';
        }
        $output .= '</table>';
        return $output;
    }
	

// id = "' . $row->User_ID . '"
/*======================================================================================================================================
	END OF ALL SELECT FUNCTION
=======================================================================================================================================*/
/*=======================================================================================================================================
 START OF ADD USERS METHOD, YOU CAN ADD USERS TO THE DATABASE
=======================================================================================================================================*/
public function addContact($Full_Name, $Email, $Phone_No, $Message){
	$Full_Name = $this->fm->validation($Full_Name);
	$Email = $this->fm->validation($Email);
	$Phone_No = $this->fm->validation($Phone_No);
	$Message = $this->fm->validation($Message);
	
	
	
	$Full_Name = mysqli_real_escape_string($this->db->link, $Full_Name);
	$Email  = mysqli_real_escape_string($this->db->link, $Email);
	$Phone_No = mysqli_real_escape_string($this->db->link, $Phone_No);
	$Message = mysqli_real_escape_string($this->db->link, $Message);

	mysqli_set_charset($this->db->link, 'UTF8');

	if($Full_Name == "" || $Email == "" || $Phone_No == "" || $Message == ""){
		echo "<span class ='error'> Please fill out All Field ! </span>";
		exit();
	}
	else if(filter_var($Email, FILTER_VALIDATE_EMAIL) === false){
		echo "<span class = 'error'> Invalid e-mail Address!</span>";
		exit();
	}
	else{
			$query = "insert into contact_us(Full_Name, Email, Phone_No, Message, Status) values('$Full_Name', '$Email', '$Phone_No', '$Message','1')";
			$inserted_row = $this->db->insert($query);
			if($inserted_row){
				echo "<span class = 'success'> Message Sent Successfully !</span>";
				exit();
			}
			else{
				echo "<span class = 'error'> Error: Message Sent Failed !</span>";
				exit();
			}
	}
}

public function addUsers($Full_Name, $Username, $Password, $Email, $Gender, $Phone_No, $Image){
		$Full_Name = $this->fm->validation($Full_Name);
		$Username = $this->fm->validation($Username);
		$Password = $this->fm->validation($Password);
		$Email = $this->fm->validation($Email);
		$Gender = $this->fm->validation($Gender);
		$Phone_No = $this->fm->validation($Phone_No);
		// $image = $this->fm->validation($image);

		$Full_Name = mysqli_real_escape_string($this->db->link, $Full_Name);
		$Username = mysqli_real_escape_string($this->db->link, $Username);
		$Password = mysqli_real_escape_string($this->db->link, md5($Password));
		$Email = mysqli_real_escape_string($this->db->link, $Email);
		$Gender = mysqli_real_escape_string($this->db->link, $Gender);
		$Phone_No = mysqli_real_escape_string($this->db->link, $Phone_No);
	// $image = mysqli_real_escape_string($this->db->link, $image);
		$query = "
    	insert into Users
    		(Full_Name, Username, Password, Email, Language, Gender, Phone_No, Image, Role_ID, Status)
    		values('".$Full_Name."', '".$Username."', '".$Password."', '".$Email."', 'English', '".$Gender."', '".$Phone_No."', '".$Image."', '2', '1')
    	";
    	// $crd->execute_query($query);
			$inserted_row = $this->db->insert($query);
			if($inserted_row){
				echo "<span class = 'success'> Registration Successfully !</span>";
				
				exit();
			}
			else{
				echo "<span class = 'error'> Error: Not Registered !</span>";
				exit();
			}
}
			
public function	addResult($Username, $Full_Name, $Book, $Subject, $TotalNumberOfQuestion, $Attempted_Answer, $Correct_Answer, $Wrong_Answer, $No_Answer, $Result){
		
		$Username = $this->fm->validation($Username);
		$Full_Name = $this->fm->validation($Full_Name);
		$Book = $this->fm->validation($Book);
		$Subject = $this->fm->validation($Subject);
		$TotalNumberOfQuestion = $this->fm->validation($TotalNumberOfQuestion);
		$Attempted_Answer = $this->fm->validation($Attempted_Answer);
		$Correct_Answer = $this->fm->validation($Correct_Answer);
		$Wrong_Answer = $this->fm->validation($Wrong_Answer);
		$No_Answer = $this->fm->validation($No_Answer);
		$Result = $this->fm->validation($Result);

		$Username = mysqli_real_escape_string($this->db->link, $Username);
		$Full_Name = mysqli_real_escape_string($this->db->link, $Full_Name);
		$Book = mysqli_real_escape_string($this->db->link, $Book);
		$Subject = mysqli_real_escape_string($this->db->link, $Subject);
		$TotalNumberOfQuestion = mysqli_real_escape_string($this->db->link, $TotalNumberOfQuestion);
		$Attempted_Answer = mysqli_real_escape_string($this->db->link, $Attempted_Answer);
		$Correct_Answer = mysqli_real_escape_string($this->db->link, $Correct_Answer);
		$Wrong_Answer = mysqli_real_escape_string($this->db->link, $Wrong_Answer);
		$No_Answer = mysqli_real_escape_string($this->db->link, $No_Answer);
		$Result = mysqli_real_escape_string($this->db->link, $Result);

		$query = "
    	insert into Result
    		(Username, Full_Name, Book, Subject, Total_Question, Attempted_Answer, Correct_Answer, Wrong_Answer, No_Answer, Result)
    		values('".$Username."', '".$Full_Name."', '".$Book."', '".$Subject."', '".$TotalNumberOfQuestion."', '".$Attempted_Answer."', '".$Correct_Answer."', '".$Wrong_Answer."', '".$No_Answer."', '".$Result."')
    	";

    	// $query = "
    	// insert into Result
    	// 	(Username, Full_Name, Book, Subject, Total_Question, Attempted_Answer, Correct_Answer, Wrong_Answer, No_Answer, Result)
    	// 	values('Username', 'Full_Name', 'Book', 'Subject', 'TotalNumberOfQuestion', 'Attempted_Answer', 'Correct_Answer', 'Wrong_Answer', 'No_Answer', 'Result')
    	// ";
			$inserted_row = $this->db->insert($query);
			if($inserted_row){
				echo "<span class = 'success'> Registration Successfully !</span>";
				
				exit();
			}
			else{
				echo "<span class = 'error'> Error: Not Registered !</span>";
				exit();
			}
}
//=======================================================================================================================================
// END OF ADD USERS METHOD 
//=======================================================================================================================================

public function updateProfile($User_ID, $Full_Name, $Email, $Gender, $Phone_No){
    
    $User_ID = $this->fm->validation($User_ID);
    $Full_Name = $this->fm->validation($Full_Name);
    $Email = $this->fm->validation($Email);
    $Gender = $this->fm->validation($Gender);
    $Phone_No = $this->fm->validation($Phone_No);

    $User_ID = mysqli_real_escape_string($this->db->link, $User_ID);
    $Full_Name = mysqli_real_escape_string($this->db->link, $Full_Name);
    $Email = mysqli_real_escape_string($this->db->link, $Email);
    $Gender = mysqli_real_escape_string($this->db->link, $Gender);
    $Phone_No = mysqli_real_escape_string($this->db->link, $Phone_No);
    
    mysqli_set_charset($this->db->link, 'UTF8');
    if ($Full_Name == "" || $Email == "" || $Gender == "" || $Phone_No == "") {
        echo "<span class ='error'> Please fill out all fields ! </span>";
        exit();
    }

    else{
            $query = "UPDATE `Users` SET `Full_Name` = '$Full_Name', `Email` = '$Email', `Gender` = '$Gender', `Phone_No` = '$Phone_No' WHERE `Users`.`User_ID` = '$User_ID'";
            $update_row = $this->db->update($query);
            if($update_row){
                echo "<span class = 'success'> Updation Successfull !</span>";
                exit();
            }
            else{
                echo "<span class = 'error'> Error: News Details Not Updated !</span>";
                exit();
            }
        }
    }

public function updatePassword($User_ID, $Password){
    
    $User_ID = $this->fm->validation($User_ID);
    $Password = $this->fm->validation($Password);

    $User_ID = mysqli_real_escape_string($this->db->link, $User_ID);
    
    
    mysqli_set_charset($this->db->link, 'UTF8');
    if ($User_ID == "" || $Password == "") {
        echo "<span class ='error'> Please fill out all fields ! </span>";
        exit();
    }

    else{
    	$Password = mysqli_real_escape_string($this->db->link, md5($Password));
        $query = "UPDATE `Users` SET `Password` = '$Password' WHERE `Users`.`User_ID` = '$User_ID'";
        $update_row = $this->db->update($query);
            if($update_row){
                echo "<span class = 'success'> Password Updated !</span>";
                exit();
            }
            else{
                echo "<span class = 'error'> Error: Not Updated !</span>";
                exit();
            }
        }
    }

public function upload_file($file){
	if(isset($file)){
		$Extention = explode('.', $file["name"]);
		$new_name = rand() . '.' .$Extention[1];
		$Destination = './../img/_Profile_Picture/'. $new_name;
		move_uploaded_file($file['tmp_name'], $Destination);
		return $new_name;

	}
}

}

?>