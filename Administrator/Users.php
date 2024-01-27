<?php 

include('./Assets/_Partial Components/Header.php');

?>
<?php 
            // if(isset($_POST['submit'])){
            //     $Full_Name = mysqli_real_escape_string($con, $_POST['Full_Name']);
            //     $Username = mysqli_real_escape_string($con, $_POST['Username']);
            //     $Username_trim = preg_replace('/\s+/','', $Username);
            //     $Password = mysqli_real_escape_string($con,  md5($_POST['Password']));
            //     $Email = mysqli_real_escape_string($con, $_POST['Email']);
            //     $Gender = mysqli_real_escape_string($con, $_POST['Gender']);
            //     $Phone_No = mysqli_real_escape_string($con, $_POST['Phone_No']);
            //     $Image = $_FILES['image']['name'];
            //     $Image_tmp = $_FILES['image']['tmp_name'];

            //     $chk_user = "select * from Users where Username = '$Username'";
            //     $chk_run_user = mysqli_query($con, $chk_user);

            //     $chk_email = "select * from Users where Email = '$Email'";
            //     $chk_run_email = mysqli_query($con, $chk_email);

            //     if(empty($Full_Name) or empty($Username) or empty($Password) or empty($Email) or empty($Gender) or empty($Phone_No) or empty($Image)){
            //         $error = "All fields required";
                    
            //     }
            //     else if($Username != $Username_trim){
            //         $error = "Username Should not contain any spaces";
            //     }
            //     else if(mysqli_num_rows($chk_run_user)>0){
            //         $error = "Username Already exist try new one";
            //     }
            //     else if(mysqli_num_rows($chk_run_email)>0){
            //         $error_email = "Email Already exist try new one";
            //      }
            //     else{
            //         $insert_query = "insert into Users(Full_Name, Username, Password, Email, Language, Gender, Phone_No, Image) values('$Full_Name', '$Username', '$Password', '$Email', 'English', '$Gender', '$Phone_No', '$Image')";
            //         if(mysqli_query($con, $insert_query)){
            //             move_uploaded_file($Image_tmp, "img/_ProfilePicture/$Image");
            //             $msg = "Registration Successfull";

            //         }
            //         else{
            //             $error = "User Not Registred";
            //         }
            //     }
            // }
        ?>      <?php 
                    // if (isset($error)) {
                    //     echo "<span style = 'color: orange; font-size: 15px;' class = 'pull-right'> $error </span>";
                    // }
                    // else if (isset($msg)) {
                    //     echo "<span style = 'color: green;' class = 'pull-right'> $msg </span>";
                    // }
                    
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
            <div class = "col-md-5" style="background: ">
                <h1 style = "color: #2C3E50"> <small> Home <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Users </small></h1>
            </div>
                <div class = "col-md-7 text-right">
                    <form class=" "  method="POST">
                        <div class="form-group">
                            <label> Search Users Here</label>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" name ="searchUser" id ="searchUser" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn green" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <hr>
            <div class="col-sm-12">
                 <ol class="breadcrumb">
                    <li style="color: #5C9BD1"><a href="index"> <i class = "fa fa-dashboard"></i>  Dashboard </a></li>
                    <li class = ""> <a href="javascript:;" data-toggle="modal" data-target="#User_Data_Modal"> <i class = "fa fa-plus"> </i> Register User </a></li>
                    <li class = "text-right" style="text-align:right;"> 
                        <!-- <div class = "col-sm-8" style="float:right"> -->
                    <div class="col-md-2" style="text-align: right;">
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                              <span> <i class="fa fa-cog"></i> </span> Action 
                            </button> 
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"> Archive </a></li>
                                <li><a class="dropdown-item" href="#"> Delete </a></li>
                            </ul>
                        </div>
                    </div> 
                    <!-- <div class="col-md-" style="margin-left: 0px; padding-left: 0px;"> -->
                        <button class="btn btn-secondary btn-sm" type="button" data-toggle="modal" data-target="#News_Data_Modal">
                        <span> <i class="fa fa-cog"></i> </span> Filter </button> 
                    <!-- </div>
                    <div class="col-md-" style="margin-left: 0px; padding-left: 0px;"> -->
                        <button class="btn btn-secondary btn-sm" type="button" data-toggle="modal" data-target="#News_Data_Modal">
                        <span> <i class="fa fa-cog"></i> </span> Group by </button> 
                    <!-- </div>
                    <div class="col-md-" style="margin-left: 0px; padding-left: 0px;"> -->
                        <button class="btn btn-secondary btn-sm" type="button" data-toggle="modal" data-target="#News_Data_Modal">
                        <span> <i class="fa fa-cog"></i> </span> Favorite </button> 
                    <!-- </div> -->
                <!-- </div> -->
            </li>
                </ol>
            </div>
            <div class = "col-sm-9">

            </div>
<!--=====================================================================================================================
    START OF MODAL DIV WE CAN REGISTER STUDENTS AND SUBMIT IT TO THE DATABASE
