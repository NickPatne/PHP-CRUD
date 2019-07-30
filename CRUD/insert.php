<?php

include 'db.php';

if(isset($_POST['submit'])) {
    $fullname = $_POST['FName'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $age = $_POST['Age'];
    $address = $_POST['address'];


    $filename = $_FILES["uploadphoto"]["name"];
    $tmpname =  $_FILES["uploadphoto"]["tmp_name"];
    $photo = "uploads/".basename($filename);
   
    move_uploaded_file( $tmpname , $photo );
   


    $mobile = $_POST['mobile'];
    $countries = $_POST['countries'];
    $gender = $_POST['gender'];

    $question = $_POST['questioon'];
    $answer = $_POST['answer'];


     
    // $folder = "Registration Details";
    // if(!file_exists($folder) || !is_dir($folder)) {
    //     mkdir($folder);
    // }

    // $textfile = fopen("newfile.txt", "w") or die("Unable to open file!");

    // fwrite($textfile , 'ABC');
    // fwrite($textfile, "\n\n\n");
    // fwrite($textfile , 'ABC');
    // fwrite($textfile, "\n\n\n");
    // fclose($textfile);

        $salt = 'nikharsh54$678sfu';
        $encPassword = hash('sha512',$password.$salt);

   

    $insertQuery = "INSERT INTO users (fullname,email,password,age,address,photo,mobile,country,question,answer,gender) VALUES 
    ('$fullname' , '$email' , '$encPassword' , '$age' ,'$address' , '$photo' , '$mobile' ,'$countries' ,  '$question' , '$answer' , '$gender')";

    
   $result = mysqli_query($conn,$insertQuery) or exit(mysqli_error($conn));
   if($result) {
       session_destroy();
       session_unset();
       echo "<script>
        alert('Registred Successfully');
        document.location.href = 'login.php';
        </script>";
    }
    else {
        echo "<script>
        alert('Whoops..!! Something Went Wrong'); 
        </script>";
    }

}


?>