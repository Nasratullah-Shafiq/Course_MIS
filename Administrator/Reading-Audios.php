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
                <h1 style = "color: #2C3E50"> <small> Home <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Reading Audios </small></h1><hr>
                 <ol class="breadcrumb">
                    <li style="color: #5C9BD1"><a href="index"> <i class = "fa fa-dashboard"></i>  Dashboard </a></li>
                    <li class = ""> <a href="javascript:;" data-toggle="modal" data-target="#Reading_Audio_Data_Modal">  <img alt="" class="img-circle" width="17px" height = "17px" src = "../Assets/img/icons/Audio_26px.png" />  Add Audio </a></li>
                </ol>
            </div>
            <div class = "col-sm-9">

            </div>
<!--=====================================================================================================================
    START OF MODAL DIV WE CAN REGISTER STUDENTS AND SUBMIT IT TO THE DATABASE
======================================================================================================================-->
<div id="Reading_Audio_Data_Modal" class="modal Myfade" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel"> Add Reading Audio Here </h4>
        </div>

        <div class="modal-body">
            <form class="form-horizontal" method="POST" id = "Reading_Audio_Form"  enctype="multipart/form-data">
                      
             <div class="form-group">
                        
                    <label style="text-align: left;" class="col-sm-3 control-label"> Audio </label>
                    <div class="col-sm-9">
                        <input type = "file" name = "Reading_Audio" id = "Reading_Audio"/>
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
                    
                      <div class="form-group">
                          <label for="Unit" style="text-align: left;" class="col-sm-3 control-label"> Unit </label>
                            <div class="col-sm-9">
                              <select name="Reading_Unit" id = "Reading_Unit" class="form-control">
                                   <option value="Unit 1"> Unit One  </option>
                                   <option value="Unit 2"> Unit Tow  </option>
                                   <option value="Unit 3"> Unit Three  </option>
                                   <option value="Unit 4"> Unit Four  </option>
                                   <option value="Unit 5"> Unit Five  </option>
                                   <option value="Unit 6"> Unit Six  </option>
                                   <option value="Unit 7"> Unit Seven  </option>
                                   <option value="Unit 8"> Unit Eight  </option>
                                   <option value="Unit 9"> Unit Nine  </option>
                                   <option value="Unit 10"> Unit Ten  </option>
                                   <option value="Unit 11"> Unit Eleven  </option>
                                   <option value="Unit 12"> Unit Twelve  </option>
                                   <option value="Unit 13"> Unit Thirteen  </option>
                                   <option value="Unit 14"> Unit Fourteen  </option>
                                   <option value="Unit 15"> Unit Fifteen  </option>
                                   <option value="Unit 16"> Unit Sixteen  </option>
                                   <option value="Unit 17"> Unit Seventeen  </option>
                                   <option value="Unit 18"> Unit Eighteen  </option>
                                   <option value="Unit 19"> Unit Ninteen  </option>
                                   <option value="Unit 20"> Unit Twenty  </option>
                                   <option value="Unit 21"> Unit Twenty One  </option>
                                   <option value="Unit 22"> Unit Twenty Tow  </option>
                                   <option value="Unit 23"> Unit Twenty Three  </option>
                                   <option value="Unit 24"> Unit Twenty Four  </option>
                                   <option value="Unit 25"> Unit Twenty Five  </option>
                                   <option value="Unit 26"> Unit Twenty Six  </option>
                                   <option value="Unit 27"> Unit Twenty Seven  </option>
                                   <option value="Unit 28"> Unit Twenty Eight  </option>
                                   <option value="Unit 29"> Unit Twenty Nine  </option>
                                   <option value="Unit 30"> Unit Thirty  </option>
                                   <option value="Unit 31"> Unit Thirty One  </option>
                                   <option value="Unit 32"> Unit Thirty Tow  </option>
                                   <option value="Unit 33"> Unit Thirty Three  </option>
                                   <option value="Unit 34"> Unit Thirty Four  </option>
                                   <option value="Unit 35"> Unit Thirty Five  </option>
                              </select>
                            </div>
                        </div>
                         
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                        <input type = "hidden" name = "action" id = "action"/>
                        <input type = "submit" name = "button_action" class = "button-start-the-quiz" id = "button_action" value = "Add Audio" />
                        
                        <div id = "loader-icon" style = "display: none;">Uploading <img src="./../Assets/img/ajax-loader.gif"/></div>
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


