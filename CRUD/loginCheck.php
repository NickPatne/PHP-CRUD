<?php
session_start();
include 'db.php';
if(isset($_POST['login'])) {
    $username = $_POST['Email'];
    $password = ($_POST['Password']);


        $salt = 'nikharsh54$678sfu';
        $encPassword = hash('sha512',$password.$salt);

    if($username!=NULL || $password!=NULL) {

    

    $loginQuery = "SELECT * FROM users WHERE email = '".$username."'  AND  password = '".$encPassword."'";
    $result = mysqli_query($conn , $loginQuery);
    while($row = mysqli_fetch_assoc($result)) {
        $u = $row['email'];
        $p = $row['password'];
        $fname = $row['fullname'];

    }
    if($u == $username && $p == $encPassword){

            $_SESSION['myuser'] = $fname ;

        echo"<script>

        document.location.href = 'display.php';
        </script>";
        
    }
    else {
        echo"<script>
        alert('Invalid Credentials');
        document.location.href = 'login.php';
        </script>";
    }

}
else {
    echo"<script>
    alert('Please Fill Credentials');
    </script>";
}

}



?>