<?php
$con = new mysqli('github.io','siddhibhor-56','siddhibhor@56','forrm');

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['contact'];
$password = $_POST['psw'];
$cpassword = $_POST['psw-repeat'];

if($con){
    echo "register";
}
else{
    echo "nono";
}

$query = ("insert into for__m(FULLNAME,Email,Phone_Number,Password,Confirm_Password) values('$name','$email','$number','$password','$cpassword')");
$result = mysqli_query($con, $query);  
?>
