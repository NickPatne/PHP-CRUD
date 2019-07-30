<?php 


include 'db.php';

$id = $_GET['id'];
 echo $id;


$deleteQuery = "DELETE FROM users WHERE id = $id ";
$res = mysqli_query($conn,$deleteQuery);
// header('location:display.php');
if($res) {
    
    header('location:display.php');
}
?>