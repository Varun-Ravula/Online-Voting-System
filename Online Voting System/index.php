<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE VOTING SYSTEM</title>
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
<body>
 
<h1 class="h2 text-info text-center text-decoration-underline mt-3">Voting System</h1>
<div>
<form action="./actions/login.php" class="text-center" method="POST">

<div> 
    <label for="username" class="form-label mt-5 text-light">Enter Your Name:</label>
    <input type="text" class="form-control w-50 m-auto" placeholder="enter your name" id="username" name="username" required>
</div>

<div>
    <label for="mobile" class="form-label text-light text-center mt-3">Enter mobile:</label>
    <input type="number" id="mobile" class="form-control w-50 m-auto" placeholder="enter mobile number" name="mobile" required maxlength="11">
</div>

<div>
    <label for="password" class="form-label text-light mt-3">Enter Password:</label>
    <input type="password" class="form-control w-50 m-auto" id="password" placeholder="enter password" name="password" required>
</div>

<div>
    <label for="select" class="text-center text-light mt-3 mb-3">Enter Category:</label>
    <select name="category" id="select" class="form-select w-50 m-auto mb-3" required="required">
    <option value="Select">Select</option>   
    <option value="Candidate">Candidate</option>
    <option value="Voter">Voter</option>
    </select>
</div>   

<button class="btn btn-primary" type="submit">Login</button>
<p class="text-warning mt-4">didn't have an account then <a href="./partials/registration.php" class="text-light">Register Here.</a></p>

</form>
</div>

<!-- adding javascript link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>