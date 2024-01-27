<?php 

include('./Assets/_Partial Components/Header.php');

?>

<div class="row" id="row">
<!-- BEGIN LEFT SIDE BAR -->
    <div class="left-side-bar">
        <?php include('./Assets/_Partial Components/Navigation.php');?>
    </div>
    <!-- END OF LEFT SIDE BAR DIV-->
    <!-- BEGIN RIGHT SIDE BAR DIV-->
    <div class="right-side-bar">
        <!-- <div class="row" style="background: red;"> -->
            <div calss = "col-md-9">
                <h1 style = "color: #2C3E50"> <small> Home <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Vocabulary Audios </small></h1><hr>
                 <ol class="breadcrumb">
                    <li style="color: #5C9BD1"><a href="index"> <i class = "fa fa-dashboard"></i>  Dashboard </a></li>
                    <li class = ""> <a href="javascript:;" data-toggle="modal" data-target="#Vocabulary_Audio_Data_Modal">  <img alt="" class="img-circle" width="17px" height = "17px" src = "../Assets/img/icons/Audio_26px.png" />  Add Audio </a></li>
                </ol>
            </div>
            <div class = "col-sm-9">

            </div>
<!--=====================================================================================================================
    START OF MODAL DIV WE CAN REGISTER STUDENTS AND SUBMIT IT TO THE DATABASE
======================================================================================================================-->
<div id="Vocabulary_Audio_Data_Modal" class="modal Myfade" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel"> Add Audio Here </h4>
        </div>

        <div class="modal-body">
            <form class="form-horizontal" method="POST" id = "Vocabulary_Audio_Form"  enctype="multipart/form-data">
                      
             <div class="form-group">
                        
                    <label style="text-align: left;" class="col-sm-3 control-label"> Audio </label>
                    <div class="col-sm-9">
                        <input type = "file" name = "Vocabulary_Audio" id = "Vocabulary_Audio"/>
                        
                    </div>
                </div> 
                      <div class="form-group">
                          <label for="Book" style="text-align: left;" class="col-sm-3 control-label"> Book </label>
                            <div class="col-sm-9">
                                <select name="Book_ID" id = "Book_ID" class="form-control">
                                    <option value="Start-Up"> Start-Up </option>
                                    <option value="Open-Up"> Open-Up </option>
                                    <option value="Warm-Up"> Warm-Up </option>
                                    <option value="Run-Up"> Run-Up </option>
                                    <option value="Round-One"> Round-One </option>
                                    <option value="Round-Tow"> Round-Tow </option>
                                    <option value="Round-Three"> Round-Three </option>
                                    <option value="Round-Four"> Round-Four </option>
                                    <option value="Round-Five"> Round-Five </option>
                                    <option value="Round-Six"> Round-Six </option>
                                    <option value="Poineer"> Poineer </option>
                                    <option value="Poineer-Plus"> Poineer-Plus </option>
                              </select>
                            </div>
                        </div> 
                    
                      <!-- <div class="form-group">
                          <label for="Unit" style="text-align: left;" class="col-sm-3 control-label"> Unit </label>
                            <div class="col-sm-9">
                                
                            </div>
                        </div> -->
                         
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                        <input type = "hidden" name = "action" id = "action"/>
                        <input type = "submit" name = "button_action" class = "button-start-the-quiz" id = "button_action" value = "Add Audio" />
                        <span id="span-val" class="span-validation"></span> 
                        </div>

                    </div>
                
                </form>
            </div>
        <!-- End of div Modal Body -->

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    
        </div>
    </div>    
</div>
<!--====================================================================================================================
    END OF MODAL STUDENT TABLEDIV
======================================================================================================================-->

            <div class = "col-sm-3 text-right">
                <form class=" "  method="POST">
                        <div class="form-group">
                            <label> Search Audios Here</label>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" name ="search_Vocabulary_Audio" id ="search_Vocabulary_Audio" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn green" type="button">Go!</button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </div>
                    </form>
            </div>
<!--=============================================================================================================================
    START OF TABLE SHOWING NEWS RESULT
===============================================================================================================================-->
            <div class="col-md-12" id = "Vocabulary_Audio_Table">
                 
            </div>  
<!--=============================================================================================================================
    END OF DIV SHOWING NEWS RESULT TABLE
