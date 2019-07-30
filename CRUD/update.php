<?php 
include 'db.php';



$id = $_GET['id'];
$query = "SELECT * FROM users where id = $id";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);


if(isset($_POST['submit'])) {
   
    $fullname = $_POST['FName'];
    $email = $_POST['Email'];
    $password = md5($_POST['Password']);
    $age = $_POST['Age'];
    $address = $_POST['address'];


    // $filename = $_FILES["uploadphoto"]["name"];
    // $tmpname =  $_FILES["uploadphoto"]["tmp_name"];
    // $photo = 'uploads/'.$filename;
   
    // move_uploaded_file($tmpname , $photo );

    $mobile = $_POST['mobile'];
    $country = $_POST['countries'];
    $gender = $_POST['gender'];

    $question = $_POST['questioon'];
    $answer = $_POST['answer'];
   
$updateQuery = "UPDATE users SET fullname = '$fullname' , email = '$email' , password = '$password' ,  age = '$age' ,address = '$address' ,  mobile = '$mobile' , country = '$country'
, question = '$question' , answer = '$answer' , gender = '$gender' WHERE id = $id";
$res = mysqli_query($conn,$updateQuery);
if($res) {
    echo "<script>
    alert('updated Successfully...!!');
    </script>";
    header('location:display.php');
   }
   else {
 echo "<script>
    alert('updated Error...!!');
    </script>";
    header('location:update.php');
   }

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="Styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css.map">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script type="text/javascript" src="script.js">
        //Validations for Full Name
    </script>

</head>

<body>
    <div class="main">
        <div class="form-body">
            <div class="form">

                <h1> Signup Here!</h1>

                <form name="SignUp_Form" action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                    <input type="text" name="FName" id="FName" placeholder="full name" value="<?php echo $row['fullname'];?> "><br>
                    <input type="text" name="Email" id="Email" placeholder="Email"  value="<?php echo $row['email'];?> "><br>
                    <input type="password" name="Password" id="Password" placeholder="Password" required> 
                    <br>
                    <input type="text" name="Age" id="Age" placeholder="age" size="2" maxlength="2" value="<?php echo $row['age'];?> "><br>
                    <input type="text" name="address" placeholder="address"  value="<?php echo $row['address'];?> "><br>
                    <input type="file" name="uploadphoto" />
                    <input type="text" name="mobile" id="Mobile" placeholder="Mobile" maxlength="10" value="<?php echo $row['mobile'];?> " ><br>

                    <br>
                    <select name="countries" class="datalist">
					<datalist id="countries">
					<option class="selp" value="<?php echo $row['country'];?>" selected><?php echo $row['country']; ?></option>
					<option class="selq" value="India">India</option>
					<option class="selq" value="Australia">Australia</option>
					<option class="selq" value="new zealand">new zealand</option>
					<option class="selq" value="England">England</option>
					<option class="selq" value="America">America</option>
					<option class="selq" value="China">China</option>
					<option class="selq" value="Russia">Russia</option>
					<option class="selq" value="Germany">Germany</option>
					<option class="selq" value="Malesia">Malesia</option>
                </datalist></select>


                    <br><br>
                    <select name="questioon" onchange=" getAnswer(this.value);">
					<option class="selp" value="<?php echo $row['question'];?>" selected> <?php echo $row['question'];?> </option>
					<option class="selq" value="nickname">what is your nickname ?</option>
					<option class="selq" value='bestfriend'>what is your best friend's name ?</option>
					<option class="selq" value="game">what is your favourite game ?</option>
                </select>


                    <br><br>
                    <input type="text" name="answer" id="questioon" style="display:block" value="<?php echo $row['answer'];?>" />

                    <input type="radio" name="gender" value="male" checked><span class="rad">Male</span>
                    <input type="radio" name="gender" value="female"> <span class="rad">Female</span>
                    <input type="radio" name="gender" value="other">
                    <span class="rad">Other</span>
                    <br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" name="submit" id="submit"> Update </button>

                </form>
            </div>
            <div id="error-fullName"></div>
            <div id="error-Email"></div>
            <div id="error-Password"></div>
            <div id="error-Mobile"></div>
            <div id="error-Age"></div>
        </div>
    </div>

</body>

</html>