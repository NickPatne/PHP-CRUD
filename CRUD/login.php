<?php  session_start();
    if(isset($_SESSION['myuser'])) {
        echo"<script>
        alert('You are Already Logged in');
        document.location.href='display.php';
        </script>";
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
        
    </script>
</head>

<body>
    <div class="main">
        <div class="form-body">
            <div class="form">

                <h1> Login Here!</h1>

                <form name="SignUp_Form" action="loginCheck.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                    <input type="text" name="Email" id="Email" placeholder="Email" onblur="validateEmail(this);"><br>
                    <input type="password" name="Password" id="Password" placeholder="Password" onblur="valPass(this);"><br>
                    <button type="submit" name="login" id="submit">Sign Up</button>
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