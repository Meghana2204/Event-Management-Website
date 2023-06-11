<?php
$server="localhost";
$username="root";
$password="";
$con= mysqli_connect($server,$username,$password);
if(!$con){
    die("connection failed");
    mysqli_connect_error();
}
// echo "success";
$name=$_POST['name'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$number=$_POST['number'];
$email=$_POST['email'];
$address=$_POST['address'];

$sql= "INSERT INTO `information`.`infos` (`name`,`dob`,`gender`,`number`,`email`,`address`) VALUES ('$name','$dob','$gender','$number','$email','$address')";
if($con->query($sql)==true){
    // echo"<center>";
    echo "<center> <h1>Success</h1> </center>";
    echo "<center><input type= 'button' value='Next' onclick='sql.html'></center>";
}
else{
    echo "error:$sql <br> $con->error";
}
$con->close();
?>