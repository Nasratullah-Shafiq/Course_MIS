<?php
  $filepath = realpath(dirname(__FILE__));
  include('./../_Partial Components/CRUD.php');
  
	$crd = new CRUD();
 	if(isset($_POST["action"])){
        if($_POST["action"] == "Load"){
            $get_user_data = $crd->Load_User_Data();
            echo $get_user_data;
        }
    }

    $connect = mysqli_connect("localhost", "root", "", "change");
    

        $Full_Name = mysqli_real_escape_string($connect, $_POST["Full_Name"]);
        $Username = mysqli_real_escape_string($connect, $_POST["Username"]);
        $Password = mysqli_real_escape_string($connect, $_POST[md5("Password")]);
        $Email = mysqli_real_escape_string($connect, $_POST["Email"]);
        $Gender = mysqli_real_escape_string($connect, $_POST["Gender"]);
        $Phone_No = mysqli_real_escape_string($connect, $_POST["Phone_No"]);

        if ($Full_Name == "" || $Username == "" || $Password == "" || $Email == "" || $Gender == "" || $Phone_No == "") {
            echo "Fields must not be empty !";
            exit();
        }
        else if(filter_var($Email, FILTER_VALIDATE_EMAIL) === false){
            echo "Invalid E-mail Address!";
            exit();
        }
        else{
        $chkquery = "select * from users where Email = '$Email'";
        $chkresult = mysqli_query($connect, $chkquery);
        if ($chkresult != false) {
            echo "E-mail address already exist! Try New E-Mail";
            exit(); 
        }
        $chckquery = "select * from users where Username = '$Username'";
        $chckresult = mysqli_query($connect, $chkquery);
        if ($chckresult != false) {
            echo "Username address already exist! try new one. ";
            exit(); 
        }
        else{
            $query = "insert into users(Full_Name, Username, Password, Email, Gender, Phone_No, Image, Role_ID, Status)value('salim', 'karim', 'his', 'ss@gmail.com', 'male', '078987766', 'same.jpg', '2', '1')";
            // $query = "insert into users(Full_Name, Username, Password, Email, Gender, Phone_No, Image, Role_ID, Status)value('".$Full_Name."', '".$Username."', '".$Password."', '".$Email."', '".$Gender."', '".$Phone_No."', '".$File."', '2', '1')";
        
            $inserted_row = mysqli_query($connect, $query);
            if($inserted_row){
                echo "Registration Successfully ";
                
                exit();
            }
            else{
                echo "Error: Not Registered";
                exit();
            }
        }
    }   
?>