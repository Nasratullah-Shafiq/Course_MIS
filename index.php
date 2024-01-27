<?php
include('./Assets/_Partial Components/Header.php');


$News = $mtd->getNews();
$Book = $mtd->getBook();
$Research = $mtd->getResearch();
$Carousel = $mtd->getSlideData();

    // $ecrypt_1 = (($rows['News_ID']*123456789*9999)/999999);
    // $link = "Details?id=".urlencode(base64_encode($ecrypt_1));
?>

<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li> -->
        <!-- <li data-target="#myCarousel" data-slide-to="1"></li> -->
        <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
      </ol>
      <div class="carousel-inner" role="listbox">
        <?php 
                if(!$Carousel){
                    echo "";
                }
                else{
                // while($rows = $Carousel->fetch_array()){
                    $rows = $Carousel->fetch_array();
                    $img = $rows['Image'];
                    ?>
                <div class="item active">
                <?php echo "<img class = 'first-slide' alt = 'First slide' src='./Assets/img/Carousel/$img '/>"; ?>
                  <!-- <img class="first-slide" src="./Assets/img/Students-writing4.jpg" alt="First slide"> -->
                  <div class="container">
                    <div class="carousel-caption">
                      <h1 class="Change-Slide-Header animated fadeInUp"><?php echo $rows["Heading"]; ?></h1>
                    
                    </div>
                  </div>
                </div>
                     
                  <?php }
              // }?>
        
              <?php 
                if(!$Carousel){
                    echo "";
                }
                else{
                while($rows = $Carousel->fetch_array()){
                    // $rows = $Carousel->fetch_array();
                    $img = $rows['Image'];
                    ?>
                <div class="item">
                <?php echo "<img class = 'first-slide' alt = 'First slide' src='./Assets/img/Carousel/$img '/>"; ?>
                  <!-- <img class="first-slide" src="./Assets/img/Students-writing4.jpg" alt="First slide"> -->
                  <div class="container">
                    <div class="carousel-caption">
                      <h1 class="Change-Slide-Header"><?php echo $rows["Heading"]; ?></h1>
                    
                    </div>
                  </div>
                </div>
                     
                  <?php }}?>
                
      </div>
    <!-- End of Carousel Inner -->
    </div>
    <!-- /.carousel -->
    <br>
        <br>
    <div class="ro">
        <div class="container">
        
<!--=========================================================================================================
    THIS IS THE FIRST DIV FOR DISPLAY OF NEWS
========================================================================================================= -->        
        <!-- Start of div contain Home page News -->
            <div class="row" style="padding: 0px;" id = "news-div">
              <div class="col-md-12" id = "News_Header"> <h2>LATEST NEWS </h2> </div>
            <div class="col-md-12" id = "News_Div">

                <?php 
                if(!$News){
                	echo "News Not Exist";
                }
                else{
                while($rows = $News->fetch_array()){
                  	$img = $rows['File'];
                   	$ecrypt_1 = (($rows['News_ID']*123456789*9999)/999999);
				    $link = "News?id=".urlencode(base64_encode($ecrypt_1));?>

                <div class = "col-lg-4 col-sm-6 img-index" >
                <a href="<?=$link;?>" style = "color: black;">
                    <?php echo "<img class = 'news-ig' width='100%' height = '180px' alt='' src='./Assets/img/News/$img '/>"; ?>
                    
                        <h4> <?php echo $rows['Heading'];?></h4>
                    <p> 
                        <?php
                            echo substr($rows['Body'], 0,90)."..."."Read More"; 
                            
                        ?>
                    </p>
                    </a>
                </div>
                  <?php }}?>
           </div></div>
            <!-- End of News -->
<!--- =====================================================================================================================
    END OF col-md-12 NEWS DIV 
=========================================================================================================================-->
    
<!--=========================================================================================================
    THIS IS THE FIRST DIV FOR DISPLAY OF NEWS
========================================================================================================= -->        
        <!-- Start of div contain Home page News -->
        <div class="row" style="background: rd;">
            <div class="col-md-12" id = "News_Header"> <h2>RESEARCH </h2> </div>
              <div class="col-md-12" id = "News_Div">

                  <?php 
                  if(!$Research){
                      echo "Research Not Exist";
                  }
                  else{
                  while($rows = $Research->fetch_array()){
                      $img = $rows['File'];
                      $ecrypt_1 = (($rows['Research_ID']*123456789*9999)/999999);
                      $link = "Research?id=".urlencode(base64_encode($ecrypt_1));?>

                  <div class = "col-sm-6 col-lg-4 img-index">
                  <a href="<?=$link;?>" style = "color: black;">
                      <?php echo "<img alt='' width='100%' height = '180px' src='./Assets/img/Research/$img '/>"; ?>
                      
                          <h4> <?php echo $rows['Heading'];?></h4>
                      
                      </a>
                  </div>
                    <?php }}?>
             </div>
              <!-- End of Research -->
        </div>
        
<!--- =====================================================================================================================
    END OF col-md-12 NEWS DIV 
