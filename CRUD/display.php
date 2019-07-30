<?php  session_start();
    if(!isset($_SESSION['myuser'])) {
        echo"<script>
        alert('Kindly Login to System');
        document.location.href='login.php';
        </script>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display Data</title>
</head>
<body>
<a href = "logout.php">
    <button>Logout</button>
</a>
<div class = "user">
<?php   echo  " Welcome ".$_SESSION["myuser"];  ?>
</div>
<div class = "tablebody">
<table border='1' rules="rows" cellpadding = "10px">
    <tr>
        <th>User Id</th>
        <th>Name</th>
        <th>E-mail</th>
        <!-- <th>Password</th> -->
        <th>Age</th>
        <th>Address</th>
        <!-- <th>Photo</th> -->
        <th>Mobile Number</th>
        <th>Country</th>
        <th>Gender</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>

<?php
include 'db.php';

$data  =  "select * FROM users";
$displayQuery = mysqli_query($conn,$data);
while ($row = mysqli_fetch_array($displayQuery)) {

    ?>
    <tr>
        <td><?php echo $row[0]; ?>
        <td><?php echo $row[1]; ?>
        <td><?php echo $row[2]; ?>
        <!-- <td><? php //echo $row[3]; ?> -->
        <td><?php echo $row[4]; ?>
        <td><?php echo $row[5]; ?>
         <!-- <td><?php //echo $row[6]; ?> -->
        <td><?php echo $row[7]; ?>
        <td><?php echo $row[8]; ?>
        <td><?php echo $row[11]; ?>
        <td><a href="update.php?id=<?php echo $row['id']; ?>">Update</a></td>
        <td><a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php
}
 ?> 


<style>





td{
    color:black;
    font-size:16px;

    text-align:center;
}

.table-body {
    position: relative;
   
}
table{
   
    border:3px solid black;
    width: 400px;
    height: 200px;

}

th{

  background-color: #4CAF50;
  color: white;

}

tr:hover{
    /* background-color:gray; */
    transform:scale(1.02);
    transition: transform .3s  ease-in
}

img{

    transition: transform .9s  ease-in
    
}

img:hover{

transform:scale(4);

}
body{
background:url(back2.jpg);
background-size: cover;
}

.tablebody {
    position: absolute;
    top:20%;
    left:20%
}
.user {
    position: absolute;
    top:10%;
    left: 85%;
    color:red;
    font-size: 20px;
}
button{
    position: absolute;
    left: 88%;
    top:14%;
}
    </style>


</table>
</div>
</body>
</html>
