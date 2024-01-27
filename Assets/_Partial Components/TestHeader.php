<?php
ob_start();
session_start();
$filepath = realpath(dirname(__FILE__));
include_once($filepath.'/Database.php');
include_once($filepath.'/Format.php');
include_once($filepath.'/Method.php');
include_once($filepath.'/Users.php');
spl_autoload_register(function($class){
include_once "_Partial Components/".$class.".php";
});
$db = new Database();
$fm = new Format();
$usr = new Users();
$mtd = new Method();

// if(!isset($_SESSION['Username'])){
//     header('Location: sign in.php');
// }
?>
<!DOCTYPE html>
<html>
<head>
    <title> Change English Center </title>
  <meta charset="utf-16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--   <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link href = "Assets/img/icons/Training_96px.png" rel="icon" type="image/png" >
    <link href = "./Assets/CSS/bootstrap.css" rel="stylesheet" type = "text/css">
    <link href = "./Assets/CSS/bootstrap.min.css" rel="stylesheet" type = "text/css">
    <!-- <link href = "./Assets/CSS/Change_Admin_Panel" rel="stylesheet" type = "text/css"> -->
    

    <link href = "./Assets/CSS/font-awesome.css" rel="stylesheet" type = "text/css">
    <link href = "./Assets/CSS/font-awesome.min.css" rel="stylesheet" type = "text/css">
    <link href = "./Assets/CSS/Change_Course_Style.css" rel="stylesheet" type = "text/css">
    <link href = "./Assets/CSS/carousel.css" rel="stylesheet" type = "text/css">
    <!-- <link href = "./Assets/CSS/bootstrap.min.css" rel="stylesheet" type = "text/css">   -->

    <link href = "./Assets/js/owl.carousel.min.css" rel = "Stylesheet" type = "text/css"/>
    
    <!-- <link href = "./Assets/CSS/owl.theme.default.min.css" rel = "Stylesheet" type = "text/css"/> -->
    <script type = "text/javascript" src = "./Assets/js/jquery.js"></script>
    <script type = "text/javascript" src = "./Assets/js/bootstrap.js"></script>
    <script type = "text/javascript" src = "./Assets/js/popper.min.js"></script>
    <script type = "text/javascript" src = "./Assets/js/bootstrap.min.js"></script>
    <script type = "text/javascript" src = "./Assets/js/sweetalert.min.js"></script> 
    
    
    
    <script type = "text/javascript" src = "./Assets/js/Change.js"></script>
    <script type = "text/javascript" src = "./Assets/js/AjaxSearch.js"></script>

    
      <!-- <script type="text/javascript">
      $(function () {
        $('.mobile-nav').click(function() {
          $('.nav-left-side').toggleClass('visible'); 
        })
      })
    </script>

    <script type="text/javascript">
            $(document).ready(function(){
                $(function(){
                    $(this).bind("contextmenu", function(event){
                        event.preventDefault();
                        // alert("Right click is disabled due to security issue");
                    });
                });
            });
        </script>  -->
</head>
<body>
    
    <script type = " text/javascript" src="./Assets/Owl-js/jquery.min.js"></script>
    <script type = " text/javascript" src="./Assets/Owl-js/owl.carousel.js"></script> 


<!-- navbar-fixed-top -->
<script type="text/javascript">
    // swal("Good job!", "You clicked the button!", "success");
