<?php

    $connect = mysqli_connect("localhost", "root", "", "change");
 
        $Heading = $_POST["Heading"];
        $Body = $_POST["Body"];
        // $File = $_POST["Research_Image"];
        // $User = $_POST["User"];
        $User = $_POST["Full_Name"];
       $File = $_FILES["Research_Image"]["name"];




        if ($Heading == "" || $Body == "") {
            echo "error";
            exit();
        }
        
        
        else{
            
            $query = "insert into research(Heading, Body, File, User)value('".$Heading."', '".$Body."', '".$File."' , '".$User."')";
        $destination = './../../../Assets/img/Research/'. $File;
                move_uploaded_file($_FILES['Research_Image']['tmp_name'], $destination);
        // $extention = explode('.', $File["name"]);
        // $new_name = rand() . '.' .$extention[1];
        // $destination = './../../../Assets/img/Research/'. $new_name;
        // move_uploaded_file($file['tmp_name'], $destination);
            $inserted_row = mysqli_query($connect, $query);
            if($inserted_row){
                
                
                echo "success";
                
                exit();
            }
            else{
                echo "not registered";
                
                exit();
            }
        }            

?>