======================================================================================================================-->
<div id="User_Data_Modal" class="modal Myfade" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel"> Add Users Here </h4>
        </div>

        <div class="modal-body">
            <form class="form-horizontal" method="POST" id = "UserForm">
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Full Name </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Full_Name" id="Full_Name" placeholder="Username ">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Username </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Username" id="Username" placeholder="Username ">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Password </label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name = "Password" id="Password" placeholder="Password">
                        </div>
                      </div>
                        <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Email </label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name = "Email" id="Email" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="input Gender" class="col-sm-2"> Gender </label>
                          <div class="col-sm-10">
                            <select name="Gender" class="form-control" id = "Gender">
                            <option value="Male"> Male </option>
                            <option value="Female"> Female </option>
                            </select>
                          </div>
                        </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Phone No </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Phone_No" id="Phone_No" placeholder="Phone Number">
                        </div>
                      </div> 
                      <div class="form-group">
                            <label style="text-align: left;" class="col-sm-2 control-label"> File </label>
                            <div class="col-sm-10">
                                <input type = "file" name = "User_Image" id = "User_Image"/>
                                
                            </div>
                        </div>  
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <input type = "hidden" name = "action" id = "action"/>
                        <input type = "submit" name = "button_action" class = "button-start-the-quiz" id = "button_action" value = "Register User" />
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
<!--       <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>Validation</h3>
        <a class="d-flex align-items-center" href="../forms/validation/">Documentation</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example m-0 border-0">
        <form class="row g-3">
          <div class="col-md-4">
            <label for="validationServer01" class="form-label">First name</label>
            <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationServer02" class="form-label">Last name</label>
            <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationServerUsername" class="form-label">Username</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend3">@</span>
              <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required>
              <div class="invalid-feedback">
                Please choose a username.
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <label for="validationServer03" class="form-label">City</label>
            <input type="text" class="form-control is-invalid" id="validationServer03" required>
            <div class="invalid-feedback">
              Please provide a valid city.
            </div>
          </div>
          <div class="col-md-3">
            <label for="validationServer04" class="form-label">State</label>
            <select class="form-select is-invalid" id="validationServer04" required>
              <option selected disabled value="">Choose...</option>
              <option>...</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid state.
            </div>
          </div>
          <div class="col-md-3">
            <label for="validationServer05" class="form-label">Zip</label>
            <input type="text" class="form-control is-invalid" id="validationServer05" required>
            <div class="invalid-feedback">
              Please provide a valid zip.
            </div>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
              <label class="form-check-label" for="invalidCheck3">
                Agree to terms and conditions
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
          </div>
        </form>
        </div></div>
      </div>
 -->
            
<!--=============================================================================================================================
    START OF TABLE SHOWING NEWS RESULT
===============================================================================================================================-->
            <div class="col-md-12" id = "User_Table">
                 <!-- id = "resultNews" -->
            </div>  


<!--=============================================================================================================================
    END OF DIV SHOWING NEWS RESULT TABLE
===============================================================================================================================-->

<!-- Start of Div show Edit News -->

<div id = "Edit-User-Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Edit User Here...</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" id = "News_For">
                      <div class="form-group" style = "display: none;">
                        <label style="text-align: left;" class="col-sm-2 control-label"> ID </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "User_User_ID" id="User_User_ID" placeholder="ID">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Full Name </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "User_Full_Name" id="User_Full_Name" placeholder="Full Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Username </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "User_Username" id="User_Username" placeholder="Username">
                        </div>
                      </div>
                        <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Password </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "User_Password" id="User_Password" placeholder="Password">
                        </div>
                      </div>
                        <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Email </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "User_Email" id="User_Email" placeholder="Email">
                        </div>
                      </div>
                     <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Gender </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "User_Gender" id="User_Gender" placeholder="Geder">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Phone No </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "User_Phone_No" id="User_Phone_No" placeholder="Phone No">
                        </div>
                      </div>
                      <!-- <div class="form-group">
                          <label for="Book" style="text-align: left;" class="col-sm-2 control-label"> Role </label>
                            <div class="col-sm-10">
                              <select name="User_Role_ID" id = "User_Role_ID" class="form-control">
                              <?php 
                               // $Role = $mtd->getRole();
                                  // if(!$Role){
                                      // echo "<option value=''> Role Table Not Exist! </option>";
                                    // }
                                    // else{
                                      // if($Role->num_rows>0){
                                        // while ($result = $Role->fetch_assoc()) { ?>
                                              
                                        <option value="<?php 
                                        // echo $result['Role_ID']; ?>"> 
                                        <?php 
                                        // echo $result['Role']; ?> </option>
                                <?php 
                              // }}
                                      // else{
                                        // echo "<option value=''> Role Table is empty </option>"; 
                                        // }} ?>
                              </select>
                            </div>
                        </div> -->
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="button-start-the-quiz" name="btn-edit-user" id = "btn-edit-user" > Update Data </button>
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

<!-- End of Div show Edit Users -->

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