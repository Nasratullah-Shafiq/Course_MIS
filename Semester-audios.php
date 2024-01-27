<?php

include('./Assets/_Partial Components/Header.php');

if(!isset($_SESSION['Change_Username'])){
    header('Location: sign in.php');
}

if(isset($_SESSION['Change_Username'])){
    $Username = $_SESSION['Change_Username'];
    $UsersByUsername = $mtd->getUsersByUsername($Username);
    $row = $UsersByUsername->fetch_assoc();
    $chk_img = $row['Image'];
}
// else{
//     header("location: index.php");
// }

?>

<div class="container" style="margin-top: 20px;">
	<div class="row">
        <div class="col-sm-3">
        <?php include('./Assets/_Partial Components/Navigation.php');?>
        </div>
        <!-- Start of Div Reading Books -->
    <div id = "Reading-Audio-Data-Modal" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Select Semester </h4>
                </div>
                <div class="modal-body">
                <nav class="nav-profile-modal"> 
                    <?php 
               $Book = $mtd->getPublishBook();

                  if(!$Book){
                        echo "<li> <a href = '#'> No Data In Book Table</a> </li>";                            }
                    else{
                      if($Book->num_rows>0){
                        while ($result = $Book->fetch_assoc()) { 
                            $ecrypt_1 = (($result['Book_ID']*123456789*9999)/999999);
                            $Book_link = "Reading?id=".urlencode(base64_encode($ecrypt_1));?>
                            <a href="#ContactTab" id ="Unit" data-toggle="tab"> Unit-One </a>
                            <a href="<?=$Book_link;?>"> <img src='Assets/img/icons/Book Shelf_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> <?php echo $result['Book_Name']; ?>  </a>
                        
                <?php 
              }}
              else{
                echo "<li> <a href = '#'>Book Table Is Empty</a> </li>"; 
                }} ?>
                        
                    </nav>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss = "modal">Close</button>
                </div>
            </div>
        </div>
    </div> 
    <!-- End of Div Reading Book -->
    <!-- End of div col-sm-3 -->
	    <div class="col-md-9" style="padding: 0;">
            <div class="panel panel-default">
                <div class="panel-body" style="">
                    <div class="col-xs-12" style=" padding: 0;">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Reading Audios <i class="fa fa-angle-down"></i> </a>                        
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#Reading-Start-Up-Tab" data-toggle="tab"> Start-Up </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Reading-Open-Up-Tab" data-toggle="tab"> Open-Up </a>                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Reading-Warm-Up-Tab" data-toggle="tab"> Warm-Up </a>                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Reading-Run-Up-Tab" data-toggle="tab"> Run-Up </a>                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Reading-Round-One-Tab" data-toggle="tab"> Round-One </a>                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Reading-Round-Tow-Tab" data-toggle="tab"> Round-Tow </a>                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Reading-Round-Three-Tab" data-toggle="tab"> Round-Three </a>                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Reading-Round-Four-Tab" data-toggle="tab"> Round-Four </a>                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Reading-Round-Five-Tab" data-toggle="tab"> Round-Five </a>                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Reading-Round-Six-Tab" data-toggle="tab"> Round-Six </a>                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Reading-Poineer-Tab" data-toggle="tab"> Poineer </a>                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Reading-Poineer-Plus-Tab" data-toggle="tab"> Poineer-Plus </a>                        
                                    </li>
                                </ul>
                            </li>            
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Listening Audios <i class="fa fa-angle-down"></i> </a>                        
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#Listening-Start-Up-Tab" data-toggle="tab"> Start-Up </a>
                                    </li>
                                    <li class="dropdown dropdown-user">
                <a href="javascript:;" class="dropdown-toggle Research-Dropdown" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <span class="username"> SEMESTERS </span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu" id="drop-down-langua">
                    <?php 
                       $Book = $mtd->getBook();

                          if(!$Book){
                                echo "<li> <a href = '#'> No Data In Book Table</a> </li>";                            }
                            else{
                              if($Book->num_rows>0){
                                while ($result = $Book->fetch_assoc()) { 
                                    $ecrypt_1 = (($result['Book_ID']*123456789*9999)/999999);
                                    $Book_link = "Book?id=".urlencode(base64_encode($ecrypt_1));?>
                                <li >
                                    <a href="<?=$Book_link;?>">
                                        <?php echo $result['Book_Name']; ?> </a>
                                </li>
                                <li class="divider"> </li>
                        <?php 
                      }}
                      else{
                        echo "<li> <a href = '#'>Book Table Is Empty</a> </li>"; 
                        }} ?>
                        
                </ul>
            </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Listening-Open-Up-Tab" data-toggle="tab"> Open-Up </a>                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Listening-Warm-Up-Tab" data-toggle="tab"> Warm-Up </a>                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Listening-Run-Up-Tab" data-toggle="tab"> Run-Up </a>                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Listening-Round-One-Tab" data-toggle="tab"> Round-One </a>                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Listening-Round-Tow-Tab" data-toggle="tab"> Round-Tow </a>                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Listening-Round-Three-Tab" data-toggle="tab"> Round-Three </a>                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Listening-Round-Four-Tab" data-toggle="tab"> Round-Four </a>                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Listening-Round-Five-Tab" data-toggle="tab"> Round-Five </a>                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Listening-Round-Six-Tab" data-toggle="tab"> Round-Six </a>                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Listening-Poineer-Tab" data-toggle="tab"> Poineer </a>                        
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Listening-Poineer-Plus-Tab" data-toggle="tab"> Poineer-Plus </a>                        
                                    </li>

                                </ul>
                            </li>
                            <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Vocabulary Audios <i class="fa fa-angle-down"></i> </a>                        
                                    <ul class="dropdown-menu">
                                        <!-- <li>
                                            <a href="#Vocabulary-Start-Up-Tab" data-toggle="tab"> Start-Up </a>
                                        </li> -->
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Vocabulary-Open-Up-Tab" data-toggle="tab"> Open-Up </a>                        
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Vocabulary-Warm-Up-Tab" data-toggle="tab"> Warm-Up </a>                        
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Vocabulary-Run-Up-Tab" data-toggle="tab"> Run-Up </a>                        
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Vocabulary-Round-One-Tab" data-toggle="tab"> Round-One </a>                        
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Vocabulary-Round-Tow-Tab" data-toggle="tab"> Round-Tow </a>                        
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Vocabulary-Round-Three-Tab" data-toggle="tab"> Round-Three </a>                        
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Vocabulary-Round-Four-Tab" data-toggle="tab"> Round-Four </a>                        
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Vocabulary-Round-Five-Tab" data-toggle="tab"> Round-Five </a>                        
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Vocabulary-Round-Six-Tab" data-toggle="tab"> Round-Six </a>                        
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Vocabulary-Poineer-Tab" data-toggle="tab"> Poineer </a>                        
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Vocabulary-Poineer-Plus-Tab" data-toggle="tab"> Poineer-Plus </a>                        
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Conversation Audios <i class="fa fa-angle-down"></i> </a>                        
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#Conversation-Start-Up-Tab" data-toggle="tab"> Start-Up </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Conversation-Open-Up-Tab" data-toggle="tab"> Open-Up </a>                        
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Conversation-Warm-Up-Tab" data-toggle="tab"> Warm-Up </a>                        
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Conversation-Run-Up-Tab" data-toggle="tab"> Run-Up </a>                        
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Conversation-Round-One-Tab" data-toggle="tab"> Round-One </a>                        
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Conversation-Round-Tow-Tab" data-toggle="tab"> Round-Tow </a>                        
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Conversation-Round-Three-Tab" data-toggle="tab"> Round-Three </a>                        
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Conversation-Round-Four-Tab" data-toggle="tab"> Round-Four </a>                        
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Conversation-Round-Five-Tab" data-toggle="tab"> Round-Five </a>                        
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Conversation-Round-Six-Tab" data-toggle="tab"> Round-Six </a>                        
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Conversation-Poineer-Tab" data-toggle="tab"> Poineer </a>                        
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#Conversation-Poineer-Plus-Tab" data-toggle="tab"> Poineer-Plus </a>                        
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                             <div class="tab-content">
                                <!-- Start of Reading Audio Div -->
                                <div class="tab-pane active" id = "Reading-Start-Up-Tab">
                                    <h2> <small> Start-Up Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Reading Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $StartUpAudio = $mtd->getStartUpReadingAudio();
                                    
                                    if(!$StartUpAudio){
                                        echo "<h4> No Audio For Start-Up Book Was Found </h4>";
                                    }
                                    else{
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $StartUpAudio->fetch_assoc()){
                                                $output .='
                                                <tr>
                                                    <td>' .$i. '</td>
                                                </tr>
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Reading_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Reading-Open-Up-Tab">
                                    <h2> <small> Open-Up Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Reading Audios </small></h2><hr>
                                    <?php 
                                        
                                    $output ='';
                                    $OpenUpAudio = $mtd->getOpenUpReadingAudio();
                                    
                                    if(!$OpenUpAudio){
                                        echo "<h4> No Audio For Open-Up Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $OpenUpAudio->fetch_assoc()){
                                            $extention = explode('.', $row["Audio"]);
                                            // $new_name = rand() . '.' .$extention[1];
                                            // $new_name = substr($row["Audio"], 0,14);
                                                // echo strcoll($row["Audio"], 'str');
                                                $output .='
                                            
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Reading_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Reading-Warm-Up-Tab">
                                    <h2> <small> Warm-Up Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Reading Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $WarmUpAudio = $mtd->getWarmUpReadingAudio();
                                    
                                    if(!$WarmUpAudio){
                                        echo "<h4> No Audio For Warm-Up Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $WarmUpAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Reading_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Reading-Run-Up-Tab">
                                    <h2> <small> Run-Up Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Reading Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RunUpAudio = $mtd->getRunUpReadingAudio();
                                    
                                    if(!$RunUpAudio){
                                        echo "<h4> No Audio For Run-Up Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RunUpAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Reading_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Reading-Round-One-Tab">
                                    <h2> <small> Round-One Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Reading Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundOneAudio = $mtd->getRoundOneReadingAudio();
                                    
                                    if(!$RoundOneAudio){
                                        echo "<h4> No Audio For Round-One Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundOneAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Reading_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Reading-Round-Tow-Tab">
                                    <h2> <small> Round-Tow Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Reading Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundTowAudio = $mtd->getRoundTowReadingAudio();
                                    
                                    if(!$RoundTowAudio){
                                        echo "<h4> No Audio For Round-Tow Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundTowAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Reading_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Reading-Round-Three-Tab">
                                    <h2> <small> Round-Three Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Reading Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundThreeAudio = $mtd->getRoundThreeReadingAudio();
                                    
                                    if(!$RoundThreeAudio){
                                        echo "<h4> No Audio For Round-Three Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundThreeAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Reading_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Reading-Round-Four-Tab">
                                    <h2> <small> Round-Four Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Reading Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundFourAudio = $mtd->getRoundFourReadingAudio();
                                    
                                    if(!$RoundFourAudio){
                                        echo "<h4> No Audio For Round-Four Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundFourAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Reading_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Reading-Round-Five-Tab">
                                    <h2> <small> Round-Five Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Reading Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundFiveAudio = $mtd->getRoundFiveReadingAudio();
                                    
                                    if(!$RoundFiveAudio){
                                        echo "<h4> No Audio For Round-Five Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundFiveAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Reading_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Reading-Round-Six-Tab">
                                    <h2> <small> Round-Six Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Reading Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundSixAudio = $mtd->getRoundSixReadingAudio();
                                    
                                    if(!$RoundSixAudio){
                                        echo "<h4> No Audio For Round-Six Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundSixAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Reading_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Reading-Poineer-Tab">
                                    <h2> <small> Poineer Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Reading Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $PoineerAudio = $mtd->getPoineerReadingAudio();
                                    
                                    if(!$PoineerAudio){
                                        echo "<h4> No Audio For Poineer Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $PoineerAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Reading_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Reading-Poineer-Plus-Tab">
                                    <h2> <small> Poineer-Plus Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Reading Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $PoineerPlusAudio = $mtd->getPoineerPlusReadingAudio();
                                    
                                    if(!$PoineerPlusAudio){
                                        echo "<h4> No Audio For Poineer-Plus Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $PoineerPlusAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Reading_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <!-- Start of Listening Audio Div -->
                                <div class="tab-pane" id = "Listening-Start-Up-Tab">
                                    <h2> <small> Start-Up Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Listening Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $StartUpAudio = $mtd->getStartUpListening();
                                    
                                    if(!$StartUpAudio){
                                        echo "<h4> No Audio For Start-Up Book Was Found </h4>";
                                    }
                                    else{
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $StartUpAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Listening-Open-Up-Tab">
                                    <h2> <small> Open-Up Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Listening Audios </small></h2><hr>
                                    <?php 
                                        
                                    $output ='';
                                    $OpenUpAudio = $mtd->getOpenUpListening();
                                    
                                    if(!$OpenUpAudio){
                                        echo "<h4> No Audio For Open-Up Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $OpenUpAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Listening-Warm-Up-Tab">
                                    <h2> <small> Warm-Up Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Listening Audios </small></h2><hr>
                                    





                                    <div id = "accordion" class="panel-group">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#Round_One_Unit_One" data-toggle = "collapse" data-parent="#accordion"> Unit One </a>
                                                </h4>
                                            </div>
                                            <div id = "Round_One_Unit_One" class="panel-collapse collapse in">
                                                <div class = "panel-body">
                                                    <?php 
                                                    $output ='';
                                                    $RoundOneUnitOne = $mtd->getRoundOneListeningUnitOne();
                                                    
                                                    if(!$RoundOneUnitOne){
                                                        echo "<h4> No Listening Audio Exist For Round One Book </h4>";
                                                    }
                                                    else{
                                                        
                                                        $output .='
                                                        <table class="table table-responsive table-stripped table-hover">   
                                                        '; 
                                                        $i=1;
                                                        while($row = $RoundOneUnitOne->fetch_assoc()){
                                                                $output .='
                                                                <tr>    
                                                                    <th>' .$row["Book"]. '</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                                </tr>
                                                                <tr>
                                                                    <td><audio src="./Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                                </tr>
                                                                 ';
                                                            $i++;
                                                        }
                                                        $output .='</table>';
                                                        echo $output;
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#Round_One_Unit_Two" data-toggle = "collapse" data-parent="#accordion"> Unit Two </a>
                                                </h4>
                                            </div>
                                            <div id = "Round_One_Unit_Two" class="panel-collapse collapse">
                                                <div class = "panel-body">
                                                    <?php
                                                    $output ='';
                                                    $RoundOneUnitTwo = $mtd->getRoundOneListeningUnitTwo();
                                                    
                                                    if(!$RoundOneUnitTwo){
                                                        echo "<h4> No Listening Audio Exist For Round One Book </h4>";
                                                    }
                                                    else{
                                                        
                                                        $output .='
                                                        <table class="table table-responsive table-stripped table-hover">   
                                                        '; 
                                                        $i=1;
                                                        while($row = $RoundOneUnitTwo->fetch_assoc()){
                                                                $output .='
                                                                <tr>    
                                                                    <th>' .$row["Book"]. '</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                                </tr>
                                                                <tr>
                                                                    <td><audio src="./Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                                </tr>
                                                                 ';
                                                            $i++;
                                                        }
                                                        $output .='</table>';
                                                        echo $output;
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#Round_One_Unit_Three" data-toggle = "collapse" data-parent="#accordion"> Unit Three </a>
                                                </h4>
                                            </div>
                                            <div id = "Round_One_Unit_Three" class="panel-collapse collapse">
                                                <div class = "panel-body">
                                                    <?php
                                                    $output ='';
                                                    $RoundOneUnitThree = $mtd->getRoundOneListeningUnitThree();
                                                    
                                                    if(!$RoundOneUnitThree){
                                                        echo "<h4> No Listening Audio Exist For Round One Book </h4>";
                                                    }
                                                    else{
                                                        
                                                        $output .='
                                                        <table class="table table-responsive table-stripped table-hover">   
                                                        '; 
                                                        $i=1;
                                                        while($row = $RoundOneUnitThree->fetch_assoc()){
                                                                $output .='
                                                                <tr>    
                                                                    <th>' .$row["Book"]. '</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                                </tr>
                                                                <tr>
                                                                    <td><audio src="./Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                                </tr>
                                                                 ';
                                                            $i++;
                                                        }
                                                        $output .='</table>';
                                                        echo $output;
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#Round_One_Unit_Four" data-toggle = "collapse" data-parent="#accordion"> Unit Four </a>
                                                </h4>
                                            </div>
                                            <div id = "Round_One_Unit_Four" class="panel-collapse collapse">
                                                <div class = "panel-body">
                                                   <?php
                                                    $output ='';
                                                    $RoundOneUnitFour = $mtd->getRoundOneListeningUnitFour();
                                                    
                                                    if(!$RoundOneUnitFour){
                                                        echo "<h4> No Listening Audio Exist For Round One Book </h4>";
                                                    }
                                                    else{
                                                        
                                                        $output .='
                                                        <table class="table table-responsive table-stripped table-hover">   
                                                        '; 
                                                        $i=1;
                                                        while($row = $RoundOneUnitFour->fetch_assoc()){
                                                                $output .='
                                                                <tr>    
                                                                    <th>' .$row["Book"]. '</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                                </tr>
                                                                <tr>
                                                                    <td><audio src="./Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                                </tr>
                                                                 ';
                                                            $i++;
                                                        }
                                                        $output .='</table>';
                                                        echo $output;
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#Round_One_Unit_Five" data-toggle = "collapse" data-parent="#accordion"> Unit Five </a>
                                                </h4>
                                            </div>
                                            <div id = "Round_One_Unit_Five" class="panel-collapse collapse">
                                                <div class = "panel-body">
                                                    <?php
                                                    $output ='';
                                                    $RoundOneUnitFive = $mtd->getRoundOneListeningUnitFive();
                                                    
                                                    if(!$RoundOneUnitFive){
                                                        echo "<h4> No Listening Audio Exist For Round One Book </h4>";
                                                    }
                                                    else{
                                                        
                                                        $output .='
                                                        <table class="table table-responsive table-stripped table-hover">   
                                                        '; 
                                                        $i=1;
                                                        while($row = $RoundOneUnitFive->fetch_assoc()){
                                                                $output .='
                                                                <tr>    
                                                                    <th>' .$row["Book"]. '</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                                </tr>
                                                                <tr>
                                                                    <td><audio src="./Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                                </tr>
                                                                 ';
                                                            $i++;
                                                        }
                                                        $output .='</table>';
                                                        echo $output;
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#Round_One_Unit_Six" data-toggle = "collapse" data-parent="#accordion"> Unit Six </a>
                                                </h4>
                                            </div>
                                            <div id = "Round_One_Unit_Six" class="panel-collapse collapse">
                                                <div class = "panel-body">
                                                    <?php
                                                    $output ='';
                                                    $RoundOneUnitSix = $mtd->getRoundOneListeningUnitSix();
                                                    
                                                    if(!$RoundOneUnitSix){
                                                        echo "<h4> No Listening Audio Exist For Round One Book </h4>";
                                                    }
                                                    else{
                                                        
                                                        $output .='
                                                        <table class="table table-responsive table-stripped table-hover">   
                                                        '; 
                                                        $i=1;
                                                        while($row = $RoundOneUnitSix->fetch_assoc()){
                                                                $output .='
                                                                <tr>    
                                                                    <th>' .$row["Book"]. '</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                                </tr>
                                                                <tr>
                                                                    <td><audio src="./Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                                </tr>
                                                                 ';
                                                            $i++;
                                                        }
                                                        $output .='</table>';
                                                        echo $output;
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#Round_One_Unit_Seven" data-toggle = "collapse" data-parent="#accordion"> Unit Seven </a>
                                                </h4>
                                            </div>
                                            <div id = "Round_One_Unit_Seven" class="panel-collapse collapse">
                                                <div class = "panel-body">
                                                    <?php
                                                    $output ='';
                                                    $RoundOneUnitSeven = $mtd->getRoundOneListeningUnitSeven();
                                                    
                                                    if(!$RoundOneUnitSeven){
                                                        echo "<h4> No Listening Audio Exist For Round One Book </h4>";
                                                    }
                                                    else{
                                                        
                                                        $output .='
                                                        <table class="table table-responsive table-stripped table-hover">   
                                                        '; 
                                                        $i=1;
                                                        while($row = $RoundOneUnitSeven->fetch_assoc()){
                                                                $output .='
                                                                <tr>    
                                                                    <th>' .$row["Book"]. '</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                                </tr>
                                                                <tr>
                                                                    <td><audio src="./Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                                </tr>
                                                                 ';
                                                            $i++;
                                                        }
                                                        $output .='</table>';
                                                        echo $output;
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#Round_One_Unit_Eight" data-toggle = "collapse" data-parent="#accordion"> Unit Eight </a>
                                                </h4>
                                            </div>
                                            <div id = "Round_One_Unit_Eight" class="panel-collapse collapse">
                                                <div class = "panel-body">
                                                    <?php
                                                    $output ='';
                                                    $RoundOneUnitEight = $mtd->getRoundOneListeningUnitEight();
                                                    
                                                    if(!$RoundOneUnitEight){
                                                        echo "<h4> No Listening Audio Exist For Round One Book </h4>";
                                                    }
                                                    else{
                                                        
                                                        $output .='
                                                        <table class="table table-responsive table-stripped table-hover">   
                                                        '; 
                                                        $i=1;
                                                        while($row = $RoundOneUnitEight->fetch_assoc()){
                                                                $output .='
                                                                <tr>    
                                                                    <th>' .$row["Book"]. '</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                                </tr>
                                                                <tr>
                                                                    <td><audio src="./Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                                </tr>
                                                                 ';
                                                            $i++;
                                                        }
                                                        $output .='</table>';
                                                        echo $output;
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>









                                    <?php 
                                    $output ='';
                                    $WarmUpAudio = $mtd->getWarmUpListening();
                                    
                                    if(!$WarmUpAudio){
                                        echo "<h4> No Audio For Warm-Up Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $WarmUpAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Listening-Run-Up-Tab">
                                    <h2> <small> Run-Up Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Listening Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RunUpAudio = $mtd->getRunUpListening();
                                    
                                    if(!$RunUpAudio){
                                        echo "<h4> No Audio For Run-Up Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RunUpAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Listening-Round-One-Tab">
                                    <h2> <small> Round-One Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Listening Audios </small></h2><hr>
                                    
                                    <div id = "accordion" class="panel-group">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#panelBodyOne" data-toggle = "collapse" data-parent="#accordion"> Unit One </a>
                                                </h4>
                                            </div>
                                            <div id = "panelBodyOne" class="panel-collapse collapse">
                                                <div class = "panel-body">
                                                    <ul>
                                                        <li>India</li>
                                                        <li>China</li>
                                                        <li>Japan</li>
                                                    </ul>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#panelBodyTwo" data-toggle = "collapse" data-parent="#accordion"> Unit Two </a>
                                                </h4>
                                            </div>
                                            <div id = "panelBodyTwo" class="panel-collapse collapse">
                                                <div class = "panel-body">
                                                    <ul>
                                                        <li>India</li>
                                                        <li>China</li>
                                                        <li>Japan</li>
                                                    </ul>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#panelBodyThree" data-toggle = "collapse" data-parent="#accordion"> Unit Three </a>
                                                </h4>
                                            </div>
                                            <div id = "panelBodyThree" class="panel-collapse collapse">
                                                <div class = "panel-body">
                                                    <ul>
                                                        <li>India</li>
                                                        <li>China</li>
                                                        <li>Japan</li>
                                                    </ul>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#panelBodyFour" data-toggle = "collapse" data-parent="#accordion"> Unit Four </a>
                                                </h4>
                                            </div>
                                            <div id = "panelBodyFour" class="panel-collapse collapse">
                                                <div class = "panel-body">
                                                    <ul>
                                                        <li>India</li>
                                                        <li>China</li>
                                                        <li>Japan</li>
                                                    </ul>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#panelBodyFive" data-toggle = "collapse" data-parent="#accordion"> Unit Five </a>
                                                </h4>
                                            </div>
                                            <div id = "panelBodyFive" class="panel-collapse collapse">
                                                <div class = "panel-body">
                                                    <ul>
                                                        <li>India</li>
                                                        <li>China</li>
                                                        <li>Japan</li>
                                                    </ul>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#panelBodySix" data-toggle = "collapse" data-parent="#accordion"> Unit Six </a>
                                                </h4>
                                            </div>
                                            <div id = "panelBodySix" class="panel-collapse collapse">
                                                <div class = "panel-body">
                                                    <ul>
                                                        <li>India</li>
                                                        <li>China</li>
                                                        <li>Japan</li>
                                                    </ul>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#panelBodySeven" data-toggle = "collapse" data-parent="#accordion"> Unit Seven </a>
                                                </h4>
                                            </div>
                                            <div id = "panelBodySeven" class="panel-collapse collapse">
                                                <div class = "panel-body">
                                                    <ul>
                                                        <li>India</li>
                                                        <li>China</li>
                                                        <li>Japan</li>
                                                    </ul>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#panelBodyEight" data-toggle = "collapse" data-parent="#accordion"> Unit Eight </a>
                                                </h4>
                                            </div>
                                            <div id = "panelBodyEight" class="panel-collapse collapse">
                                                <div class = "panel-body">
                                                    <ul>
                                                        <li>India</li>
                                                        <li>China</li>
                                                        <li>Japan</li>
                                                    </ul>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php 
                                    $output ='';
                                    $RoundOneAudio = $mtd->getRoundOneListening();
                                    
                                    if(!$RoundOneAudio){
                                        echo "<h4> No Audio For Round-One Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundOneAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Listening-Round-Tow-Tab">
                                    <h2> <small> Round-Tow Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Listening Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundTowAudio = $mtd->getRoundTowListening();
                                    
                                    if(!$RoundTowAudio){
                                        echo "<h4> No Audio For Round-Tow Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundTowAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Listening-Round-Three-Tab">
                                    <h2> <small> Round-Three Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Listening Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundThreeAudio = $mtd->getRoundThreeListening();
                                    
                                    if(!$RoundThreeAudio){
                                        echo "<h4> No Audio For Round-Three Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundThreeAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Listening-Round-Four-Tab">
                                    <h2> <small> Round-Four Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Listening Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundFourAudio = $mtd->getRoundFourListening();
                                    
                                    if(!$RoundFourAudio){
                                        echo "<h4> No Audio For Round-Four Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundFourAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Listening-Round-Five-Tab">
                                    <h2> <small> Round-Five Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Listening Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundFiveAudio = $mtd->getRoundFiveListening();
                                    
                                    if(!$RoundFiveAudio){
                                        echo "<h4> No Audio For Round-Five Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundFiveAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Listening-Round-Six-Tab">
                                    <h2> <small> Round-Six Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Listening Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundSixAudio = $mtd->getRoundSixListening();
                                    
                                    if(!$RoundSixAudio){
                                        echo "<h4> No Audio For Round-Six Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundSixAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Listening-Poineer-Tab">
                                    <h2> <small> Poineer Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Listening Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $PoineerAudio = $mtd->getPoineerListening();
                                    
                                    if(!$PoineerAudio){
                                        echo "<h4> No Audio For Poineer Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $PoineerAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Listening-Poineer-Plus-Tab">
                                    <h2> <small> Poineer-Plus Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Listening Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $PoineerPlusAudio = $mtd->getPoineerPlusListening();
                                    
                                    if(!$PoineerPlusAudio){
                                        echo "<h4> No Audio For Poineer-Plus Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $PoineerPlusAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <!-- Start of Vocabulary Audios Div -->
                                <div class="tab-pane" id = "Vocabulary-Start-Up-Tab">
                                    <h2> <small> Start-Up Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Vocabulary Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $StartUpAudio = $mtd->getStartUpVocabularyAudio();
                                    
                                    if(!$StartUpAudio){
                                        echo "<h4> No Audio For Start-Up Book Was Found </h4>";
                                    }
                                    else{
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $StartUpAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Day '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Vocabulary_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Vocabulary-Open-Up-Tab">
                                    <h2> <small> Open-Up Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Vocabulary Audios </small></h2><hr>
                                    <?php 
                                        
                                    $output ='';
                                    $OpenUpAudio = $mtd->getOpenUpVocabularyAudio();
                                    
                                    if(!$OpenUpAudio){
                                        echo "<h4> No Audio For Open-Up Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $OpenUpAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .$row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Vocabulary_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Vocabulary-Warm-Up-Tab">
                                    <h2> <small> Warm-Up Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Vocabulary Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $WarmUpAudio = $mtd->getWarmUpVocabularyAudio();
                                    
                                    if(!$WarmUpAudio){
                                        echo "<h4> No Audio For Warm-Up Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $WarmUpAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .$row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Vocabulary_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Vocabulary-Run-Up-Tab">
                                    <h2> <small> Run-Up Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Vocabulary Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RunUpAudio = $mtd->getRunUpVocabularyAudio();
                                    
                                    if(!$RunUpAudio){
                                        echo "<h4> No Audio For Run-Up Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RunUpAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .$row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Vocabulary_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Vocabulary-Round-One-Tab">
                                    <h2> <small> Round-One Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Vocabulary Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundOneAudio = $mtd->getRoundOneVocabularyAudio();
                                    
                                    if(!$RoundOneAudio){
                                        echo "<h4> No Audio For Round-One Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundOneAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .$row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Vocabulary_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Vocabulary-Round-Tow-Tab">
                                    <h2> <small> Round-Tow Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Vocabulary Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundTowAudio = $mtd->getRoundTowVocabularyAudio();
                                    
                                    if(!$RoundTowAudio){
                                        echo "<h4> No Audio For Round-Tow Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundTowAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .$row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Vocabulary_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Vocabulary-Round-Three-Tab">
                                    <h2> <small> Round-Three Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Vocabulary Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundThreeAudio = $mtd->getRoundThreeVocabularyAudio();
                                    
                                    if(!$RoundThreeAudio){
                                        echo "<h4> No Audio For Round-Three Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundThreeAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .$row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Vocabulary_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Vocabulary-Round-Four-Tab">
                                    <h2> <small> Round-Four Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Vocabulary Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundFourAudio = $mtd->getRoundFourVocabularyAudio();
                                    
                                    if(!$RoundFourAudio){
                                        echo "<h4> No Audio For Round-Four Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundFourAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .$row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Vocabulary_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Vocabulary-Round-Five-Tab">
                                    <h2> <small> Round-Five Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Vocabulary Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundFiveAudio = $mtd->getRoundFiveVocabularyAudio();
                                    
                                    if(!$RoundFiveAudio){
                                        echo "<h4> No Audio For Round-Five Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundFiveAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .$row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Vocabulary_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Vocabulary-Round-Six-Tab">
                                    <h2> <small> Round-Six Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Vocabulary Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundSixAudio = $mtd->getRoundSixVocabularyAudio();
                                    
                                    if(!$RoundSixAudio){
                                        echo "<h4> No Audio For Round-Six Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundSixAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .$row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Vocabulary_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Vocabulary-Poineer-Tab">
                                    <h2> <small> Poineer Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Vocabulary Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $PoineerAudio = $mtd->getPoineerVocabularyAudio();
                                    
                                    if(!$PoineerAudio){
                                        echo "<h4> No Audio For Poineer Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $PoineerAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .$row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Vocabulary_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Vocabulary-Poineer-Plus-Tab">
                                    <h2> <small> Poineer-Plus Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Vocabulary Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $PoineerPlusAudio = $mtd->getPoineerPlusVocabularyAudio();
                                    
                                    if(!$PoineerPlusAudio){
                                        echo "<h4> No Audio For Poineer-Plus Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $PoineerPlusAudio->fetch_assoc()){
                                            $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .$row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Vocabulary_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <!-- Start of Conversation Audios Dive -->

                                <div class="tab-pane" id = "Conversation-Start-Up-Tab">
                                    <h2> <small> Start-Up Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Conversation Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $StartUpAudio = $mtd->getStartUpConversationAudio();
                                    
                                    if(!$StartUpAudio){
                                        echo "<h4> No Audio For Start-Up Book Was Found </h4>";
                                    }
                                    else{
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $StartUpAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Conversation_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Conversation-Open-Up-Tab">
                                    <h2> <small> Open-Up Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Conversation Audios </small></h2><hr>
                                    <?php 
                                        
                                    $output ='';
                                    $OpenUpAudio = $mtd->getOpenUpConversationAudio();
                                    
                                    if(!$OpenUpAudio){
                                        echo "<h4> No Audio For Open-Up Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $OpenUpAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Conversation_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Conversation-Warm-Up-Tab">
                                    <h2> <small> Warm-Up Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Conversation Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $WarmUpAudio = $mtd->getWarmUpConversationAudio();
                                    
                                    if(!$WarmUpAudio){
                                        echo "<h4> No Audio For Warm-Up Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $WarmUpAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Conversation_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Conversation-Run-Up-Tab">
                                    <h2> <small> Run-Up Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Conversation Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RunUpAudio = $mtd->getRunUpConversationAudio();
                                    
                                    if(!$RunUpAudio){
                                        echo "<h4> No Audio For Run-Up Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RunUpAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Conversation_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Conversation-Round-One-Tab">
                                    <h2> <small> Round-One Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Conversation Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundOneAudio = $mtd->getRoundOneConversationAudio();
                                    
                                    if(!$RoundOneAudio){
                                        echo "<h4> No Audio For Round-One Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundOneAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Conversation_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Conversation-Round-Tow-Tab">
                                    <h2> <small> Round-Tow Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Conversation Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundTowAudio = $mtd->getRoundTowConversationAudio();
                                    
                                    if(!$RoundTowAudio){
                                        echo "<h4> No Audio For Round-Tow Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundTowAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Conversation_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Conversation-Round-Three-Tab">
                                    <h2> <small> Round-Three Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Conversation Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundThreeAudio = $mtd->getRoundThreeConversationAudio();
                                    
                                    if(!$RoundThreeAudio){
                                        echo "<h4> No Audio For Round-Three Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundThreeAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Conversation_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Conversation-Round-Four-Tab">
                                    <h2> <small> Round-Four Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Conversation Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundFourAudio = $mtd->getRoundFourConversationAudio();
                                    
                                    if(!$RoundFourAudio){
                                        echo "<h4> No Audio For Round-Four Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundFourAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Listening_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Conversation-Round-Five-Tab">
                                    <h2> <small> Round-Five Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Conversation Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundFiveAudio = $mtd->getRoundFiveConversationAudio();
                                    
                                    if(!$RoundFiveAudio){
                                        echo "<h4> No Audio For Round-Five Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundFiveAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Conversation_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Conversation-Round-Six-Tab">
                                    <h2> <small> Round-Six Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Conversation Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $RoundSixAudio = $mtd->getRoundSixConversationAudio();
                                    
                                    if(!$RoundSixAudio){
                                        echo "<h4> No Audio For Round-Six Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $RoundSixAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Conversation_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Conversation-Poineer-Tab">
                                    <h2> <small> Poineer Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Conversation Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $PoineerAudio = $mtd->getPoineerConversationAudio();
                                    
                                    if(!$PoineerAudio){
                                        echo "<h4> No Audio For Poineer Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $PoineerAudio->fetch_assoc()){
                                                $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Conversation_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane" id = "Conversation-Poineer-Plus-Tab">
                                    <h2> <small> Poineer-Plus Book <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Conversation Audios </small></h2><hr>
                                    <?php 
                                    $output ='';
                                    $PoineerPlusAudio = $mtd->getPoineerPlusConversationAudio();
                                    
                                    if(!$PoineerPlusAudio){
                                        echo "<h4> No Audio For Poineer-Plus Book Was Found </h4>";
                                    }
                                    else{
                                        
                                        $output .='
                                        <table class="table table-responsive table-stripped table-hover">   
                                        '; 
                                        $i=1;
                                        while($row = $PoineerPlusAudio->fetch_assoc()){
                                            $output .='
                                                <tr>    
                                                    <th>' .$row["Book"]. '</th>
                                                </tr>
                                                <tr>
                                                    <th>' .'Unit '. $row["Audio"]. '</th>
                                                </tr>
                                                <tr>
                                                    <td><audio src="./Assets/Audio/Conversation_Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2" controls controlslist="nodownload" > </audio> </td>
                                                </tr>
                                                 ';
                                            $i++;
                                        }
                                        $output .='</table>';
                                        echo $output;
                                    }
                                    ?>
                                </div>

                             </div>
                        </div>          
                    </div>
                </div>
                <!-- End of div panel -->
			</div>
            <!-- End of div col-md-9 -->
            

            
        </div>
	</div>
        <script type="text/javascript">
    $(document).ready(function(){

$('[data-toggle = "tooltip"]').tooltip();
    });
    $("#Unit").click(function(){
        $('#Reading-Audio-Data-Modal').modal('hide');
    });
</script>

<?php 
include('./Assets/_Partial Components/Footer.php');
?>    