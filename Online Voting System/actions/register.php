<?php 
// including connection in file
include('./connect.php');

// starting session
session_start();

// creating a variables for store the registration data

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$photo=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$category=$_POST['category'];


if($password!=$cpassword){
    echo '<script>
    alert("confirm password does not match");
    window.location="../partials/registration.php";
    </script>';
}
else{
move_uploaded_file($tmp_name,"../uploads/$photo");

$sql="insert into `userdata` (username,mobile,password,photo,category,status,votes) values ('$username','$mobile','$password','$photo','$category',0,0)";

$result=mysqli_query($con,$sql);

if($result){
    echo '<script>
    alert("Registered Successfully");
    window.location="../index.php";
    </script>';
}else{
    echo 'registration failed';
}


}
?>