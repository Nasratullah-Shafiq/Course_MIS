<?php
ob_start();
session_start();
// $filepath = realpath(dirname(__FILE__));
include_once('./Assets/_Partial Components/Database.php');
include_once('./Assets/_Partial Components/Format.php');

include_once('./Assets/_Partial Components/Users.php');
spl_autoload_register(function($class){
include_once "Assets/_Partial Components/".$class.".php";
});
$error='';
$connect = mysqli_connect('localhost','root','', 'Change');
if(isset($_POST['submit'])){
  $Username = mysqli_real_escape_string($connect, $_POST['Username']);
  $Password = mysqli_real_escape_string($connect, md5($_POST['Password']));
  

if(($Username == "") && ($Password == "")){
    echo $error;

  }else{
    $sql = "SELECT * FROM Users WHERE Username = '$Username' and Password = '$Password'";
      $result = mysqli_query($connect, $sql);
      $count = mysqli_num_rows($result);
      if($count>0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['Change_Full_Name'] = $row['Full_Name'];
        $_SESSION['Cahange_User_ID'] = $row['User_ID'];
        $_SESSION['Change_Username'] = $row['Username'];
        $_SESSION['Change_Role_ID'] = $row["Role_ID"];
        $_SESSION['IS_LOGIN'] = 'yes';

        if($row['Role_ID']==1){
          header('location: Administrator/index.php');
        }
        if($row['Role_ID']==2){
          header('location: index.php');
        }
      }else{
        $error = 'Please Enter Valid Username and Password';

      }
  }

}
?>
<!DOCTYPE html>
<title> Sign in </title>
<head> 
  <meta name="viewport" content=" width=device-width, initial-scale=1" />
    <link rel = "Stylesheet" type = "text/css" href = "./Assets/CSS/signin-style.css"/>
    <link rel = "stylesheet" type = "text/css" href = "./Assets/CSS/bootstrap.min.css"/>
    <link rel = "stylesheet" type = "text/css" href = "./Assets/CSS/bootstrap.css"/>
    <link rel = "stylesheet" type = "text/css" href = "./Assets/CSS/animated.css">
    <link rel = "stylesheet" href="Assets/css/font-awesome.css">
    <link rel = "icon" type="image/png" href="img/Graduation Cap_48px.png">
    

   <script type="text/javascript" src="./Assets/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="./Assets/js/bootstrap.js"></script>
   
   <script type="text/javascript" src="./Assets/js/jquery.js"  ></script>
   <script type="text/javascript" src = "./Assets/js/Change.js"></script>

</head>
<body class="body"> 
<script type="text/javascript">
  
</script>
<div class = "form-control box" id="signin-form">

<div class = "font">
<p class="p-signin"> Sign in </p>
</div>

<form method = "POST" action = "" class="form-horizontal">

  <div class="form-group" >
  <div class="input-group inputBox" style="padding-left: 10px;">
    <span class = "input-group-addon" id = "span-signin"><i class="fa fa-user" aria-hidden="true"></i></span>
        <input  type="text" class="form-control" name = "Username" id = "Username" required="">
        <label> Username </label>
    </div>
  </div>
  
    <div class="form-group" >
    <div class="input-group inputBox"style="padding-left: 10px;">
    <span class = "input-group-addon" id = "span-signin"><i class='fa fa-lock'></i></span>
        <input type="password" class="form-control" name = "Password" id = "Password" required="">
        <label> Password </label>
    </div>
  </div>

  <div class="form-group" style="padding-left: 10px;">
      <button type="submit" name = "submit" class="btn-signup-next" data-toggle="tooltip" id = "btn-signi" value = "Login here" data-placement="right" title="Insert Email & Password to Sign in">Sign in
  <i class='fa fa-user'></i>
   </button>
  </div>


<div class="form-group animated shake" style = "padding-left: 15px; margin-top: 10px; color: rgb(250,0,0);">
    <?php echo $error;?>
      <span class = "empty" style = "display: none;"> Wrong Username and Password </span>
      <span class = "incorrect" style = "display: none; color: red;"> Fields are empty! </span>
      <span class = "failed" style = "display: none;"> Password field empty! </span>
      <span class = "error" style = "display: none;"> Username and password did not matched </span>
      <span class = "disable" style = "display: none;">User is Disable !</span>   

  </div>
  <div class = "message" style="background-color: red;"> </div>
</form>

</div>
<script src="./Assets/js/tests/vendor/jquery.min.js"></script>
<script src="./Assets/tests/vendor/jquery.min.js"></script>
<script src="./Assets/js/transition.js"></script>
<script src="./Assets/js/tooltip.js"></script>
<script src="./Assets/js/affix.js"></script>
<script src="./Assets/js/alert.js"></script>
<script src="./Assets/js/button.js"></script>
<script src="./Assets/js/carousel.js"></script>
<script src="./Assets/js/collapse.js"></script>
<script src="./Assets/js/dropdown.js"></script>
<script src="./Assets/js/modal.js"></script>
<script src="./Assets/js/scrollspy.js"></script>
<script src="./Assets/js/tab.js"></script>
<script src="./Assets/js/transition.js"></script>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

</body>
</html>
