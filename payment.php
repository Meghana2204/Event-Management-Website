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
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$pin=$_POST['pin'];
$state=$_POST['state'];

$sql= "INSERT INTO `payment`.`detail` (`name`,`email`,`address`,`city`,`pin`,`state`) VALUES ('$name','$email','$address','$city','$pin','$state')";
if($con->query($sql)==true){
    // echo"<center>";
    echo "<center> <h1>Success</h1> </center>";
    echo "<center><input type= 'button' value='Home' onclick='sql.html'></center>";
}
else{
    echo "error:$sql <br> $con->error";
}
$con->close();
?>