</script>
<nav class="navbar navbar-inverse navbar-static-top" style = "background-color: rgb(0,33,71); margin-bottom: 0px; border-color: rgb(0,33,71);">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" id="btn-top-navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-bran" href="index.php">
          <div class = "col-xs-9" id = "div-quiz" style="padding-top: 5px;"><img src="Assets/img/Logo/CELC.png" alt="Logo" width="100px"></div> 
          </a>
           
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav" id="top-navbar" >
          <li class="dropdown dropdown-user">
                <a href="javascrip:;" class="dropdown-toggle Research-Dropdown" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <span> RESEARCH </span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <?php 
                       $Research = $mtd->getResearch();
                          if(!$Research){
                              echo "<li> <a href = '#'> No Data In Research Table</a> </li>";
                            }
                            else{
                              if($Research->num_rows>0){
                                while ($result = $Research->fetch_assoc()) {
                                $ecrypt_1 = (($result['Research_ID']*123456789*9999)/999999);
                                $Research_link = "Research?id=".urlencode(base64_encode($ecrypt_1)); ?>
                                <li>
                                    <a href="<?=$Research_link;?>" class = "small-nav">
                                        <?php echo $result['Heading']; ?> </a>
                                </li>
                                <li class="divider"> </li>
                        <?php 
                      }}
                      else{
                        echo "<li> <a href = '#'> No Data In Research Table</a> </li>";
                        }} ?>   
                </ul>
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
            <li><a href="About-us" id="list"><i class="fa fa-info"></i> ABOUT </a></li>
            <li><a href="Contact-us" id = "list"><i class="fa fa-phone"></i> CONTACT US </a></li>
            <li><a href="Result" id = "list"><i class="fa fa-pen"></i> EXAM RESULT </a></li>
            <?php 
            if(isset($_SESSION['Change_Role_ID'])){
            $Username = $_SESSION['Change_Username'];
            $UsersByUsername = $mtd->getUsersByUsername($Username);
            $row = $UsersByUsername->fetch_assoc();
            if($row['Role_ID']=='1'){?> 
            <li><a href="Administrator/index.php" id = "list"> ADMIN PANEL </a></li>
            <?php 
            }}?>
          </ul>
          <ul class="nav navbar-nav navbar-right" id = "top-navbar">
              <?php
            if(!isset($_SESSION['Change_Role_ID'])){?>
            <li id = "list"><a href="sign in.php"><i class= "fa fa-user"></i> sign in </a></li>
                <?php }?>
            <li class="dropdown">
             
            <?php 
            if(isset($_SESSION['Change_Role_ID'])){ 
                $Username = $_SESSION['Change_Username'];
                $UsersByUsername = $mtd->getUsersByUsername($Username);
                $row = $UsersByUsername->fetch_array();
                $profile_img = $row['Image'];
            ?>

            <li class="dropdown dropdown-user" id = "top-navbar">
                <a href="javascript:;" class="dropdown-toggle" id = "list" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    
                    <?php 
                    if($row['Image']=null){
                        echo "<img alt='' class='img-circle' width='30px;' height = '30px' src='Assets/img/_Profile_Picture/$profile_img ' style = 'margin-top: -5px; margin-bottom: -5px;' />";
                    }
                    else{
                        echo " S  ";
                    }
                     ?>
                        <span class="username username-hide-on-mobile"> 
                        <?php 
                        echo $_SESSION['Change_Full_Name']; ?> </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a id = "dropdown-profile" href="Profile">
                            <img src='Assets/img/icons/Admin_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> My Profile </a>
                        </li>
                        <li class="divider li-dropdown" id = "li-dropdown"> </li>
                        <li id = "li-dropdown">
                            <a href="Semester-audios"> <img src='Assets/img/icons/Exit_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> Semester Audios </a>
                        </li>
                        <li class="divider" id = "li-dropdown"> </li>
                        <li id = "li-dropdown">
                            <a href="#" class = "edit-profile" data-toggle="modal" data-target="#Edit-User-Modal"> <img src='Assets/img/icons/Edit Row_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> Edit Profile </a>
                        </li>
                        <li class="divider" id = "li-dropdown"> </li>
                        <li class="li-dropdown"   id = "li-dropdown">
                            <a href="javascript:;" data-toggle="modal" data-target="#Reading-Book-Data-Modal"> <img src='Assets/img/icons/Study_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> Reading </a>
                        </li>
                        <li class="divider" id = "li-dropdown"> </li>
                        <li class="li-dropdown"  id = "li-dropdown">
                            <a href="javascript:;" data-toggle="modal" data-target="#Listening-Book-Data-Modal"> <img src='Assets/img/icons/Radio Station_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> Listening </a>
                        </li>
                        <li class="divider" id = "li-dropdown"> </li>
                        <li class="li-dropdown"  id = "li-dropdown">
                            <a href="javascript:;" data-toggle="modal" data-target="#Grammer-Book-Data-Modal"> <img src='Assets/img/icons/Spellcheck_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> Grammer </a>
                        </li>
                        <li class="divider" id = "li-dropdown"> </li>
                        <li class="li-dropdown"  id = "li-dropdown">
                            <a href="javascript:;" data-toggle="modal" data-target="#Vocabulary-Book-Data-Modal"> <img src='Assets/img/icons/Translation_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> Vocabulary </a>
                        </li>
                        <li class="divider" id = "li-dropdown"> </li>
                        <li class="li-dropdown"  id = "li-dropdown">
                            <a data-toggle="modal" data-target="#Change-Password-User-Modal"> <img src='Assets/img/icons/Password Reset_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> Change Password</a>
                        </li>
                        <li class="divider"> </li>
                        <li class="li-dropdown">
                            <a href="logout.php"> <img src='Assets/img/icons/Exit_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> Logout </a>
                        </li>

                    </ul>
                </li>
            <?php 
            } ?>
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <?php 
       if(isset($_SESSION['Change_Role_ID'])){
            $UsersByUsername = $mtd->getUsersByUsername($Username);

            $result = $UsersByUsername->fetch_array();
            $user_img = $result['Image'];}?>   
        <!-- Start of Div show Edit User -->
        <div id = "Edit-User-Modal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Edit Users Here...</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" id = "User_Update_Form">
                          
                          <div class="form-group">
                            <label style="text-align: left;" class="col-sm-2 control-label"> Full Name </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="<?php echo $result['Full_Name'];?>" name = "Full_Name" id="Full_Name" placeholder="Full Name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label style="text-align: left;" class="col-sm-2 control-label"> Username </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="<?php echo $result['Username'];?>" name = "Username" id="Username" placeholder="Username">
                            </div>
                          </div>
                          <div class="form-group">
                            <label style="text-align: left;" class="col-sm-2 control-label"> Email </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="<?php echo $result['Email'];?>" name = "Email" id="Email" placeholder="Email">
                            </div>
                          </div>
                            <div class="form-group">
                            <label style="text-align: left;" class="col-sm-2 control-label"> Gender </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="<?php echo $result['Gender'];?>" name = "Gender" id="Gender" placeholder="Gender">
                            </div>
                          </div>
                            <div class="form-group">
                            <label style="text-align: left;" class="col-sm-2 control-label"> Phone No </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="<?php echo $result['Phone_No'];?>" name = "Phone_No" id="Phone_No" placeholder="Phone No">
                            </div>
                          </div>
                         
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="button-start-the-quiz" name="tn-edit-profile" id = "btn-edit-profile" > Update </button>
                            <span id="span-user-valid" class="span-validation"></span>
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
    <!-- Start of Div Reading Books -->
    <div id = "Reading-Book-Data-Modal" class="modal fade">
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

    <!-- Start of Div Listening Book -->
    <div id = "Listening-Book-Data-Modal" class="modal fade">
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
                            $Listening_link = "Listening?id=".urlencode(base64_encode($ecrypt_1));?>
                            <a href="<?=$Listening_link;?>"> <img src='Assets/img/icons/Book Shelf_48px.png' alt='' class='img-cicle' width='20px' height='20px'/><?php echo $result['Book_Name']; ?>  </a>
                        
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
    <!-- End of Div Listening -->

    <!-- Start of Div Grammer Books -->
        <div id = "Grammer-Book-Data-Modal" class="modal fade">
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
                            $Grammer_link = "Grammer?id=".urlencode(base64_encode($ecrypt_1));?>
                            <a href="<?=$Grammer_link;?>"> <img src='Assets/img/icons/Book Shelf_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> <?php echo $result['Book_Name']; ?>  </a>
                        
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
    <!-- End of Div Grammer Book -->

    <!-- Start of Div Vocabulary Books -->
        <div id = "Vocabulary-Book-Data-Modal" class="modal fade">
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
                            $Vocabulary_link = "Vocabulary?id=".urlencode(base64_encode($ecrypt_1));?>
                            <a href="<?=$Vocabulary_link;?>"> <img src='Assets/img/icons/Book Shelf_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> <?php echo $result['Book_Name']; ?>  </a>
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
    <!-- End of Div Vocabulary Book -->
    <!-- Start of Div show Edit News -->
    <div id = "Change-Password-User-Modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Edit your Password </h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" id = "User_Update_Form">
                          
                          <div class="form-group" style = "display: none;">
                            <label style="text-align: left;"  class="col-sm-2 control-label"> ID </label>
                            <div class="col-sm-10">
                              <input type="text" value="<?php echo $result['User_ID'];?>" class="form-control" name = "User_ID" id="User_ID" placeholder="Full Name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label style="text-align: left;"  class="col-sm-3 control-label"> New Password </label>
                            <div class="col-sm-9">
                              <input type="text" value="" class="form-control" name = "Password" id="Password" placeholder="Type New Password here">
                            </div>
                          </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="button-start-the-quiz" name="btn-edit-password" id = "btn-edit-password" > Update </button>
                            <span id="span-valid-password" class="span-validation"></span>
                            </div>

                        </div>
                        
                    </form>
              
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss = "modal">Close</button>
                </div>
            </div>
        </div>
    </div> 
    <!-- End of Div show Edit Users -->
<!--     <script src="./Assets/js/jquery.js"></script>
    <script src="./Assets/js/transition.js"></script>
    <script src="./Assets/js/bootstrap.min.js"></script>
    <script src="./Assets/js/bootstrap.js"></script>
    <script src="./Assets/js/tooltip.js"></script>
    <script src="./Assets/js/affix.js"></script>
    <script src="./Assets/js/alert.js"></script>
    <script src="./Assets/js/button.js"></script>
    <script src="./Assets/js/carousel.js"></script>
    <script src="./Assets/js/collapse.js"></script>
    
 -->