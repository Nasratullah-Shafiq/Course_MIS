<?php
include('./Assets/_Partial Components/Header.php');

$totalReading = $mtd->getTotalReading();
$totalGrammer = $mtd->getTotalGrammer();
$totalListening = $mtd->getTotalListening();
$totalVocabulary = $mtd->getTotalVocabulary();
$totalNews = $mtd->getTotalNews();
$totalResearch = $mtd->getTotalResearch();
$totalUsers = $mtd->getTotalUser();
$totalStudent = $mtd->getTotalStudent();

?>

    <div class="container-fluid" id = "container-fluid">
    	<div class="row" id="row">
            <div class="col-sm-2" style="padding-left: 0px; padding-right: 0px;">
                <!-- BEGIN SIDEBAR -->
                <?php include('./Assets/_Partial Components/Navigation.php');?>
                <!-- END SIDEBAR -->
            </div>
            <div class="col-sm-10" id = "right-sidebar">
                <h1 style = "color: #2C3E50"> <i class="fa-solid fa-gauge"></i> Dashboard <small> Statistics overview </small></h1><hr>
                 <ol class="breadcrumb">
                <li><a href="#"> <i class="fa-solid fa-gauge"></i> Dashboard </a></li>
                <li class = "activ"> <a href="#"> <i class = "fa fa-question"></i> Statistics Overview </a></li>
                </ol>
                <!-- BEGIN DIV WITH FOURE DIV PANEL FOR SHOWING STATISTICS OF DATA-->
                
                <div class = "row tab-boxes">

                <!--  BEGIN FISRT THEM PANEL FOR SHOWING OF DATA  -->
                    <div class="col-md-6 col-lg-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                               <div class = "row">
                                    <div class="col-xs-3 panel-top">
                                        <i class = "fa fa-list-alt fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9">
                                        <div class="text-right huge counter" data-target = "<?php echo $totalReading; ?>"> 0 </div>
                                        <div class="text-right"> Reading </div>
                                    </div>
                               </div>
                            </div>
                            <a href="Reading">
                                <div class="panel-footer">
                                    <span class = "pull-left"> View All Reading</span>
                                    <span class = "pull-right"> <i class = "fa fa-arrow-circle-right"></i></span>
                                    <div class = "clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  END OF FISRT THEM PANEL FOR SHOWING OF DATA  -->

                    <!--  BEGIN SECOND THEM PANEL FOR SHOWING OF DATA  -->
                    <div class="col-md-6 col-lg-3">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                               <div class = "row">
                                    <div class="col-xs-3 panel-top">
                                        <i class = "fa fa-list-alt fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9">
                                        <div class="text-right huge counter" data-target = "<?php echo $totalGrammer; ?>"> 0 </div>
                                        <div class="text-right"> Grammer </div>
                                    </div>
                               </div>
                            </div>
                            <a href="Grammer">
                                <div class="panel-footer">
                                    <span class = "pull-left"> View All Grammer </span>
                                    <span class = "pull-right"> <i class = "fa fa-arrow-circle-right"></i></span>
                                    <div class = "clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  END OF SECOND THEM PANEL FOR SHOWING OF DATA  -->

                    <!--  BEGIN THIRD THEM PANEL FOR SHOWING OF DATA  -->
                    <div class="col-md-6 col-lg-3">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                               <div class = "row">
                                    <div class="col-xs-3 panel-top">
                                        <i class = "fa-solid fa-music fa-4x"></i>
                                    </div>
                                    <div class="col-xs-9">
                                        <div class="text-right huge counter" data-target = "<?php echo $totalListening; ?>"> 0 </div>
                                        <div class="text-right"> Listening </div>
                                    </div>
                               </div>
                            </div>
                            <a href="Listening">
                                <div class="panel-footer">
                                    <span class = "pull-left"> View All Listening</span>
                                    <span class = "pull-right"> <i class = "fa fa-arrow-circle-right"></i></span>
                                    <div class = "clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  END OF THIRD THEM PANEL FOR SHOWING OF DATA  -->

                    <!--  BEGIN FOURTH THEM PANEL FOR SHOWING OF DATA  -->
                    <div class="col-md-6 col-lg-3">
                        <div class="panel panel-green" style="">
                            <div class="panel-heading">
                               <div class = "row">
                                    <div class="col-xs-3 panel-top">
                                        <i class = "fa fa-list-alt fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9">
                                        <div class="text-right huge counter" data-target = "<?php echo $totalVocabulary; ?>"> 0 </div>
                                        <div class="text-right"> Vocabulary </div>
                                    </div>
                               </div>
                            </div>
                            <a href="Vocabulary">
                                <div class="panel-footer">
                                    <span class = "pull-left"> View All Word </span>
                                    <span class = "pull-right"> <i class = "fa fa-arrow-circle-right"></i></span>
                                    <div class = "clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  END OF FOURTH THEM PANEL FOR SHOWING OF DATA  -->
                </div>

                <div class = "row tab-boxes">

                    <!--  BEGIN THIRD THEM PANEL FOR SHOWING OF DATA  -->
                    <div class="col-md-6 col-lg-3">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                               <div class = "row">
                                    <div class="col-xs-3 panel-top">
                                        <i class = "fa-solid fa-user fa-4x"></i>
                                    </div>
                                    <div class="col-xs-9">
                                        <div class="text-right huge counter" data-target = "<?php echo $totalStudent; ?>"> 0 </div>
                                        <div class="text-right"> Student </div>
                                    </div>
                               </div>
                            </div>
                            <a href="Student">
                                <div class="panel-footer">
                                    <span class = "pull-left"> View All Student </span>
                                    <span class = "pull-right"> <i class = "fa fa-arrow-circle-right"></i></span>
                                    <div class = "clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  END OF THIRD THEM PANEL FOR SHOWING OF DATA  -->

                    <!--  BEGIN SECOND THEM PANEL FOR SHOWING OF DATA  -->
                    <div class="col-md-6 col-lg-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                               <div class = "row">
                                    <div class="col-xs-3 panel-top">
                                        <i class = "fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9">
                                        <div class="text-right huge counter" data-target = "<?php echo $totalUsers; ?>"> 0 </div>
                                        <div class="text-right"> Users </div>
                                    </div>
                               </div>
                            </div>
                            <a href="Users">
                                <div class="panel-footer">
                                    <span class = "pull-left"> View All Users</span>
                                    <span class = "pull-right"> <i class = "fa fa-arrow-circle-right"></i></span>
                                    <div class = "clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  END OF SECOND THEM PANEL FOR SHOWING OF DATA  -->


                <!--  BEGIN FISRT THEM PANEL FOR SHOWING OF DATA  -->
                    <div class="col-md-6 col-lg-3">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                               <div class = "row">
                                    <div class="col-xs-3 panel-top">
                                        <i class = "fa-regular fa-newspaper fa-4x"></i>
                                    </div>
                                    <div class="col-xs-9">
                                        <div class="text-right huge counter" data-target = "<?php echo $totalNews; ?>"> 0</div>
                                        <div class="text-right"> News </div>
                                    </div>
                               </div>
                            </div>
                            <a href="News">
                                <div class="panel-footer">
                                    <span class = "pull-left"> View All News</span>
                                    <span class = "pull-right"> <i class = "fa fa-arrow-circle-right"></i></span>
                                    <div class = "clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  END OF FISRT THEM PANEL FOR SHOWING OF DATA  -->
                   
                    <!--  BEGIN FOURTH THEM PANEL FOR SHOWING OF DATA  -->
                    <div class="col-md-6 col-lg-3">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                               <div class = "row">
                                    <div class="col-xs-3 panel-top">
                                        <i class = "fa fa-list-alt fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9">
                                        <div class="text-right huge counter" data-target="<?php echo $totalResearch; ?>"> 0 </div>
                                        <div class="text-right"> Research </div>
                                    </div>
                               </div>
                            </div>
                            <a href="Research">
                                <div class="panel-footer">
                                    <span class = "pull-left"> View All Research </span>
                                    <span class = "pull-right"> <i class = "fa fa-arrow-circle-right"></i></span>
                                    <div class = "clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  END OF FOURTH THEM PANEL FOR SHOWING OF DATA  -->
                </div>
            </div>
    <!-- END QUICK SIDEBAR -->
        </div> 
      <!-- End of Div Row -->
    </div>
</div>
<script type="text/javascript">
    const counters = document.querySelectorAll('.counter');
    const speed = 500;

    counters.forEach(counter=>{
        const updateCount = ()=>{
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;

        const inc = target/speed;

        if(count<target){
            counter.innerText = Math.ceil(count+inc);
            setTimeout(updateCount, 1);
        }
        else{
            count.innerText = target;
        }
    }
        updateCount();
    });
</script>
<?php 
include('./Assets/_Partial Components/Footer.php');
?>