<!--====================================================================================================================
    END OF MODAL STUDENT TABLEDIV
======================================================================================================================-->

            <div class = "col-sm-3 text-right">
                <form class=" "  method="POST">
                        <div class="form-group">
                            <label> Search Audios Here</label>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" name ="search_Reading_Audio" id ="search_Reading_Audio" placeholder="Search for...">
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
            <div class="col-md-12" id = "Reading_Audio_Table">
                 
            </div>  
<!--=============================================================================================================================
    END OF DIV SHOWING NEWS RESULT TABLE
===============================================================================================================================-->

<!-- Start of Div show Edit News -->

<div id = "Edit-Reading-Audio-Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Edit Reading Audio Here...</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                      
                    <div class="form-group" style="display: none;">
                        <label style="text-align: left;" class="col-sm-3 control-label"> ID </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Edit_Reading_Audio_ID" id="Edit_Reading_Audio_ID" placeholder="ID">
                        </div>
                    </div> 
                      <div class="form-group">
                          <label for="Book" style="text-align: left;" class="col-sm-3 control-label"> Book </label>
                            <div class="col-sm-9">
                                <select name="Edit_Reading_Book" id = "Edit_Reading_Book" class="form-control">
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
                          <label for="Unit" style="text-align: left;" class="col-sm-3 control-label"> Unit </label>
                            <div class="col-sm-9">
                                <select name="Edit_Reading_Unit" id = "Edit_Reading_Unit" class="form-control">
                                   <option value="Unit 1"> Unit One  </option>
                                   <option value="Unit 2"> Unit Tow  </option>
                                   <option value="Unit 3"> Unit Three  </option>
                                   <option value="Unit 4"> Unit Four  </option>
                                   <option value="Unit 5"> Unit Five  </option>
                                   <option value="Unit 6"> Unit Six  </option>
                                   <option value="Unit 7"> Unit Seven  </option>
                                   <option value="Unit 8"> Unit Eight  </option>
                                   <option value="Unit 9"> Unit Nine  </option>
                                   <option value="Unit 10"> Unit Ten  </option>
                                   <option value="Unit 11"> Unit Eleven  </option>
                                   <option value="Unit 12"> Unit Twelve  </option>
                                   <option value="Unit 13"> Unit Thirteen  </option>
                                   <option value="Unit 14"> Unit Fourteen  </option>
                                   <option value="Unit 15"> Unit Fifteen  </option>
                                   <option value="Unit 16"> Unit Sixteen  </option>
                                   <option value="Unit 17"> Unit Seventeen  </option>
                                   <option value="Unit 18"> Unit Eighteen  </option>
                                   <option value="Unit 19"> Unit Ninteen  </option>
                                   <option value="Unit 20"> Unit Twenty  </option>
                                   <option value="Unit 21"> Unit Twenty One  </option>
                                   <option value="Unit 22"> Unit Twenty Tow  </option>
                                   <option value="Unit 23"> Unit Twenty Three  </option>
                                   <option value="Unit 24"> Unit Twenty Four  </option>
                                   <option value="Unit 25"> Unit Twenty Five  </option>
                                   <option value="Unit 26"> Unit Twenty Six  </option>
                                   <option value="Unit 27"> Unit Twenty Seven  </option>
                                   <option value="Unit 28"> Unit Twenty Eight  </option>
                                   <option value="Unit 29"> Unit Twenty Nine  </option>
                                   <option value="Unit 30"> Unit Thirty  </option>
                                   <option value="Unit 31"> Unit Thirty One  </option>
                                   <option value="Unit 32"> Unit Thirty Tow  </option>
                                   <option value="Unit 33"> Unit Thirty Three  </option>
                                   <option value="Unit 34"> Unit Thirty Four  </option>
                                   <option value="Unit 35"> Unit Thirty Five  </option>
                              </select>
                            </div>
                        </div>
                         
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="button-start-the-quiz" name="btn-edit-reading-audio" id = "btn-edit-reading-audio" > Update </button>
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