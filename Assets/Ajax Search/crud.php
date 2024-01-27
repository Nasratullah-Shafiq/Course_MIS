<?php
class crud{
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
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
				<th width = "10%"> Phone No </th>
				<th width = "10%"> Image </th>
				<th width = "10%"> Refresh </th>
			</tr>
		';
		while($row = mysqli_fetch_object($result)){
			$Afg_img = $row->Image;
			$output .='
				<tr>
				
				<td> '.$row->User_ID.' </td>
				<td> '.$row->Username.' </td>
				<td> '.$row->Password.' </td>
				<td> '.$row->Email.' </td>
				<td> '.$row->Phone_No.' </td>
				<td> <a href = "#" id = "img"> <img class="img-circle" width="70px;" height = "70px" src="./Assets/img/_Profile_Picture/' .$row->Image. '" style = "margin-top: -5px; margin-bottom: -5px;" />  </a> </td>
				<td = "refresh"> <button type="button" id = "refresh" class = "button-start-the-quiz"name="btnStartTheQuiz" class="signin"> Refresh </button> </td>
				</tr>
			';
	}
	$output .='</table>';
	return $output;
}
public function upload_file($file){
	if(isset($file)){
		$extention = explode('.', $file["name"]);
		$new_name = rand() . '.' .$extention[1];
		$destination = 'Assets/img/_Profile_Picture/'. $new_name;
		move_uploaded_file($file['tmp_name'], $destination);
		return $new_name;

	}
}

}

?>