<?php

include('./Assets/_Partial Components/Header.php');

if(!isset($_SESSION['Change_Username'])){
    header('Location: sign in.php');
}

foreach ($_GET as $key => $data) {
        $data2 = $_GET[$key] = base64_decode(urldecode($data));
        $Book_ID = ((($data2*999999)/9999)/123456789);
    }

if (isset($_GET['id'])) {
    $data = $_GET['id'];
    
    
    }
else{
    header('Location: index.php');
}
?>
<div class="container container-index">
    <div class="row">
        <div class="col-sm-3">
            <?php include('./Assets/_Partial Components/Navigation.php');?>
        </div>
        <!-- End of Col-sm-12 Div -->
        <!-- BEGIN DIV FOR SHOWING QUESTIONS-->
        <div class = "col-lg-9">
            <div class="panel panel-default">
                 <div class="panel-body">
                <?php 
                /* THROUGH THE FOLLOWING FORM THE QUESTIONS IS BEING SUBMITED TO QuizAnswer.php WHICH THE RESULT IS BEING SHOWN  */
                //  $id = $row['Subject_ID']; ?> 
                <!-- BEGIN FROM CONTAINS ALL QUESTIONS -->
                
                <form method = "POST" action = "Listening-Ans?id=<?php echo $Book_ID; ?>" id = "QuizAnswer">
                <?php 
                    $i=1;
                    $a=0;
                    $con = mysqli_connect("localhost", "root", "", "Change");
                    $count = mysqli_query($con, "SELECT * from Audio where Book_ID = '$Book_ID' and Status = 1");  ?>
                    <table class="table">
                       <thead>
                            <tr>
                                <th> <h3> Improve Your Listening Here </h3> </th>
                            </tr>
                        </thead> 
                    </table>
                    
                    <?php 
                    if(!$count){
                        echo '<div class="alert alert-danger" role="alert"> Opps!... No Vocabulary available for this Semester </div>';
                    }
                   else{
                    while($row=mysqli_fetch_array($count)){
                    $Aud = $row['Audio'];?>
                    <table class="table">
                    <tr>
                        <th> <?php echo'<audio src="./Assets/Audio/' .$row["Audio"]. '" codecs="avc1.42E01E, mp4a.40.2"  controls controlslist="nodownload" > </audio>'; ?></th>
                    </tr>
                    </thead>
                    <thead>
                        <tr>
                            <th> <?php echo 'Q'.$i.':';?> <?php echo $row['Question'];?> </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($row['Answer0'])){ ?>
                        <tr>
                            <td>&nbsp;1 &nbsp;<input type="radio" id = "<?php echo 'AnsZero'.$a;?>" value = "0"  name = "question[<?php echo $row['Audio_ID']; ?>]">&nbsp;<?php echo $row['Answer0'];?></td>
                        </tr>
                    <?php }?>
                    <?php if(isset($row['Answer1'])){ ?>
                        <tr>
                            <td>&nbsp;2 &nbsp;<input type="radio" id = "<?php echo 'AnsOne'.$a;?>" value = "1" name = "question[<?php echo $row['Audio_ID']; ?>]" >&nbsp;<?php echo $row['Answer1'];?></td> 
                        </tr>
                    <?php }?>
                    <?php if(isset($row['Answer2'])){ ?>
                        <tr>
                            <td>&nbsp;3 &nbsp;<input type="radio" id = "<?php echo 'AnsTwo'.$a;?>" value = "2" name = "question[<?php echo $row['Audio_ID']; ?>]">&nbsp;<?php echo $row['Answer2'];?></td>
                        </tr>
                    <?php }?>
                    <?php if(isset($row['Answer3'])){ ?>
                        <tr>
                            <td>&nbsp;4 &nbsp;<input type="radio" id = "<?php echo 'AnsThree'.$a;?>" value = "3" name = "question[<?php echo $row['Audio_ID']; ?>]">&nbsp;<?php echo $row['Answer3'];?></td>
                        </tr>
                    <?php }?>
                        <tr style = "display: none;">
                            <td> <input type="radio" checked="checked" style = "display: none;" value = "No_Attempt" name = "question[<?php echo $row['Audio_ID']; ?>]"/></td>
                        </tr>
                    </tbody> 
                    </table>
                    <?php $i++; $a++;}}
                    // else{
                    //     echo "<br>";
                    //     echo "<br>";
                    //     echo "<br>";
                    //     echo '<div class="alert alert-danger" role="alert"> Opps!... No Listening available for this Semester </div>';
                    //     echo "<br>";
                    //     }
                       
                        ?>
                    <input type = "submit" value = "Submit" class = "button-start-the-quiz"/>
                    </form>
                    <!-- END OF FORM CONTAINING QUESTIONS -->
                    </div>
                    <!-- End of Panel Body -->
            </div>
            <!-- End of Div Panel Default -->
        </div>
        <!-- End of Div col-lg-9 -->
    </div>
    <!-- End of Div Row -->
</div> 

<?php 
include('./Assets/_Partial Components/Footer.php');
?>    