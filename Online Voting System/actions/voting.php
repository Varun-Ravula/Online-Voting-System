<?php
session_start();
include('./connect.php');

$votes=$_POST['candidatesvotes'];
$totalvotes=$votes+1;

$candidateid=$_POST['candidateid'];
$userid=$_SESSION['id'];

$updatedvotes=mysqli_query($con,"update `userdata` set votes='$totalvotes' where id='$candidateid'");

$updatedstatus=mysqli_query($con,"update `userdata` set status=1 where id='$userid'");

if($updatedvotes and $updatedstatus){
   $getcandidates=mysqli_query($con,"Select username,photo,votes,id from `userdata` where category='candidate'");
   $candidates=mysqli_fetch_all($getcandidates,MYSQLI_ASSOC);
   $_SESSION['$candidates']=$candidates;
   $_SESSION['status']=1;

   echo '<script>
   alert("Voted Successfully.");
   window.location="../partials/dashboard.php";
   </script>';

}
else{
    echo '<script>
    alert("Techinical Error ! Vote Again Later.");
    window.location="../partials/dashboard.php";
    </script>';
}



?>