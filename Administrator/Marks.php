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
                <h1 style = "color: #2C3E50"> <small> Home <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Books </small></h1><hr>
                <ol class="breadcrumb">
                    <li style="color: #5C9BD1"><a href="index"> <i class = "fa fa-dashboard"></i>  Dashboard </a></li>
                    <li class = ""> <a href="javascript:;" data-toggle="modal" data-target="#Book_Data_Modal"> <i class = "fa fa-book"> </i> Add Books </a></li>
                </ol>
            </div>
            <div class = "col-sm-9">

            </div>
<!--=====================================================================================================================
    START OF MODAL DIV WE CAN REGISTER STUDENTS AND SUBMIT IT TO THE DATABASE
======================================================================================================================-->
<div id="Book_Data_Modal" class="modal Myfade" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel"> Add Book Here </h4>
        </div>

        <div class="modal-body">
            <form class="form-horizontal" method="POST" id = "Book_Form">
                      
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Name </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Full_Name" id="Full_Name" placeholder="Book Name">
                        </div>
                      </div>
                        <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Duration </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Duration" id="Duration" placeholder="Duration should given in days">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Fees </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Fees" id="Fees" placeholder="Fees">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Description </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Description" id="Description" placeholder="Description">
                        </div>
                      </div>
                      <div class="form-group">
                        
                            <label style="text-align: left;" class="col-sm-2 control-label"> Image </label>
                            <div class="col-sm-10">
                                <input type = "file" name = "Book_Image" id = "Book_Image"/>
                                
                            </div>
                        </div> 
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <input type = "hidden" name = "action" id = "action"/>
                        <input type = "submit" name = "button_action" class = "button-start-the-quiz Add_Book" id = "AddBooks" value = "AddBooks" />
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

<!--=============================================================================================================================
    START OF TABLE SHOWING NEWS RESULT
===============================================================================================================================-->
            <div class="col-md-12" id = "Books_Table">
                 <!-- id = "resultNews" -->
            </div>  
<!--=============================================================================================================================
    END OF DIV SHOWING NEWS RESULT TABLE
===============================================================================================================================-->

<!-- Start of Div show Edit News -->

<div id = "Edit-Book-Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Edit Book Here...</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST">
                      <div class="form-group"style = "display: none;">
                        <label style="text-align: left;" class="col-sm-2 control-label"> ID </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Book_Book_ID" id="Book_Book_ID" placeholder="Book ID">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Name </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Book_Book_Name" id="Book_Book_Name" placeholder="Book Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Duration </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Book_Duration" id="Book_Duration" placeholder="Duration">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Fees </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Book_Fees" id="Book_Fees" placeholder="Fees">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Description </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Book_Description" id="Book_Description" placeholder="Description">
                        </div>
                      </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="button-start-the-quiz" name="btn-edit-book" id = "btn-edit-book" > Update Data </button>
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