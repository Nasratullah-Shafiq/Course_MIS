<?php 

        // $Full_Name = mysqli_real_escape_string($this->db->link, $Full_Name);
        // $Username = mysqli_real_escape_string($this->db->link, $Username);
        // $Password = mysqli_real_escape_string($this->db->link, md5($Password));
        // $Email = mysqli_real_escape_string($this->db->link, $Email);
        // $Gender = mysqli_real_escape_string($this->db->link, $Gender);
        // $Phone_No = mysqli_real_escape_string($this->db->link, $Phone_No);

         $connect = mysqli_connect("localhost", "root", "", "change");

        $Full_Name = $_POST["Full_Name"];
        $Username = $_POST["Username"];
        $Password = $_POST["Password"];
        $Email = $_POST["Email"];
        $Gender = $_POST["Gender"];
        $Phone_No = $_POST["Phone_No"];




        if ($Full_Name == "" || $Username == "" || $Password == "" || $Email == "" || $Gender == "" || $Phone_No == "") {
            echo "empty";
            exit();
        }
        
        
        else{
            $query = "insert into users(Full_Name, Username, Password, Email, Gender, Phone_No, Image, Role_ID, Status)value('".$Full_Name."', '".$Username."', '".$Password."', '".$Email."', '".$Gender."', '".$Phone_No."', 'team8.jpg', '2', '1')";
        
            $inserted_row = mysqli_query($connect, $query);
            if($inserted_row){
                echo "success";
                
                exit();
            }
            else{
                echo "Error";
                exit();
            }
        }            

?>