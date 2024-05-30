<?php
session_start();
if(!isset($_SESSION['id'])){
header('location:../');
}
$data=$_SESSION['data'];    
if($_SESSION['status']==1){
    $status='<b class="text-success">Voted.</b>';
}else{
    $status='<b class="text-danger">Not Voted.</b>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System-Dashboard</title>
    <!-- adding fav icon -->
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgjJ6-A9zmtclxN6RM3ZayaqOwlDBorgdpeVU_JcviHhvA5U3TbF9zNPukPxlDJQ11x78&usqp=CAU" type="image/x-icon">
    <!-- adding bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- adding internal css -->
<style>
    body{
        background-image:linear-gradient(160deg,#153677,#4e085f);
        background-repeat:no-repeat;
        background-attachment:fixed;
    }
</style>
</head>
<body class="text-light">

<h2 class="text-light text-center mt-5 mb-3 text-decoration-underline">Online Voting System</h2>
<!-- creating button for exit -->
<a href="../"><button class="btn btn-light mt-5 ms-5 mb-5">Exit</button></a>
<a href="./logout.php"><button class="btn btn-light mt-5 ms-5 mb-5">Logout</button></a>
<div class="container">

<div class="row">
<div class="col-sm-7">

<?php 
if(isset($_SESSION['candidates'])){
    $candidates=$_SESSION['candidates'];
    for($i=0;$i<count($candidates);$i++){
        ?>
        <div class="row">    
        <div class="col-sm-4">
            <img src="../uploads/<?php echo $candidates[$i]['photo']; ?>" alt="Candidate image" width="130px" style="border-radius:50%;">
        </div>
        <div class="col-sm-8">
        <h5>Candidate Name : <?php echo $candidates[$i]['username']; ?> </h5>
        <h5>Votes : <?php echo $candidates[$i]['votes']; ?></h5>
        </div>
        </div>

        <form action="../actions/voting.php" method="post">
          <input type="hidden" name="candidatesvotes" value="<?php echo $candidates[$i]['votes']; ?>">

          <input type="hidden" name="candidateid" value="<?php echo $candidates[$i]['id']; ?>">

          <?php 
          if($_SESSION['status']==1){
           ?>
           <button class="btn btn-success mt-3">Voted</button>
           <?php
          }else{
            ?>
            <button class="btn btn-primary mt-3" type="submit">Vote</button>
            <?php
          }
          ?>

        </form>
        <hr>
        <?php
    }
}else{
    ?>
    <div class="container"><p>No Candidates To Display</p></div>
<?php
}
?>

</div>
<div class="col-sm-5">
<h5>Voter Details :</h5>
<img src="../uploads/<?php echo $data['photo'];?>" alt="Voter Image" class="mb-3" width="150px">
<h5>Name : <?php echo $data['username']; ?></h5>
<h5>Mobile : <?php echo $data['mobile']; ?></h5>
<h5>Status : <?php echo $status; ?></h5>
</div>
</div>
</div> 


<!-- adding javascript link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>