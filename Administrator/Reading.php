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
                <h1 style = "color: #2C3E50"> <small> Home <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Reading </small></h1><hr>
                 <ol class="breadcrumb">
                    <li style="color: #5C9BD1"><a href="index"> <i class = "fa fa-dashboard"></i>  Dashboard </a></li>
                    <li class = ""> <a href="javascript:;" data-toggle="modal" data-target="#Reading_Data_Modal">  <i class = "fa fa-list"></i> Add Reading </a></li>
                  </ol>
            </div>
            <div class = "col-sm-9">

            </div>
<!--=====================================================================================================================
    START OF MODAL DIV WE CAN REGISTER STUDENTS AND SUBMIT IT TO THE DATABASE
======================================================================================================================-->
<div id="Reading_Data_Modal" class="modal Myfade" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel"> Add Reading Here </h4>
        </div>
        <div class="modal-body">
             <form class="form-horizontal" method="POST" id = "Reading_Form">
                      
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label"> Body </label>
                        <div class="col-sm-9">
                          <textarea id="Body" col="30" rows="5" class="form-control" name="Body" ></textarea>
                        </div>
                      </div>
                        <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label"> Question </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Question" id="Question" placeholder="Question">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label">1st Answer </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "First_Answer" id="First_Answer" placeholder="First Answer">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label">2nd Answer </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Second_Answer" id="Second_Answer" placeholder="Second Answer">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label">3rd Answer </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Third_Answer" id="Third_Answer" placeholder="Third Answer">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label"> 4rth Answer </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Fourth_Answer" id="Fourth_Answer" placeholder="Fourth Answer">
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="Book" style="text-align: left;" class="col-sm-3 control-label"> Right Answer </label>
                            <div class="col-sm-9">
                              <select name="Right_Answer" id = "Right_Answer" class="form-control">
                                   <option value="0"> First Answer </option>
                                   <option value="1"> Second Answer </option>
                                   <option value="2"> Third Answer </option>
                                   <option value="3"> Fourth Answer </option>
                                   
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="Book" style="text-align: left;" class="col-sm-3 control-label"> Book </label>
                            <div class="col-sm-9">
                              <select name="Book_ID" id = "Book_ID" class="form-control">
                              <?php 
                               $Book = $mtd->getBook();
                                  if(!$Book){
                                      echo "<option value=''> Book Table Not Exist! </option>";
                                    }
                                    else{
                                      if($Book->num_rows>0){
                                        while ($result = $Book->fetch_assoc()) { ?>
                                              
                                        <option value="<?php echo $result['Book_ID']; ?>"> 
                                        <?php echo $result['Book_Name']; ?> </option>
                                <?php 
                              }}
                                      else{
                                        echo "<option value=''> Book Table is empty </option>"; 
                                        }} ?>
                              </select>
                            </div>
                        </div> 
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                        <input type = "hidden" name = "action" id = "action"/>
                        <input type = "submit" name = "button_action" class = "button-start-the-quiz" id = "button_action" value = "Add Reading" />
                          <span id="span-val" class="span-validation"></span> 
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
                            <label> Search Reading Here</label>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" name ="searchReading" id ="searchReading" placeholder="Search for...">
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
            <div class="col-md-12" id = "Reading_Table">
                 <!-- id = "resultReading" -->
            </div>  
<!--=============================================================================================================================
    END OF DIV SHOWING NEWS RESULT TABLE
===============================================================================================================================-->

<!-- Start of Div show Edit News -->

<div id = "Edit-Reading-Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Edit Reading Here...</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST">
                      <div class="form-group" style="display: none;">
                        <label style="text-align: left;" class="col-sm-3 control-label"> ID </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Reading_ID" id="Reading_ID" placeholder="ID">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label"> Body </label>
                        <div class="col-sm-9">
                          <textarea id="Reading_Body" col="30" rows="5" class="form-control" name="Reading_Body" ></textarea>
                        </div>
                      </div>
                        <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label"> Question </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Reading_Question" id="Reading_Question" placeholder="Question">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label">1st Answer </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Reading_First_Answer" id="Reading_First_Answer" placeholder="First Answer">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label">2nd Answer </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Reading_Second_Answer" id="Reading_Second_Answer" placeholder="Second Answer">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label">3rd Answer </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Reading_Third_Answer" id="Reading_Third_Answer" placeholder="Third Answer">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label"> 4rth Answer </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Reading_Fourth_Answer" id="Reading_Fourth_Answer" placeholder="Fourth Answer">
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="Right Answer" style="text-align: left;" class="col-sm-3 control-label"> Right Answer </label>
                            <div class="col-sm-9">
                              <select name="Reading_Right_Answer" id = "Reading_Right_Answer" class="form-control">
                                   <option value="1"> First Answer </option>
                                   <option value="2"> Second Answer </option>
                                   <option value="3"> Third Answer </option>
                                   <option value="4"> Fourth Answer </option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="Book" style="text-align: left;" class="col-sm-3 control-label"> Book </label>
                            <div class="col-sm-9">
                              <select name="Book_ID" id = "Reading_Book_ID" class="form-control">
                              <?php 
                               $Book = $mtd->getBook();
                                  if(!$Book){
                                      echo "<option value=''> Book Table Not Exist! </option>";
                                    }
                                    else{
                                      if($Book->num_rows>0){
                                        while ($result = $Book->fetch_assoc()) { ?>
                                              
                                        <option value="<?php echo $result['Book_ID']; ?>"> 
                                        <?php echo $result['Book_Name']; ?> </option>
                                <?php 
                              }}
                                      else{
                                        echo "<option value=''> Book Table is empty </option>"; 
                                        }} ?>
                              </select>
                            </div>
                        </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                        <button type="button" class="button-start-the-quiz" name="btn-edit-reading" id = "btn-edit-reading" > Update </button>
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
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<?php 
include('./Assets/_Partial Components/Footer.php');
?>