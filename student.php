<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/boot 5/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
   
       <?php include ('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>STUDENT DETAILS
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="code.php" method="post" autocomplete="on">
                            <div class="mb-3">
                                <label for="">Student Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Student Email</label>
                                <input type="text" name="email"class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Student Phone</label>
                                <input type="text" name="phone"class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Student Course</label>
                                <input type="text" name="course"class="form-control">
                            </div>
                            <div>
                            <button type="submit" name="submit" class="btn btn-primary">SAVE STUDENT'S DETAILS</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>