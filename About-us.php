<?php 
include_once('./Assets/_Partial Components/Header.php');
?>

<div class="container"style="padding-right: 0px; padding-left: 0px;">
	<div class="col-md-10" style="padding-right: 0px; padding-left: 0px;">
		<?php 
       	$About_Us = $mtd->getAboutUsData();
       
          if(!$About_Us){
              echo "No Data In About_Us Table";
            }
            else{
              if($About_Us->num_rows>0){
                while ($result = $About_Us->fetch_assoc()) { ?>
		<div class="col-md-12 col-sm-12">
			<h2>  <?php echo $result['Heading']; ?> </h2>
		</div>
		<div class="col-md-8">         
            <?php echo $result['Body']; ?>                             
                
		</div>
		<?php 
              }}
              else{
                echo "No Data In About_Us Table";
                }} ?>
	</div>
</div>

<?php 
include_once('./Assets/_Partial Components/Footer.php');
?>