<?php 
include_once('./Assets/_Partial Components/Header.php');
include_once('./Assets/_Partial Components/Database.php');
$Afg_News = $mtd->getResearch();
$db = new Database();
?>

<div class="container container-index">
	<div class="row">
	
		<div class="col-md-8 news-bod">
			<div class="panel panel-default">
            <!-- <div class="panel-heading"> -->
              <!-- <h3 class="panel-title"> Research </h3> -->
            <!-- </div> -->
            <div class="panel-body">
              <!-- <div class = "col-md-12 news-detail"id = "resultNews"> -->
			<?php 
                    $Exam = $mtd->getExamResult();
                    if(!$Exam){
                        echo "<br>";
                        echo '<div class="alert alert-danger" role="alert" style = "font-size: 16px;"> Opps!... No Teachers Found </div>';
                        echo "<br>";
                    }
                    else{

                    if($Exam->num_rows>0){
                           
                    ?>
                <table class="table table-stripped table-hover">
                    <thead>
                        <tr>
                            <th> Student ID </th>
                            <th> Full Name </th>
                            <th> Father Name </th>
                            <th> Marks </th>
                            <th> Grade </th>
                            <th> Class </th>
                        </tr>
                    </thead>
                <?php 
                while($row = $Exam->fetch_array()){ ?>
                    <tr>
                        <td> <?php echo $row['Student_ID'];?></td>
                        <td> <?php echo $row['Full_Name'];?> </td>
                        <td> <?php echo $row['Father_Name'];?> </td>
                        <td> <?php echo $row['Marks'];?> </td>
                        <td> <?php echo $row['Grade'];?> </td>
                        <td> <?php echo $row['Class'];?> </td>
                        
                    </tr>
                
                <?php }
            }
                else{
                    echo "<br>";
                    echo '<div class="alert alert-danger" role="alert" style = "font-size: 16px;"> Opps!... No Teachers Found </div>';
                    echo "<br>";
                    }
                    }
                  
                    ?>
                    </table>
			</div>

            <!-- </div> -->
            <!-- End of panel body -->
          </div>

			</div>

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