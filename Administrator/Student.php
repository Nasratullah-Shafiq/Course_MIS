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
                <h1 style = "color: #2C3E50"> <small> Home <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Student </small></h1><hr>
                 <ol class="breadcrumb">
                    <li style="color: #5C9BD1"><a href="index"> <i class = "fa fa-dashboard"></i>  Dashboard </a></li>
                    <li class = ""> <a href="javascript:;" data-toggle="modal" data-target="#Student_Data_Modal"> <i class="fa-solid fa-facebook"></i> Register Student </a></li>
                </ol>
            </div>
            <div class = "col-sm-9">

            </div>
<!--=====================================================================================================================
    START OF MODAL DIV WE CAN REGISTER STUDENTS AND SUBMIT IT TO THE DATABASE
======================================================================================================================-->
<div id="Student_Data_Modal" class="modal Myfade" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel"> Add Student Here </h4>
        </div>

        <div class="modal-body">
            <form class="form-horizontal" method="POST" id = "Student_Form">
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Student ID </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "St_ID" id="St_ID" placeholder="Student ID">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Name </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Full_Name" id="Full_Name" placeholder="Student Name">
                        </div>
                      </div>
                        <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Father Name </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Father_Name" id="Father_Name" placeholder="Father Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Marks </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Marks" id="Marks" placeholder="Marks">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Grade </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Grade" id="Grade" placeholder="Grade">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Phone No </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Phone_No" id="Phone_No" placeholder="Phone Number">
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="Book" style="text-align: left;" class="col-sm-2 control-label"> Book </label>
                            <div class="col-sm-10">
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
                        <div class="col-sm-offset-2 col-sm-10">
                        <input type = "hidden" name = "action" id = "action"/>
                        <input type = "submit" name = "button_action" class = "button-start-the-quiz" id = "button_action" value = "Register Student" />
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
                            <label> Search Students Here</label>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" name ="searchStudent" id ="searchStudent" placeholder="Search for...">
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
            <div class="col-md-12" id = "Student_Table">
                 <!-- id = "resultNews" -->
            </div>  
<!--=============================================================================================================================
    END OF DIV SHOWING NEWS RESULT TABLE
===============================================================================================================================-->

<!-- Start of Div show Edit News -->

<div id = "Edit-Student-Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Edit Student Info Here...</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" id = "News_For">
                      <div class="form-group" style = "display: none;">
                        <label style="text-align: left;" class="col-sm-2 control-label"> ID </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Student_Student_ID" id="Student_Student_ID" placeholder="ID">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Student ID </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Student_St_ID" id="Student_St_ID" placeholder="Student ID">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Name </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Student_Full_Name" id="Student_Full_Name" placeholder="Full Name">
                        </div>
                      </div>
                        <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Father Name </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Student_Father_Name" id="Student_Father_Name" placeholder="Father Name">
                        </div>
                      </div>
                      
                        <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Phone No </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Student_Phone_No" id="Student_Phone_No" placeholder="Sourse">
                        </div>
                      </div>
                     <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Book </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Student_Book" id="Student_Book" placeholder="Sourse">
                        </div>
                      </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="button-start-the-quiz" name="btn-edit-student" id = "btn-edit-student" > Update Data </button>
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