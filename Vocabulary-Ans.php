<?php
session_start();
include('./Assets/_Partial Components/Vocabulary.php');
include('./Assets/_Partial Components/Method.php');
include('./Assets/_Partial Components/Database.php');
include('./Assets/_Partial Components/Format.php');
$ans = new Vocabulary();
$mtd = new Method();
$answer = $ans->answer($_POST);


if(!isset($_SESSION['Change_Username'])){
    header('Location: sign in.php');
}

if(isset($_GET['id'])){
   
    $Book_ID = $_GET['id'];
    $bookById = $mtd->getBookByID($Book_ID);
    $rowQuiz = $bookById->fetch_assoc();
}
else{
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Answer </title>

	   	<meta name="viewport" content=" width=device-width, initial-scale=1" />
   	 	<link href = "./Assets/CSS/signin-style.css" rel = "Stylesheet" type = "text/css" />
   		<link href = "./Assets/CSS/Online_Quiz_styled.css" rel = "Stylesheet" type = "text/css" />
  		<link href = "./Assets/css/bootstrap.min.css" rel=" stylesheet" />
    	<link href = ".Assets/css/bootstrap.css" rel=" stylesheet" />
 	    <link href = ".Assets/css/animated.css" rel="stylesheet" >
	    <link href = "img/Graduation Cap_48px.png"rel="icon" type="image/png" >
  		<link href = "Assets/css/font-awesome.css" rel="stylesheet" >
   
      <script src = "./Assets/js/jquery.js" type="text/javascript" ></script>
      <script src = "./Assets/js/AjaxSearch.js"></script>
      <script src = ".Assets/js/faPrint.js"></script>

   <script type="text/javascript">
   $(document).ready(function(){
   		$('#printAnswer').click(function(){
   			var mode = 'iframe';
   			var close = mode == 'popup';
   			var options = {mode:mode, popClose:close};
   			$('#tblAnswer').printArea(options);
   		});
   });
   </script>

   <script type="text/javascript">
   		function PrintResult(el){
   			var restorepage = document.body.innerHTML;
   			var PrintResult = document.getElementById(el).innerHTML;
   			document.body.innerHTML = PrintResult;
   			window.print();
   		}
   </script>
</head>
<body onload = "ResultTimeout()">
    <?php 
         $total_question = $answer['right']+$answer['wrong']+$answer['no_answer'];
        $attempt_question = $total_question - $answer['no_answer'];
    ?>
        <?php
     if(isset($_SESSION['Change_Username'])){ 
                $Username = $_SESSION['Change_Username'];
                $UsersByUsername = $mtd->getUsersByUsername($Username);
                $rows = $UsersByUsername->fetch_array();
               $profile_img = $rows['Image'];
           }
           else{
            header('Location: signin.php');
           }
            ?>
        <div class="col-md-6" id = "answer-form">
        <table class="table" >
                <thead>
                    <tr>  
                        <th><h2> <?php echo $_SESSION['Change_Full_Name']; ?> </h2>  </th>
                        <th> <?php echo "<img class='img-circle' alt=''width='150px' height = '150px' src='./Assets/img/_Profile_Picture/$profile_img' style = 'margin-top: -5px; margin-bottom: -5px;' />"; ?> </th>
                    </tr>
                    <tr>
                        <th> Total Number of Questions </th>
                        <th> <?php echo $total_question; ?> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th> Book </th>
                        <td> <?php echo $rowQuiz['Book_Name'];?> </td>
                    </tr>
                    <tr>
                        <th> Homework </th>
                        <td> Vocabulary </td>
                    </tr>
                    <tr>
                        <th> Attempted Answers </th>
                        <td> <?php echo $attempt_question; ?></td>
                    </tr>
                    <tr>    
                        <th> Correct Answers </th>
                        <td> <?php echo $answer['right'];?> </td> 
                    </tr>
                    <tr>
                        <th> Wrong Answers </th>
                        <td> <?php echo $answer['wrong'];?> </td>
                    </tr>
                    <tr>
                        <th> No Answered </th>
                        <td> <?php echo $answer['no_answer'];?> </td>
                    </tr>
                    <tr>
                        <th> Your Result </th>
                        <td> <?php 
                            if(!$answer['right']){
                                echo '0'."%";
                            }
                            else{
                                $percent = floor(($answer['right']*100)/($total_question));
                            echo $percent."%";  
                            }
                            
                        ?> </td>
                    </tr>
                    <tr>
                        <?php 
                        if(!$answer['right']){
                                echo "<h3 style = 'color: red;'> Sorry You are failed </h3>";
                            }
                            else{
                                if(($answer['right']*100)/($total_question)==0){
                            echo "<h1 style = 'color: red;'> Sorry You are failed </h1>";
                        }
                        elseif(($answer['right']*100)/($total_question)>=75 && ($answer['right']*100)/($total_question)<85){
                            echo "<h1 style = 'color: green;'> Good! You got the 'C' Grade </h1>";
                        }
                        elseif(($answer['right']*100)/($total_question)>=85 && ($answer['right']*100)/($total_question)<90){
                            echo "<h1 style = 'color: green;'> Very Good! You got the 'B' Grade </h1>";
                        }
                        elseif(($answer['right']*100)/($total_question)>=90 && ($answer['right']*100)/($total_question)<=100){
                            echo "<h1 style = 'color: green;'> Excellent! You got the 'A' Grade </h1>";
                        }
                        else{
                            echo "<h1> You are successed </h1>";
                        }
                            }
                        ?>
                    </tr>
                </tbody> 
                </table>
            </div>
                
            <div class="col-md-6" id = "answer-form">
                <div class="row">
                    <div class="col-md-6">
                        <a href="#" id = "">
                        <button type = "button" value = "Print" class = "button-start-the-quiz" style="width: 100%" onclick="PrintResult('answer-form');" id = "printAwer"> Print Result 
                        </button> </a>
                    </div>
                    <div class="col-md-6">
                        <?php $ecrypt_1 = (($Subject_ID = $_GET['id']*123456789*9999)/999999);
                        $Subject_link = "Vocabulary?id=".urlencode(base64_encode($ecrypt_1));?>
                        <a href="<?=$Subject_link;?>">
                        
                        <button type = "button" value = "Start again!" class = "button-start-the-quiz" style="width: 100%" > Start again! 
                        </button> </a>
                    </div>
                </div>
                 
        </div>
        <!-- Start of Result Div -->
        <div class="col-sm-9" style = "display: none;">
            <form class="form-horizontal" method="POST">
              <div class="form-group">
                <label for="User ID" style="text-align: left;" class="col-sm-3 control-label"> Username </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="Username" value = "<?php echo $rows['Username'];?>" style="color: black;" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="Username" style="text-align: left;" class="col-sm-3 control-label"> Full Name </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="Full_Name" value = "<?php echo $rows['Full_Name'];?>" style="color: black;" placeholder="1stAnswer">
                </div>
              </div>
              <div class="form-group">
                <label for="Total No Of Question" style="text-align: left;" class="col-sm-3 control-label"> Total No Of Question </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="TotalNumberOfQuestion" value = "<?php echo $total_question; ?>" style="color: black;" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="Book" style="text-align: left;" class="col-sm-3 control-label"> Book </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="Book" value = " <?php echo $rowQuiz['Book_Name'];?>" style="color: black;" placeholder="2nd Answer">
                </div>
              </div>
                <div class="form-group">
                <label for="Subject" style="text-align: left;" class="col-sm-3 control-label"> Subject </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="Subject" value = "Vocabulary" style="color: black;"  placeholder="3rd Answer">
                </div>
              </div>
              <div class="form-group">
                <label for="Attempted Answer" style="text-align: left;" class="col-sm-3 control-label"> Attempted Answer </label>
                <div class="col-sm-9">
                  <input type="text"  class="form-control" id="Attempted_Answer" value = "<?php echo $attempt_question; ?>" style="color: black;" placeholder="4th Answer">
                </div>
              </div>
              <div class="form-group">
                <label for="Correct Answer" style="text-align: left;" class="col-sm-3 control-label"> Correct Answer </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="Correct_Answer" value = "<?php echo $answer['right'];?>" style="color: black;" placeholder="4th Answer">
                </div>
              </div>
              <div class="form-group">
                <label for="Wrong Answer" style="text-align: left;" class="col-sm-3 control-label"> Wrong Answer </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="Wrong_Answer" value = "<?php echo $answer['wrong'];?>" style="color: black;" placeholder="4th Answer">
                </div>
              </div>
              <div class="form-group">
                <label for="No Answer" style="text-align: left;" class="col-sm-3 control-label"> No Answer </label>
                <div class="col-sm-9">
                  <input type="text" style="color: black;" value = "<?php echo $answer['no_answer'];?>" class="form-control" id="No_Answer" placeholder="4th Answer">
                </div>
              </div>
              <div class="form-group">
                <label for="Result" style="text-align: left;" class="col-sm-3 control-label"> Result </label>
                <div class="col-sm-9">
                  <input type="text" style="color: black;" value = "<?php if(!$answer['right']){echo '0';
                    }
                    else{
                        $percent = floor(($answer['right']*100)/($total_question));
                    echo $percent;  
                    }
                    
                ?>" class="form-control" id="Result" placeholder="4th Answer">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="button" class="btn btn-default" id = "btn-add-result" > Save Result </button>
                  <span id="span-valid" class="span-validation"></span> 
                </div>
              </div>
            </form>
        </div>
        <!-- End of Result Div -->
        </div>
    </body>
</html>
	
