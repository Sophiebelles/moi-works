<?php
    session_start();
    require 'dbconn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/boot 5/css/bootstrap.css">
    <title>Student Edit</title>
</head>
<body>
<div class="container mt-5">
   
       <?php include ('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>STUDENT EDIT
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <?php
                            if (isset($_GET['id']))
                            {
                                $student_id =mysqli_real_escape_string($conn,$_GET['id']);
                                $query = "SELECT * FROM students WHERE id ='$student_id' ";
                                $query_run = mysqli_query($conn,$query);

                                if (mysqli_num_rows($query_run) > 0)
                                {
                                    $student = mysqli_fetch_array($query_run);
                                    ?>
                                  
                        <form action="code.php" method="post">
                          <input type="hidden" name="student_id" value="<?=$student_id ?>">  
                            <div class="mb-3">
                                <label for="">Student Name</label>
                                <input type="text" name="name" value= "<?= $student['name']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Student Email</label>
                                <input type="text" name="email" value= "<?= $student['email']; ?>"class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Student Phone</label>
                                <input type="text" name="phone" value= "<?= $student['phone']; ?>"class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Student Course</label>
                                <input type="text" value= "<?= $student['course']; ?>"name="course"class="form-control">
                            </div>
                            <div>
                            <button type="submit" name="update_student" class="btn btn-primary">UPDATE STUDENT'S DETAILS</button>

                            </div>
                        </form>
                          <?php
                                }
                                else
                                {
                                    echo "<h4>No Such ID found</h4>";
                                }
                            }
                            
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>