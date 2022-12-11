
    <?php
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
   

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>STUDENT VIEW DETAILS
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
                            <div class="mb-3">
                                <label for="">Student Name</label>
                                 <p class="form-control">
                                   <?= $student['name']; ?>
                                 </p>
                            </div>
                            <div class="mb-3">
                                <label for="">Student Email</label>
                                <p class="form-control">
                                   <?= $student['email']; ?>
                                 </p>
                            </div>
                            <div class="mb-3">
                                <label for="">Student Phone</label>
                                <p class="form-control">
                                   <?= $student['phone']; ?>
                                 </p>
                            </div>
                            <div class="mb-3">
                                <label for="">Student Course</label>
                                <p class="form-control">
                                   <?= $student['course']; ?>
                                 </p>
                            </div>
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