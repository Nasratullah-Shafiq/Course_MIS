<?php
ob_start();
session_start();
// $filepath = realpath(dirname(__FILE__));
include_once('Database.php');
include_once('Format.php');
include_once('Method.php');
spl_autoload_register(function($class){
include_once "_Partial Components/".$class.".php";
});
$db = new Database();
$fm = new Format();
$mtd = new Method();


if(isset($_SESSION['Change_Role_ID']) && $_SESSION['Change_Role_ID']!='1'){
    header('location: ../sign in.php');
    die();
}

$TotalContact = $mtd->getTotalContactByStatus();
// if(isset($_SESSION['Username'])){ 
//     $Username = $_SESSION['Username'];
//     $UsersByUsername = $exm->getUsersByUsername($Username);
//     $row = $UsersByUsername->fetch_assoc();
//     if($row['Role_ID']=='2'){
//         header('Location: ../sign in.php');
//     }
// }
// else{
//     header('Location: ../index.php');
// }
if(!isset($_SESSION['Change_Username'])){
   header('Location: ../sign in.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>CHANGE Admin Panel</title>
  
    <meta charset="utf-16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link href = "../Assets/img/icons/Google_News_64.png" rel="icon" type="image/png" >
    <link href = "./Assets/CSS/bootstrap.min.css" rel=" stylesheet">
    <link href = "../Assets/CSS/animated.css" rel="stylesheet" >
    <link href = "./Assets/CSS/toast.css" rel="stylesheet" >
    <link href = "./Assets/CSS/Change_Admin_Panel.css" rel = "Stylesheet" type = "text/css"/>
       

    <!-- Bootstrap -->
    <link href = "../img/Graduation Cap_48px.png" rel="icon" type="image/png" >
<!--     <link href = "../Assets/CSS/font-awesome.css" rel="stylesheet">
    <link href = "../Assets/CSS/font-awesome.min.css" rel="stylesheet"> -->

    <link href = "../Assets/CSS/all.css" rel="stylesheet">
    <script src = "../Assets/CSS/all.js"></script>


    <!-- <link href = "../Assets/CSS/all.css" rel="stylesheet"> -->
    <!-- <link href = "../Assets/CSS/all.min.css" rel="stylesheet"> -->
    <!-- <link href = "../Assets/CSS/solid.css" rel="stylesheet"> -->
    <!-- <link href = "../Assets/CSS/solid.min.css" rel="stylesheet"> -->
    <!-- <link href = "../Assets/CSS/regular.min.css" rel="stylesheet"> -->
    <!-- <link href = "../Assets/CSS/regular.css" rel="stylesheet"> -->
    <!-- <link href = "../Assets/CSS/fontawesome.css" rel="stylesheet"> -->

    <!-- <link href = "../Assets/CSS/fontawesome.min.css" rel="stylesheet"> -->

    <link href = "../Assets/CSS/animated.css" rel="stylesheet" >
  
    <script src = "./Assets/js/AdminChange.js"></script>
    <script src = "./Assets/js/Checkbox.js"></script>    
    <script src = "./Assets/js/AjaxSearch.js"></script>
    <script src = "../Assets/js/sweetalert.min.js"></script>
<style>
.action{
    display: none;
}
.quantity{
    display: none;
}
</style>
   
</head>
<body >
    <script src="../Assets/js/plugins/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
<script src="./Assets/js/jquery.min.js"></script>
    <script>
      tinymce.init({
        selector: '#body';
      });
    </script>
    <script src = "./Assets/js/Checkbox.js"></script> 
    <nav class="navbar navbar-default navbar-static-top" style = "background-color: rgb(231,234,233); border: none; margin-bottom: 0px;">
      <div class="container-fluid" >
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" id="btn-top-navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-bran" href="../index.php">
          <div class = "col-xs-9" id = "div-quiz" style="padding-top: 5px;"><img src="../Assets/img/Logo/CELC-PNG.png" alt="Logo" width="100px"></div> 
          </a>   
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
        <ul class="nav navbar-nav navbar-right" id = "top-navar" style="color: rgb(255, 51, 0);">
            <!-- top navbar set all the color of the navbar -->
        <li style="color: #333;"><a href = "../index"><i class="fa fa-user"></i> Student Page </a></li>
           <li>
                <a href="Mail">
                <i class="fa fa-envelope" ></i> 
                <?php 
                if($TotalContact>0){
                    echo '<span class="badge danger" style="background-color: #E43A45; margin-left: -5px; margin-top: -15px;">'. $TotalContact .'</span>';
                }
                ?>
                </a> 
            </li>
          <?php
            if(!isset($_SESSION['Change_Role_ID'])){?>
            <li><a href="../sign in.php"><img alt="" class="img-circle" width="20px;" height = "20px" src="../Assets/img/user.png" /> sign in </a></li>
                <?php }?>
            <li class="dropdown">
             
            <?php if(isset($_SESSION['Change_Role_ID'])){ 
                $Full_Name = $_SESSION['Change_Full_Name'];
                $UsersByUsername = $mtd->getUsersByUsername($Full_Name);
                $row = $UsersByUsername->fetch_assoc();
                $profile_img = $row['Image'];
            ?>

            <li class="dropdown dropdown-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <?php echo "<img alt='' class='img-circle' width='30px;' height = '30px' src='../Assets/img/_Profile_Picture/$profile_img ' style = 'margin-top: -5px; margin-bottom: -5px;' />"; ?>
                        <span class="username username-hide-on-mobile"> 
                        <?php echo $_SESSION['Change_Full_Name']; ?> </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default" id="dropdown-profile">
                        <li >
                            <a id = "dropdown-profile-admin" href="../Profile.php">
                            <i class="fa fa-user" ></i> My Profile </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a id = "dropdown-profile-admin" href="Mail.php">
                            <i class="fa fa-envelope" ></i> My inbox </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a id = "dropdown-profile-admin" href="../Logout.php">
                            <i class="fa fa-power-off"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
            <?php } ?>
                     
            <nav class="nav-admin-panel-top"> 
                 <div class="Accordion-container">
        <div class="set">
            <a href="index.php"> <i class = "fa fa-tachometer" > </i> Dashboard  </a>
        </div>
        <div class="set">
            <a href="#"> <i class = "fa fa-list-alt"> </i> Advertisement <i class="fa fa-angle-left"> </i> </a>
        
            <div class="content">
                <a href="Advertisement" class="nav-link ">       
                    <li class="nav-item">
                          <i class = "fa fa-user"></i>   Advertisement
                    </li>
                </a>
            </div>
        </div>
        <div class="set">
            <a href=""> <i class = "fa fa-list-alt"> </i> Results <i class="fa fa-angle-left"> </i> </a>
        
            <div class="content">
                <a href="Result" class="nav-link ">
                    <li class="nav-item">
                        Manage Result
                    </li>
                </a>
            </div>
        </div>
        <div class="set">
            <a href=""> <i class="fa-solid fa-music"></i> Semester Audios <i class="fa-solid fa-angle-left"> </i> </a>
        
            <div class="content">
                <a href="Reading-Audios" class="nav-link ">
                    <li class="nav-item">
                        Reading Audios
                    </li>
                </a>
                <a href="Listening-Audios" class="nav-link ">
                    <li class="nav-item">
                        Listening Audios
                    </li>
                </a>
                <a href="Vocabulary-Audios" class="nav-link ">
                    <li class="nav-item">
                        Vocabulary Audios
                    </li>
                </a>
            </div>
        </div>
         <div class="set">
            <a href="#"> <i class = "fa fa-list-alt"> </i> Assignments <i class="fa fa-angle-left"> </i> </a>
        
            <div class="content">
                <a href="Reading" class="nav-link ">
                    <li class="nav-item">
                        <i class = "fa fa-user"></i> Reading
                    </li>
                </a>
                <a href="Listening" class="nav-link ">
                    <li class="nav-item">
                        <i class = "fa fa-user"></i> Listening
                    </li>
                </a>
                <a href="Grammer" class="nav-link ">
                    <li class="nav-item">
                        <i class = "fa fa-user"></i> Grammer
                    </li>
                </a>
                <a href="Vocabulary" class="nav-link ">
                    <li class="nav-item">
                        <i class = "fa fa-user"></i> Vocabulary
                    </li>
                </a>
            </div>
        </div>
        <div class="set">
            <a href=""> <i class = "fa fa-list-alt"> </i> Student <i class="fa fa-angle-left"> </i> </a>
        
            <div class="content">
                <a href="Student" class="nav-link ">
                    <li class="nav-item">
                            <i class = "fa fa-user"></i> Manage Student
                    </li>
                </a>
            </div>
        </div>
        <div class="set">
            <a href="#"> <i class = "fa fa-user"> </i> Users <i class="fa fa-angle-left"> </i> </a>
            <div class="content">
                <a href="Users" class="nav-link ">
                    <li class="nav-item">
                            <i class = "fa fa-user"></i> Manage Users
                    </li>
                </a>
            </div>
        </div>
        <div class="set">
            <a href="#"> <i class="fa fa-list-alt"> </i> Slide <i class="fa fa-angle-left"> </i> </a>
            <div class="content">
                <a href="Slide" class="nav-link ">
                    <li class="nav-item">
                            <i class = "fa fa-list-alt"></i> Manage Slide Data
                    </li>
                </a>
            </div>
        </div>
        <div class="set">
            <a href="#"> <i class="fa fa-list-alt"> </i> News <i class="fa fa-angle-left"> </i> </a>
        
            <div class="content">
                <a href="News" class="nav-link ">
                    <li class="nav-item">
                            <i class = "fa fa-list-alt"></i> Manage News
                    </li>
                </a>
            </div>
        </div>
        <div class="set">
            <a href="#"> <i class = "fa fa-user"> </i> Reaserch <i class="fa fa-angle-left"> </i> </a>
        
            <div class="content">
                <a href="Research" class="nav-link ">
                    <li class="nav-item">
                            <i class = "fa fa-user"></i> Manage Research
                    </li>
                </a>
            </div>
        </div>
        <div class="set">
            <a href="#"> <i class = "fa fa-list-alt"> </i> Books <i class="fa fa-angle-left"> </i> </a>
        
            <div class="content">
                <a href="Books" class="nav-link ">
                    <li class="nav-item">
                            <i class = "fa fa-user"></i> Manage Books
                    </li>
                </a>
            </div>
        </div>
        <div class="set">
            <a href="#"> <i class = "fa fa-user"> </i> About US <i class="fa fa-angle-left"> </i> </a>
        
            <div class="content">
                <a href="About_Us" class="nav-link ">
                    <li class="nav-item">
                            <i class = "fa fa-user"></i> Manage About Us
                    </li>
                </a>
            </div>
        </div>
    </div>

                </nav>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>
<script src="./Assets/js/AjaxSearch.js"></script>
<!-- <script src="./Assets/js/AdminChange.js"></script> -->
<script src = "../Assets/js/tests/vendor/jquery.min.js"></script>
<!-- <script src = "../Assets/js/collapse.js"></script> -->
<script src = "../Assets/js/transition.js"></script>
<script src = "../Assets/js/modal.js"></script>
<script src = "../Assets/js/tooltip.js"></script>
<script src = "../Assets/js/popover.js"></script>
<script src = "../Assets/js/dropdown.js"></script>
<script src = "../Assets/js/carousel.js"></script> 


