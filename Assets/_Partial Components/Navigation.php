<div class="panel panel-default">
    <div class="panel-body">
      <nav class="nav-profile"> 
        <a class = "active" href="Profile"> <img src='Assets/img/icons/Admin_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> Profile </a>
        <a href="javascript:;" class = "edit-profile" data-toggle="modal" data-target="#Edit-User-Modal"> <img src='Assets/img/icons/Edit Row_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> Edit Profile</a>
        <a href="Semester-audios"> <img src='Assets/img/icons/Radio Station_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> Semester Audios </a>
        <a href="javascript:;" data-toggle="modal" data-target="#Reading-Book-Data-Modal"> <img src='Assets/img/icons/Study_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> Reading </a>
        <a href="javascript:;" data-toggle="modal" data-target="#Listening-Book-Data-Modal"> <img src='Assets/img/icons/Radio Station_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> Listening </a>
        <a href="javascript:;" data-toggle="modal" data-target="#Grammer-Book-Data-Modal"> <img src='Assets/img/icons/Spellcheck_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> Grammer </a>
        <a href="javascript:;" data-toggle="modal" data-target="#Vocabulary-Book-Data-Modal"> <img src='Assets/img/icons/Translation_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> Vocabulary </a>
        <a href="javascript:;" data-toggle="modal" data-target="#Change-Password-User-Modal"> <img src='Assets/img/icons/Password Reset_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> Change Password</a>
        <a href="logout.php"> <img src='Assets/img/icons/Exit_48px.png' alt='' class='img-cicle' width='20px' height='20px'/> Logout </a>
        
    </nav>
    </div>
    <?php 
    $UsersByUsername = $mtd->getUsersByUsername($Username);

        $result = $UsersByUsername->fetch_array();
        $user_img = $result['Image'];
    ?>
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
                          <div class="form-group" style="display: ">
                            <label style="text-align: left;" class="col-sm-2 control-label"> ID </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="<?php echo $result['User_ID'];?>" name = "User_ID" id="User_ID" placeholder="User ID">
                            </div>
                          </div>
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
                            <button type="submit" class="button-start-the-quiz" name="btn-edit-profile" id = "btn-edit-profile" > Update </button>
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
                            <label style="text-align: left;"  class="col-sm-2 control-label"> Password </label>
                            <div class="col-sm-10">
                              <input type="text" value="<?php echo $result['Password'];?>" class="form-control" name = "Password" id="Password" placeholder="Password">
                            </div>
                          </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
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

    
</div>
 <!-- End of div Panel Default -->