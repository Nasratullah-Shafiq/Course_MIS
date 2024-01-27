<?php
class Listening{
	public $host = "localhost";
	public $username = "root";
	public $pass = "";
	public $db_name = "Change";
	public $conn;
	public $data;
	public $subject;
	public $qus;

public function __construct(){
	$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
	if($this->conn->connect_errno){
		die("Database Connection Failed".$this->conn->connect_errno);
	}
}
public function answer(){
		
		$right = 0;
		$wrong = 0;
		$no_answer = 0;
		$query = $this->conn->query("SELECT Audio_ID,Right_Answer from Audio where Book_ID ='".$_GET['id']."' order by Audio_ID DESC");
		mysqli_set_charset($this->conn, 'UTF8');
		
	$questions = $_POST['question'];

 if (isset($questions)) {
	while($qust=$query->fetch_array(MYSQLI_ASSOC)){ 
		foreach ($questions as $id => $question) { 
			if ($qust['Audio_ID'] == $id) { 
				if($qust['Right_Answer'] == $question)
				{ 
					$right++;
				}
				else if($question == 'No_Attempt')
				{
				 $no_answer++;					
				}
				else {
						$wrong++;
				}
			} 
		}
	}
		$array = array();
		$array['right']=$right;
		$array['wrong']=$wrong;
		$array['no_answer']=$no_answer;
		return $array;		
	}
	else{
		echo "";
	}


}
 
 }
