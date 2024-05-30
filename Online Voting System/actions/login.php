<?php
// starting session
session_start();
include('./connect.php');

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$category=$_POST['category'];

$sql="select * from `userdata` where username='$username' and mobile='$mobile' and password='$password' and category='$category'";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
// writing for candidates
$sql="select username,photo,votes,id from `userdata` where category='candidate'";
// checking results of candidate 
$candidateresult=mysqli_query($con,$sql);
// checking number of rows in database for candidates
  if(mysqli_num_rows($candidateresult)>0){
   $candidates=mysqli_fetch_all($candidateresult,MYSQLI_ASSOC);
   $_SESSION['candidates']=$candidates;
  }

//writing for voter 
// mysqli_fetch_array which is used for fetching the single user only
$data=mysqli_fetch_array($result);
$_SESSION['id']=$data['id'];
$_SESSION['status']=$data['status'];
$_SESSION['data']=$data;

echo '<script>
window.location="../partials/dashboard.php";
</script>';

}else{
  echo '<script>
  alert("invalid credentials, Try again");
  window.location="../index.php";
  </script>';

}

?>