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
                <h1 style = "color: #2C3E50"> <small> Home <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Inbox </small></h1><hr>
                 <ol class="breadcrumb">
                    <li style="color: #5C9BD1"><a href="index.php"><i class = "fa fa-tachometer"></i> Dashboard </a></li>
                    <li class = ""> <a href="javascript:;" data-toggle="modal" data-target="#News_Data_Modal"> </li>
                </ol>
            </div>
            <div class = "col-sm-9">

            </div>

            <div class = "col-sm-3 text-right">
                <form class=" "  method="POST">
                        <div class="form-group">
                            <label> Search Mail Here</label>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" name ="searchMail" id ="searchMail" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn green" type="button">Go!</button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </div>
                    </form>
            </div>
<!--=============================================================================================================================
    START OF TABLE SHOWING ABOUT DATA RESULT
===============================================================================================================================-->
            <div class="col-md-12" id = "Mail_Data_Table">
                 <!-- id = "resultNews" -->
            </div> 
<!--=============================================================================================================================
    END OF DIV SHOWING ABOUT DATA RESULT
===============================================================================================================================-->

<!-- Start of view Data modal -->
<div id = "View_Mail_Data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Mail Details</h4>
            </div>
            <div class="modal-body" id = "View_Mail">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End of view Data modal -->

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