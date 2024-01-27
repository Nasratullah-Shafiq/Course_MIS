<?php 
include_once('./Assets/_Partial Components/Header.php');
?>

<div class="container container-index">
		<div class="row">
			<div class="col-md-8" style="padding-left: 0px; padding-right: 0px;">
					<div class="col-md-12">
							<h3> You can contact CHANGE English language Administration here </h3>
					</div>
					<div class="col-md-9">
				<form action="" method = "POST">
                    
                    <div class="form-group">
                        <label for="ful-name"> Name </label>
                        <input type="text" id="Full_Name" name = "Full_Name" class="form-control" placeholder=" Name">
                    </div>

                    <div class="form-group">
                        <label for="Email"> Email </label>
                        <input type="text" id="Email" class="form-control" name = "Email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="ful-name"> Phone No </label>
                        <input type="text" id="Phone_No" class="form-control" name = "Phone_No" placeholder="Phone No">
                    </div>

                    <div class="form-group">
                        <label for="Message"> Message </label>
                        <textarea id="Message" col="30" rows="5" class="form-control" name="Message" placeholder="your message here..."> </textarea>
                    </div>
                    <input type="button" name="submit" class="button-start-the-quiz" value="Send Message" id = "btn-send-message">
                    <div class="form-group" style = "padding-top: 20px; font-size: 16px;">
                        <span id="span-valid" class="span-validation"></span>  
                    </div>

                </form>

				</div>

			</div>
            <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> Important Links </h3>
                </div>
                <?php 
                    $About_Us = $mtd->getAboutUsData();
                   
                      if(!$About_Us){
                          echo "No Data In About_Us Table";
                        }
                        else{
                          if($About_Us->num_rows>0){
                            while ($result = $About_Us->fetch_assoc()) { 
                                $ecrypt_1 = (($result['About_ID']*123456789*9999)/999999);
                                $About_link = "About_Us.php?id=".urlencode(base64_encode($ecrypt_1));?>
                            <div class="list-group">
                                <a href="About-us" class="list-group-item">
                                    <?php echo $result['Heading']; ?>
                                </a>
                                
                            </div>
                    <?php 
                          }}
                          else{
                            echo "No Data In About_Us Table";
                            }} ?>
                            
            </div>
        </div>
	</div>
	 
</div>

<?php 
include_once('./Assets/_Partial Components/Footer.php');
?>