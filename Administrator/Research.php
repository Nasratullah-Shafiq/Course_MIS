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
                <h1 style = "color: #2C3E50"> <small> Home <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Research </small></h1><hr>
                 <ol class="breadcrumb">
                    <li style="color: #5C9BD1"><a href="index"> <i class = "fa fa-dashboard"></i>  Dashboard </a></li>
                    <li class = ""> <a href="javascript:;" data-toggle="modal" data-target="#Research_Data_Modal"> <i class = "fa fa-list-alt"> </i> Create Researh</a></li>
                </ol>
            </div>
            <div class = "col-sm-9">

            </div>
<!--=====================================================================================================================
    START OF MODAL DIV WE CAN CREATE NEWS AND SUBMIT IT TO THE DATABASE
======================================================================================================================-->
<div id="Research_Data_Modal" class="modal Myfade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel"> Add your Research </h4>
        </div>

        <div class="modal-body">
            <form class="form-horizontal" method="POST" id = "Research_Form">
                      
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Heading </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Heading" id="Heading" placeholder="Heading">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Body </label>
                        <div class="col-sm-10">
                          <textarea id="Body" col="30" rows="10" class="form-control" name="Body" ></textarea>

                        <!-- <input type="text" class="form-control" name = "Body" id="Body" placeholder="Body"> -->
                        
                              <!-- <textarea id="Body"></textarea> -->
                        
                        </div>
                      </div>
                      <div class="form-group" style="display:;">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Heading </label>
                        <div class="col-sm-10">
                          <input type="text" value = "<?php echo $_SESSION["Change_Username"]; ?>" class="form-control" name = "Full_Name" id="Full_Name" placeholder="Full_Name">
                        </div>
                      </div>
                        <div class="form-group">
                        
                            <label style="text-align: left;" class="col-sm-2 control-label"> Image </label>
                            <div class="col-sm-10">
                                <input type = "file" name = "Research_Image" id = "Research_Image"/>
                                
                            </div>
                        </div>  
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <input type = "hidden" name = "action" id = "action"/>
                        <input type = "submit" name = "button_action" class = "button-start-the-quiz" id = "button_action" value = "Add Research" />
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
    END OF MODAL DIV
======================================================================================================================-->

            <div class = "col-sm-3 text-right">
                <form class=" "  method="POST">
                        <div class="form-group">
                            <label> Search Research Here</label>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" name ="searchResearch" id ="searchResearch" placeholder="Search for...">
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
            <div class="col-md-12" id = "Research_Table">
                 <!-- id = "resultNews" -->
            </div>  
<!--=============================================================================================================================
    END OF DIV SHOWING NEWS RESULT TABLE
===============================================================================================================================-->

<!-- Start of Div show Edit News -->

<div id = "Edit-Research-Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Edit Research Here...</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" id = "News_For">
                      <div class="form-group" style="display: none;">
                        <label style="text-align: left;" class="col-sm-2 control-label"> ID </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Research_Research_ID" id="Research_Research_ID" placeholder="Research ID">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Heading </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Heading" id="Research_Heading" placeholder="Heading">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Body </label>
                        <div class="col-sm-10">
                          <textarea id="Research_Body" col="30" rows="10" class="form-control" name="Research_Body" ></textarea>
                        </div>
                      </div>
                         
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="button-start-the-quiz" name="btn-edit-research" id = "btn-edit-research" > Update Data </button>
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

        <!-- </div> -->
    <!--END OF ROW DIV-->
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