<?php

include('./Assets/_Partial Components/Header.php');

if(!isset($_SESSION['Change_Username'])){
    header('Location: sign in.php');
}

if(isset($_SESSION['Change_Username'])){
    $Username = $_SESSION['Change_Username'];
    $UsersByUsername = $mtd->getUsersByUsername($Username);
    $row = $UsersByUsername->fetch_assoc();
    $chk_img = $row['Image'];
}
// else{
//     header("location: index.php");
// }


?>
 
    	<div class="container" style="margin-top: 20px;">
    		<div class="row">
                <div class="col-sm-3">
                <?php include('./Assets/_Partial Components/Navigation.php');?>
                </div>
                <!-- End of div col-sm-3 -->

    		    <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <form method = "POST" >
                  <?php 
                    $UsersByUsername = $mtd->getUsersByUsername($Username);
                    if(!$UsersByUsername){
                        echo "<h2> No Users Table exist! </h2>";
                    }
                    else{

                    if($UsersByUsername->num_rows>0){
                        $result = $UsersByUsername->fetch_array();
                        $user_img = $result['Image'];
                    ?>
                <table class="table" style="padding-bottom: 300px;">
                    <tbody>
                    <div class="form-group">
                        <label style="text-align: left;" class="col-sm-6 control-label"> <h1> <p style="font-size: 50px;"> <?php echo $result['Full_Name'];?></p></h1> </label>
                        <div class="col-sm-6">
                         <?php 
                            echo "<img alt='' class='img-circle' width='160px;' height = '160px' src='Assets/img/_Profile_Picture/$user_img ' style = 'margin-top: -5px; margin-bottom: -5px;' />";?>
                        </div>
                    </div>
                        <tr>
                            <th> ID </th>
                            <td> <?php echo $result['User_ID'];?></td>
                        </tr>
                        <tr>
                            <th> Full Name </th>
                            <td> <?php echo $result['Full_Name']; ?> </td>
                        </tr>
                        <tr>
                            <th> Username </th>
                            <td> <?php echo $result['Username']; ?> </td>
                        </tr>
                        <tr>
                            <th> Email </th>
                            <td> <?php echo $result['Email']; ?> </td>
                        </tr>
                        <tr>
                            <th> Gender </th>
                            <td> <?php echo $result['Gender']; ?> </td>
                        </tr>
                        <tr>
                            <th> Phone No </th>
                            <td> <?php echo $result['Phone_No']; ?> </td>
                        </tr>
                    </tbody>
                    </table>
                    <?php } 
                else{
                    echo "<h2> No Users Available ! </h2> ";
                    echo "<br>";
                    }
                    }
                    ?>
              </form>
                        </div>
                    </div>
                    <!-- End of div panel -->
				</div>
                <!-- End of div col-md-9 -->
            </div>
    	</div>
        <script type="text/javascript">
    $(document).ready(function(){

$('[data-toggle = "tooltip"]').tooltip();
    });
</script>

<?php 
include('./Assets/_Partial Components/Footer.php');
?>    