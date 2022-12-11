
<?php
  
    if (isset($_POST["submit"])){

        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["uname"];
        $password = $_POST["pwd"];
        $pwdRepeat = $_POST["cpwd"];
    }
    require_once 'db.php';
    require_once 'function.php';

    if (emptyInputSignUp($name,$email,$username,$password,$pwdRepeat) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUname($username) !== false){
        header("location: ../signup.php?error=invaliduname");
        exit();
    }
    if (invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($password,$pwdRepeat) !== false){
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    if (UnameExists($conn,$username) !== false){
        header("location: ../signup.php?error=usernametaken");
        exit();

        createUser($conn,$name,$email,$username,$password);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="../boot 5/css/bootstrap.css">
    <link rel="stylesheet" href="../font-awesome3/css/all.css">
</head>
<body>
<h5 class="mx-auto d-block m-4 text-center ">SIGN UP PAGE</h5>
   <div class="mx-auto d-block">
   <form action="includes/login.php" class="m-4" method="post">
        <label for="">Full Name</label>
        <input type="text" name="fname" class="form-control w-50">
        <label for="">Email</label>
        <input type="text "name="email"  class="form-control w-50">
        <label for="">Username</label>
        <input type="text "name="uname" class="form-control w-50">
        <label for="">Password</label>
        <input type="text"name="pwd" class="form-control w-50">
        <label for="">Confirm Password</label>
        <input type="text"name="cpwd" class="form-control w-50">
        <button class="btn btn-info mx-auto d-block" name="submit">SUBMIT</button>
    </form>
   </div>
   
</body>
</html>