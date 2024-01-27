<?php 
include_once('./Assets/_Partial Components/Header.php');

$Afg_News = $mtd->getResearch();

	foreach ($_GET as $key => $data) {
		$data2 = $_GET[$key] = base64_decode(urldecode($data));
		$News_ID = ((($data2*999999)/9999)/123456789);
	}

if (isset($_GET['id'])) {
 	$data = $_GET['id'];
 	
    
	}
else{
    header('Location: index.php');
}
?>
<div class="container container-index">
	<div class="row">
		<div class="col-md-8 news-bod">
			<div class="panel panel-default">
            
            <div class="panel-body">
              <!-- <div class = "col-md-12 news-detail"id = "resultNews"> -->
			<?php 
				
				$NewsByID = $mtd->getNewsByID($News_ID);

                    if(!$NewsByID){
                        echo "<br>";
                        echo '<div class="alert alert-danger" role="alert" style = "font-size: 16px;"> Opps!... No News Found </div>';
                        echo "<br>";		
  				}
                else{
				
			 if($NewsByID->num_rows>0){

			 	$rows = $NewsByID->fetch_array();
			 		$news_img = $rows['File'];
			 	?>

				<div class="col-md-12" style=" padding-left: 0px; padding-right: 0px;">
					<h2 class="heading"> <?php echo $rows['Heading'];?></h2>
					
				</div>
					
				<div id = "btnAdike" class="col-md-12 img-details" style="padding-left: 0px; padding-right: 0px;">
					<?php echo "<img width = '100%' height = '300px' alt='' src='./Assets/img/News/$news_img '/>"; ?>
				</div>
				
				<br><br>
				
				<div class="col-md-12" id = "tex" style="padding-left: 0px; padding-right: 0px; padding-top: 20px;">
					 
					<p>	<?php echo $rows['Body']; ?></p>

				</div>
				<div class="col-md-12" id = "tex">
				
				</div>	
			<?php 
					}
					else{
						echo "not exist";
					}
				}

				?>
			</a>
			</div>

            <!-- </div> -->
            <!-- End of panel body -->
          </div>
			
			
<!--- =====================================================================================================================
	END OF DIV CONTAIN RESEARCH DETAILS DIV 
=========================================================================================================================-->


			<!--- START OF DIV CONTAIN THREE DIV -->
			<div class = "col-xs-12 col-sm-12" style = "padding-top: 50px;"></div>

<!--- ////////////////////////////////////////////////////////////////////////////////////////////////  -->

			</div>
			</a>
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
        </div>
		<!-- END OF TOP STORIES DIV-->

	</div>
	
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