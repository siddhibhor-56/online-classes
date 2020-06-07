<?php
$con = new mysqli('localhost','root','','forrm');

$name = $_POST['FULLNAME'];
$email = $_POST['Email'];
$number = $_POST['Phone_Number'];
$password = $_POST['Password'];
$cpassword = $_POST['Confirm_Password'];

if($con){
    echo "register";
}
else{
    echo "nono";
}

$query = ("insert into for__m(FULLNAME,Email,Phone_Number,Password,Confirm_Password) values('$name','$email','$number','$password','$cpassword')");
$result = mysqli_query($con, $query); ya files htdocs mdhe save kr kaaa php ahe madam achaa thm
    
?>