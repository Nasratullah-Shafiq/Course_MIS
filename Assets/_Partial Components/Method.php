<?php
class Method{

	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
/* FUNCTION FOR SHOWING TOTAL QUESTION OF SPECIFIC SUBJECT */

	public function getTotalComment($News_ID){
		$query = "SELECT * from Comment where News_ID = '$News_ID'";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getResult = $this->db->select($query);
		
		if(!$getResult){
			return "0";

		}else{
			$total =$getResult->num_rows;
			return $total;
		}
		
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getStartUpReadingAudio(){
		$query = "SELECT * from reading_audio where Book = 'Start-Up' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getOpenUpReadingAudio(){
		$query = "SELECT * from reading_audio where Book = 'Open-Up' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getWarmUpReadingAudio(){
		$query = "SELECT * from reading_audio where Book = 'Warm-Up' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRunUpReadingAudio(){
		$query = "SELECT * from reading_audio where Book = 'Run-Up' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundOneReadingAudio(){
		$query = "SELECT * from reading_audio where Book = 'Round-One' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundTowReadingAudio(){
		$query = "SELECT * from reading_audio where Book = 'Round-Tow' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundThreeReadingAudio(){
		$query = "SELECT * from reading_audio where Book = 'Round-Three' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	 // SELECT ALL LISTENING FROM  START UP Book TABLE   
	public function getRoundFourReadingAudio(){
		$query = "SELECT * from reading_audio where Book = 'Round-Four' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundFiveReadingAudio(){
		$query = "SELECT * from reading_audio where Book = 'Round-Five' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundSixReadingAudio(){
		$query = "SELECT * from reading_audio where Book = 'Round-Six' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getPoineerReadingAudio(){
		$query = "SELECT * from reading_audio where Book = 'Poineer' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getPoineerPlusReadingAudio(){
		$query = "SELECT * from reading_audio where Book = 'Poineer-Plus' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getStartUpListening(){
		$query = "SELECT * from listening_audio where Book = 'Start-Up' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getOpenUpListening(){
		$query = "SELECT * from listening_audio where Book = 'Open-Up' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  WARM UP Book TABLE  */ 
	public function getWarmUpListening(){
		$query = "SELECT * from listening_audio where Book = 'Warm-Up' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRunUpListening(){
		$query = "SELECT * from listening_audio where Book = 'Run-Up' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundOneListening(){
		$query = "SELECT * from listening_audio where Book = 'Round-One' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}






	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundOneListeningUnitOne(){
		$query = "SELECT * from listening_audio where Book = 'Round-One' AND Unit = 'Unit 1'";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}

public function getRoundOneListeningUnitTwo(){
		$query = "SELECT * from listening_audio where Book = 'Round-One' AND Unit = 'Unit 2'";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	public function getRoundOneListeningUnitThree(){
		$query = "SELECT * from listening_audio where Book = 'Round-One' AND Unit = 'Unit 3'";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	public function getRoundOneListeningUnitFour(){
		$query = "SELECT * from listening_audio where Book = 'Round-One' AND Unit = 'Unit 4'";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	public function getRoundOneListeningUnitFive(){
		$query = "SELECT * from listening_audio where Book = 'Round-One' AND Unit = 'Unit 5'";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	public function getRoundOneListeningUnitSix(){
		$query = "SELECT * from listening_audio where Book = 'Round-One' AND Unit = 'Unit 6'";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	public function getRoundOneListeningUnitSeven(){
		$query = "SELECT * from listening_audio where Book = 'Round-One' AND Unit = 'Unit 7'";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	public function getRoundOneListeningUnitEight(){
		$query = "SELECT * from listening_audio where Book = 'Round-One' AND Unit = 'Unit 8'";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}








	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundTowListening(){
		$query = "SELECT * from listening_audio where Book = 'Round-Tow' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundThreeListening(){
		$query = "SELECT * from listening_audio where Book = 'Round-Three' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundFourListening(){
		$query = "SELECT * from listening_audio where Book = 'Round-Four' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundFiveListening(){
		$query = "SELECT * from listening_audio where Book = 'Round-Five' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundSixListening(){
		$query = "SELECT * from listening_audio where Book = 'Round-Six' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getPoineerListening(){
		$query = "SELECT * from listening_audio where Book = 'Poineer' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getPoineerPlusListening(){
		$query = "SELECT * from listening_audio where Book = 'Poineer-Plus' ORDER BY Unit ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getStartUpVocabularyAudio(){
		$query = "SELECT * from vocabulary_audio where Book = 'Start-Up' ORDER BY Day ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getOpenUpVocabularyAudio(){
		$query = "SELECT * from vocabulary_audio where Book = 'Open-Up' ORDER BY Day ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getWarmUpVocabularyAudio(){
		$query = "SELECT * from vocabulary_audio where Book = 'Warm-Up' ORDER BY Day ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRunUpVocabularyAudio(){
		$query = "SELECT * from vocabulary_audio where Book = 'Run-Up' ORDER BY Day ASC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundOneVocabularyAudio(){
		$query = "SELECT * from vocabulary_audio where Book = 'Round-One' ORDER BY Day";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundTowVocabularyAudio(){
		$query = "SELECT * from vocabulary_audio where Book = 'Round-Tow' ORDER BY Day";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundThreeVocabularyAudio(){
		$query = "SELECT * from vocabulary_audio where Book = 'Round-Three' ORDER BY Day";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundFourVocabularyAudio(){
		$query = "SELECT * from vocabulary_audio where Book = 'Round-Four' ORDER BY Day";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundFiveVocabularyAudio(){
		$query = "SELECT * from vocabulary_audio where Book = 'Round-Five' ORDER BY Day";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  Round-Six Book TABLE  */ 
	public function getRoundSixVocabularyAudio(){
		$query = "SELECT * from vocabulary_audio where Book = 'Round-Six' ORDER BY Day";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  Poineer Book TABLE  */ 
	public function getPoineerVocabularyAudio(){
		$query = "SELECT * from vocabulary_audio where Book = 'Poineer' ORDER BY Day";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  Poineer-Plus UP Book TABLE  */ 
	public function getPoineerPlusVocabularyAudio(){
		$query = "SELECT * from vocabulary_audio where Book = 'Poineer-Plus' ORDER BY Day";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getStartUpConversationAudio(){
		$query = "SELECT * from conversation_audio where Book = 'Start-Up' ORDER BY Unit";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getOpenUpConversationAudio(){
		$query = "SELECT * from conversation_audio where Book = 'Open-Up' ORDER BY Unit";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getWarmUpConversationAudio(){
		$query = "SELECT * from conversation_audio where Book = 'Warm-Up' ORDER BY Unit";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRunUpConversationAudio(){
		$query = "SELECT * from conversation_audio where Book = 'Run-Up' ORDER BY Unit";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundOneConversationAudio(){
		$query = "SELECT * from conversation_audio where Book = 'Round-One' ORDER BY Unit";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundTowConversationAudio(){
		$query = "SELECT * from conversation_audio where Book = 'Round-Tow' ORDER BY Unit";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundThreeConversationAudio(){
		$query = "SELECT * from conversation_audio where Book = 'Round-Three' ORDER BY Unit";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundFourConversationAudio(){
		$query = "SELECT * from conversation_audio where Book = 'Round-Four' ORDER BY Unit";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  START UP Book TABLE  */ 
	public function getRoundFiveConversationAudio(){
		$query = "SELECT * from conversation_audio where Book = 'Round-Five' ORDER BY Unit";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  Round-Six Book TABLE  */ 
	public function getRoundSixConversationAudio(){
		$query = "SELECT * from conversation_audio where Book = 'Round-Six' ORDER BY Unit";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  Poineer Book TABLE  */ 
	public function getPoineerConversationAudio(){
		$query = "SELECT * from conversation_audio where Book = 'Poineer' ORDER BY Unit";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL LISTENING FROM  Poineer-Plus UP Book TABLE  */ 
	public function getPoineerPlusConversationAudio(){
		$query = "SELECT * from conversation_audio where Book = 'Poineer-Plus' ORDER BY Unit";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT SLIDES FROM DATABASE WHICH WOULD BE APPEAR IN INDEX PAGE  */
	public function getSlideData(){
		$query = "SELECT * from carousel ORDER BY Carousel_ID DESC limit 3";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL ROWS FROM Book TABLE  */
	public function getPublishBook(){
		$query = "SELECT * from book WHERE Status = 'Publish'";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL ROWS FROM Book TABLE  */
	public function getBook(){
		$query = "SELECT * from book";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}

	/* SELECT Books By ID FROM Book TABLE  */
	public function getBookByID($Book_ID){
		$query = "SELECT * from book WHERE Book_ID = '$Book_ID'";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	
	/* SELECT ALL ROWS FROM RESEARCH TABLE  */
	public function getResearch(){
		$query = "SELECT * from research";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT RESEARCH BY ID FROM RESEARCH TABLE  */
	public function getResearchByID($Research_ID){
		$query = "SELECT * from research WHERE Research_ID = '$Research_ID'";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	/* SELECT ALL ROWS FROM About Us TABLE  */
	public function getAboutUsData(){
		$query = "SELECT * from about_us";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	public function getMostReadNews(){
		$query ="SELECT * from viw_news limit 10";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return  $getData;
	}
	public function getLatestResearch(){
		$query = "SELECT * from research order by Research_ID DESC limit 12";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return  $getData;
	}
	public function getLatestNews(){
		$query = "SELECT * from news order by News_ID DESC limit 12";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return  $getData;
	}
	public function getExamResult(){
		$query ="SELECT * from Exam_Result";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return  $getData;
	}
	public function getNews(){
		$query ="SELECT * from news order by News_ID DESC limit 3";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return  $getData;
	}
	public function getNewsByID($News_ID){
		$query ="SELECT * from news where News_ID = '$News_ID'";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return  $getData;
	}
	public function getUsersByUsername($Username){
		$query = "SELECT * from users where Username = '$Username'";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return $getData;
	}
	public function getLike($News_ID){
		$query ="SELECT * from news_like where News_ID = '$News_ID'";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return  $getData;
	}
	public function getComment(){
		$query ="SELECT * from comment ORDER BY  Comment_ID DESC";
		mysqli_set_charset($this->db->link, 'UTF8');
		$getData = $this->db->select($query);
		return  $getData;
	}
}
?>