=========================================================================================================================-->

        </div>
        <!-- End of Container -->
        <div class="ro">
        <div class="container">
    
          <h2 class="padding-top: 10px; padding-bottom: 20px; margin-bottom: 20px;"> SEMESTERS </h2>
          <section class="testimonials-section">
              <div class="container-fluid px-lg-4 px-md-4">
                <div class="testimonials">
                    <div id="carousel1" class="owl-carousel">
                       <div class="item">
                           <div class="card text-center">
                                <img class="img-circle" style = "border-radius: 5px;" src="Assets/img/_Profile_Picture/team8.jpg" alt="Generic placeholder image" width="140" height="360">                                    
                                <div class="card-body">
                                    <h5>Ronne Galle <br/> <span> Project Manager </span></h5>
                                    <p class = "card-text">nobis est eligendi optio cumque nihil impedit quo
                                minus id quud maxime placeat</p>
                                <?php  
                                 
                                ?>
                                </div>
                           </div>
                       </div>
                       <div class="item">
                           <div class="card text-center">
                                <img class="img-circle" style = "border-radius: 5px;" src="Assets/img/_Profile_Picture/team7.jpg" alt="Generic placeholder image" width="140" height="360">                                    
                                <div class="card-body">
                                    <h5>Ronne Galle <br/> <span>Project Manager</span></h5>
                                    <p class = "card-text">nobis est eligendi optio cumque nihil impedit quo
                                minus id quud maxime placeat</p>
                                </div>
                           </div>
                       </div>
                       <div class="item">
                           <div class="card text-center">
                                <img class="img-circle" style = "border-radius: 5px;" src="Assets/img/_Profile_Picture/team12.jpg" alt="Generic placeholder image" width="140" height="360">                                    
                                <div class="card-body">
                                    <h5>Ronne Galle <br/> <span>Project Manager</span></h5>
                                    <p class = "card-text">nobis est eligendi optio cumque nihil impedit quo
                                minus id quud maxime placeat</p>
                                </div>
                           </div>
                       </div> 
                    </div>
                    
                </div>                  
              </div>           
          </section>
        </div>            
    </div>
    <!-- End of Row Semester -->
        <div class="ro">
            <div class="container">
            <div id="myCarousell" class="carousel slide" data-ride="carousel" style="margin-top: 35px;">
                  
                  <div class="carousel-inner" role="listbo">
                    <div class="item active">
                      <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center;">
                          <img class="img-circle" src="Assets/img/_Profile_Picture/team8.jpg" alt="Generic placeholder image" width="140" height="140">
                          <h2>Our Valued Student</h2>
                          <p>This is a good organization i work with example organization and i found them loyal and honet people.</p>
                         
                        </div>
                    </div>
                    <div class="item">
                      <div class="col-lg-12" style="text-align: center;">
                          <img class="img-circle" src="Assets/img/_Profile_Picture/team12.jpg" alt="Generic placeholder image" width="140" height="140">
                          <h2>Student Feed back</h2>
                          <p>This is a good organization i work with example organization and i found them loyal and honet people.</p>
                         
                        </div>
                    </div>
                    <div class="item">
                      <div class="col-lg-12" style="text-align: center;">
                          <img class="img-circle" src="Assets/img/_Profile_Picture/team7.jpg" alt="Generic placeholder image" width="140" height="140">
                          <h2>Our Valued Student</h2>
                          <p>This is a good organization i work with example organization and i found them loyal and honet people.</p>
                         
                        </div>
                    </div>
                  </div>
                  
                </div><!-- /.carousel -->

            </div>
            
        </div>
                  
    <div id = "topBtn"><i class = "fa fa-arrow-up" ></i></div>
<script>
            $(document).ready(function() {
              $("#carousel1").owlCarousel({
                    loop: true,
                    center: true,
                    margin: 10,
                    autoplayTimeout: 1000,
                    responsiveClass: true,
                    nav: false,
                    responsive:{
                        0:{
                            items: 1
                        },
                        600:{
                            items: 3
                        },
                        1000:{
                            items: 4
                        }
                    }
                });
            });
          </script>
<script type="text/javascript">
    
            // $(document).ready(function() {
            //   var owl = $('.owl-carousel');
            //   owl.owlCarousel({
            //     margin: 10,
            //     nav: true,
            //     loop: true,
            //     responsive: {
            //       0: {
            //         items: 1
            //       },
            //       600: {
            //         items: 3
            //       },
            //       1000: {
            //         items: 4
            //       }
            //     }
            //   })
            // })
          
</script>
    <script>
  $(document).ready(function(){
	$(window).scroll(function(){
           if($(this).scrollTop()>100){
            $('#topBtn').fadeIn();
           }
           else{
             $('#topBtn').fadeOut();
           } 
        });
        $("#topBtn").click(function(){
            $('html, body').animate({scrollTop:0}, 1000);
        });
     });



var firefoxTestDone = false
function reportFirefoxTestResult(result) {
  if (!firefoxTestDone) {
    $('#ff-bug-test-result')
      .addClass(result ? 'text-success' : 'text-danger')
      .text(result ? 'PASS' : 'FAIL')  
  }
  firefoxTestDone = true
}

$(function () {
  $('.js-popover').popover()
  $('.js-tooltip').tooltip()
  $('#tall-toggle').click(function () {
    $('#tall').toggle()
  })
  $('#ff-bug-input').one('focus', function () {
    $('#myModal2').on('focus', function () {
      reportFirefoxTestResult(false)
    })
    $('#ff-bug-input').on('focus', function () {
      reportFirefoxTestResult(true)
    })
  })
})
</script>


<?php
include('./Assets/_Partial Components/Footer.php');
?>
