<?php
class Method{

	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function getUsersByUsername($Username){
		$query = "SELECT * from Users where Username = '$Username'";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	public function getTotalReading(){
    
        $output = '';
        $query = "SELECT * FROM Reading";
        $getResult = $this->db->select($query);
        $total = $getResult->num_rows;
        
        if(!$getResult){
            return "0";

        }else{
            $total =$getResult->num_rows;
            return $total;
        }

    }

    public function getTotalGrammer(){
        $output = '';
        $query = "SELECT * FROM Grammer";
        $getResult = $this->db->select($query);
        $total = $getResult->num_rows;
        
        if(!$getResult){
            return "0";

        }else{
            $total =$getResult->num_rows;
            return $total;
        }

    }

    public function getTotalListening(){
        $output = '';
        $query = "SELECT * FROM Audio";
        $getResult = $this->db->select($query);
        $total = $getResult->num_rows;
        
        if(!$getResult){
            return "0";

        }else{
            $total =$getResult->num_rows;
            return $total;
        }

    }

    public function getTotalVocabulary(){
        $output = '';
        $query = "SELECT * FROM Vocabulary";
        $getResult = $this->db->select($query);
        $total = $getResult->num_rows;
        
        if(!$getResult){
            return "0";

        }else{
            $total =$getResult->num_rows;
            return $total;
        }

    }

	public function getTotalNews(){
		$query = "SELECT * from News";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getResult = $this->db->select($query);
		
		if(!$getResult){

			return "0";
		}else{
			$total =$getResult->num_rows;
			return $total;
		}
		
	}

	/* SELECT TOTAL NUMBER OF ROWS FROM DATABASE FOR TEACHER TABLE   */
	public function getTotalResearch(){
		$query = "select * from Research";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getResult = $this->db->select($query);
		if(!$getResult){
			return "0";
		}
		else{
			$total =$getResult->num_rows;
		return $total;
		}
		
	}
	
	public function getTotalStudent(){
		$query = "select * from Student";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getResult = $this->db->select($query);
		if(!$getResult){
			return "0";
		}
		else{
			$total =$getResult->num_rows;
		return $total;
		}
		
	}
	
	public function getTotalUser(){
		$query = "select * from Users";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getResult = $this->db->select($query);
		if(!$getResult){
			return "0";
		}
		else{
			$total =$getResult->num_rows;
		return $total;
		}
		
	}
	
	public function getNewsByID($News_ID){
		$query = "select * from Viw_News where News_ID = '$News_ID'";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}

	/* SELECT SINGLE ROW FROM DATABASE FOR USERS TABLE BY USER_ID  */
	public function getRole(){
		$query = "SELECT * from Role";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	public function getTotalContactByStatus(){
		$query = "SELECT * from Contact_Us where Status = '1'";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getResult = $this->db->select($query);
		$total =$getResult->num_rows;
		return $total;
	}
	public function getContactUs(){
		$query = "select * from Contact_Us";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	public function getContactUsByID($Contact_ID){
		$query = "select * from Contact_Us where User_ID = '$Contact_ID'";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL ROWS FROM VIEW QUESTION  */
	public function getNews(){
		$query = "SELECT * from News ORDER BY News_ID DESC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL ROWS FROM VIEW QUESTION  */
	public function getBook(){
		$query = "SELECT * from Book";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL ROWS FROM USERS TABLE  */
	public function getAdminUsers(){
		$query = "SELECT * from Users WHERE Role_ID = '1'";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
}
?>