===============================================================================================================================-->

<!-- Start of Div show Edit News -->

<div id = "Edit-Vocabulary-Audio-Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Edit Audio Here...</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                      
                    <div class="form-group" style="display: none;">
                        <label style="text-align: left;" class="col-sm-3 control-label"> ID </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Edit_Vocabulary_Audio_ID" id="Edit_Vocabulary_Audio_ID" placeholder="ID">
                        </div>
                    </div> 
                      <div class="form-group">
                          <label for="Book" style="text-align: left;" class="col-sm-3 control-label"> Book </label>
                            <div class="col-sm-9">
                               <select name="Edit_Vocabulary_Book" id = "Edit_Vocabulary_Book" class="form-control">
                                    <option value="Start-Up"> Start-Up </option>
                                    <option value="Open-Up"> Open-Up </option>
                                    <option value="Warm-Up"> Warm-Up </option>
                                    <option value="Run-Up"> Run-Up </option>
                                    <option value="Round-One"> Round-One </option>
                                    <option value="Round-Tow"> Round-Tow </option>
                                    <option value="Round-Three"> Round-Three </option>
                                    <option value="Round-Four"> Round-Four </option>
                                    <option value="Round-Five"> Round-Five </option>
                                    <option value="Round-Six"> Round-Six </option>
                                    <option value="Poineer"> Poineer </option>
                                    <option value="Poineer-Plus"> Poineer-Plus </option>
                                </select>
                            </div>
                        </div> 
                    
                      <div class="form-group">
                          <label for="Day" style="text-align: left;" class="col-sm-3 control-label"> Day </label>
                            <div class="col-sm-9">
                              <select name="Edit_Vocabulary_Day" id = "Edit_Vocabulary_Day" class="form-control">
                                   <option value="Day 1"> Day 1 </option>
                                   <option value="Day 2"> Day 2 </option>
                                   <option value="Day 3"> Day 3 </option>
                                   <option value="Day 4"> Day 4 </option>
                                   <option value="Day 5"> Day 5 </option>
                                   <option value="Day 6"> Day 6 </option>
                                   <option value="Day 7"> Day 7  </option>
                                   <option value="Day 8"> Day 8  </option>
                                   <option value="Day 9"> Day 9 </option>
                                   <option value="Day 10"> Day 10 </option>
                                   <option value="Day 11"> Day 11  </option>
                                   <option value="Day 12"> Day 12 </option>
                                   <option value="Day 13"> Day 13 </option>
                                   <option value="Day 14"> Day 14 </option>
                                   <option value="Day 15"> Day 15 </option>
                                   <option value="Day 16"> Day 16 </option>
                                   <option value="Day 17"> Day 17 </option>
                                   <option value="Day 18"> Day 18 </option>
                                   <option value="Day 19"> Day 19 </option>
                                   <option value="Day 20"> Day 20 </option>
                                   <option value="Day 21"> Day 21 </option>
                                   <option value="Day 22"> Day 22 </option>
                                   <option value="Day 23"> Day 23 </option>
                                   <option value="Day 24"> Day 24 </option>
                                   <option value="Day 25"> Day 25 </option>
                                   <option value="Day 26"> Day 26 </option>
                                   <option value="Day 27"> Day 27 </option>
                                   <option value="Day 28"> Day 28 </option>
                                   <option value="Day 29"> Day 29 </option>
                                   <option value="Day 30"> Day 30 </option>
                                   <option value="Day 31"> Day 31 </option>
                                   <option value="Day 32"> Day 32 </option>
                                   <option value="Day 33"> Day 33 </option>
                                   <option value="Day 34"> Day 34 </option>
                                   <option value="Day 35"> Day 35 </option>                           
                              </select>
                            </div>
                      </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="button-start-the-quiz" name="btn-edit-vocabulary-audio" id = "btn-edit-vocabulary-audio" > Update </button>
                        <span id="span-valid" class="span-validation"></span>
                        </div>
                    </div>
                    
                </form>
          
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> 

<!-- End of Div show Edit News -->

	</div>
<!-- END OF RIGHT SIDE BAR DIV -->
</div>
<!-- END OF ROW DIV -->
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<?php 
include('./Assets/_Partial Components/Footer.php');
?>