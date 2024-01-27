<?php 
include_once('./Assets/_Partial Components/Header.php');

$Afg_News = $mtd->getResearch();

?>
<div class="container container-index">
	<div class="row">
	<?php if (isset($_GET['id'])) {
 	$data = $_GET['id'];
 	foreach ($_GET as $key => $data) {
		$data2 = $_GET[$key] = base64_decode(urldecode($data));
		$Book_ID = ((($data2*999999)/9999)/123456789);
	}?>
    <div class="col-md-8 news-bod">
		<?php 
				$Book = $mtd->getBookByID($Book_ID);

                    if(!$Book){
                        echo "<br>";
                        echo '<div class="alert alert-danger" role="alert" style = "font-size: 16px;"> Opps!... No Books Found </div>';
                        echo "<br>";
                    
  					
  				}
                    else{
				
			 if($Book->num_rows>0){
			 	
			 	while($rows = $Book->fetch_array()){
			 		$news_img = $rows['Image'];?>
			<div class="panel panel-default">
            
            <div class="panel-body">
            	
				<div class = "table-responsive"> 
				    <table class = "table hover">
				    	<tr>
				    		<td width = "30%"> <h1> <?php echo $rows['Book_Name']; ?> </h1></td>
				    		<td> <?php echo "<img alt='' width='250px' height = '350px' src='./Assets/img/Book/$news_img '/>"; ?>
				    	</tr>
				    	<tr>
				    		<td width = "30%"> <label> Name </label></td>
				    		<td width = "30%"><?php echo $rows['Book_Name']; ?></td> 
				    	</tr>
				    	<tr>
				    		<td width = "30%"> <label> Time </label></td>
				    		<td width = "30%"><?php echo $rows['Duration']; ?></td>  
				    	</tr>
				    	<tr>
				    		<td width = "30%"> <label> Fees </label></td>
				    		<td width = "30%"><?php echo $rows['Fees']; ?></td> 
				    	</tr>
				    	<tr>
				    		<td width = "30%"> <label> Description </label></td>
				    		<td width = "30%"><?php echo $rows['Description']; ?></td> 
				    	</tr>
				   
					</table> 
				</div>	
			
			
			</div>
			<!-- End of panel body -->
            </div>
            <!-- End of panel Default -->
            <?php 
					}}
					else{
						echo "not exist";
					}
				}?>
        </div>
		<!-- End of col-md-8 news-bod-->
<?php }
else{?>
    <div class="col-md-8 news-bod">
		<?php 
				
				$Book = $mtd->getBook();

                    if(!$Book){
                        echo "<br>";
                        echo '<div class="alert alert-danger" role="alert" style = "font-size: 16px;"> Opps!... No Books Found </div>';
                        echo "<br>";
                    
  					
  				}
                    else{
				
			 if($Book->num_rows>0){
			 	
			 	while($rows = $Book->fetch_array()){
			 		$news_img = $rows['Image'];?>
			<div class="panel panel-default">
            
            <div class="panel-body">
            	
				<div class = "table-responsive"> 
				    <!-- <table class = "table hover responsive"> -->
				    
				    <!-- <div class="form-group"> -->
                        <!-- <label style="text-align: left;" class="col-sm-6 control-label"> <h1> <?php
                         // echo $rows['Book_Name']; ?> </h1> </label>
                        <div class="col-sm-6">
                          // <?php
                           // echo "<img alt='' width='250px' height = '350px' src='./Assets/img/Book/$news_img '/>"; ?>
                        </div> -->
                    <!-- </div> -->
                    <table class = "table hover">
				    	<tr>
				    		<td width = "30%"> <h1> <?php echo $rows['Book_Name']; ?> </h1></td>
				    		<td> <?php echo "<img alt='' width='250px' height = '350px' src='./Assets/img/Book/$news_img '/>"; ?>
				    	</tr>
				    	<tr>
				    		<td width = "30%"> <label> Name </label></td>
				    		<td width = "30%"><?php echo $rows['Book_Name']; ?></td> 
				    	</tr>
				    	<tr>
				    		<td width = "30%"> <label> Time </label></td>
				    		<td width = "30%"><?php echo $rows['Duration']; ?></td>  
				    	</tr>
				    	<tr>
				    		<td width = "30%"> <label> Fees </label></td>
				    		<td width = "30%"><?php echo $rows['Fees']; ?></td> 
				    	</tr>
				    	<tr>
				    		<td width = "30%"> <label> Description </label></td>
				    		<td width = "30%"><?php echo $rows['Description']; ?></td> 
				    	</tr>
				   
					</table> 
				</div>	
			
			
			</div>
			<!-- End of panel body -->
            </div>
            <!-- End of panel Default -->
            <?php 
					}}
					else{
						echo "not exist";
					}
				}?>
        </div>
		<!-- End of col-md-8 news-bod-->
<?php } ?>
		
			
<!--- =====================================================================================================================
	END OF DIV CONTAIN Books DETAILS DIV 
=========================================================================================================================-->
			
<!--=====================================================================================================================
 		START OF TOP STORIES DIV 
=======================================================================================================================-->
		 <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> Latest News </h3>
                </div>
                <?php 
                    $LatestNews = $mtd->getLatestNews();
                   
                      if(!$LatestNews){
                          echo "No Data In News Table";
                        }
                        else{
                          if($LatestNews->num_rows>0){
                            while ($result = $LatestNews->fetch_assoc()) { 
                                $ecrypt_1 = (($result['News_ID']*123456789*9999)/999999);
                                $News_link = "News.php?id=".urlencode(base64_encode($ecrypt_1));?>
                            <div class="list-group">
                                <a href="<?=$News_link;?>" class="list-group-item">
                                    <?php echo $result['Heading']; ?>
                                </a>
                                
                            </div>
                    <?php 
                          }}
                          else{
                            echo "No Data In News Table";
                            }} ?>
                            
            </div>
            <!-- End of panel Default Div -->
        </div>
		<!-- END OF TOP STORIES DIV-->
	</div>
	<!-- End of Row Div -->
</div>
<?php 
include_once('./Assets/_Partial Components/Footer.php');
?>
<script type="text/javascript">
$(document).ready(function(){
	var plus__=0;
	var chek_click;
	$(document).on('click', '.more', function(){
		var text_id = $(this).attr('id');
		if(chek_click != text_id){
			chek_click = text_id;
			plus__=0;
		}
		plus__=plus__+1000;
		fetch_text(plus__,text_id);
	})
})
fetch_text();
	function fetch_text(plus__,Research_ID){
		$.ajax({
			url:"fetch_more_text.php",
			type:"post",
			data:{plus__:plus__,Research_ID:Research_ID},
			success:function(data){
				$("#text").html(data);
			}
		});
	}
</script>