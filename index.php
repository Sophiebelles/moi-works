

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
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
        <?php require('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Students Details</h4>
                        <a href="student.php" class="btn btn-primary float-end">Add Students</a>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Student's Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Course</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM  students";
                                    $query_run = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                    <td> <?= $student['id']; ?></td>
                                    <td> <?= $student['name']; ?></td>
                                    <td> <?= $student['email']; ?></td>
                                    <td> <?= $student['phone']; ?></td>
                                    <td> <?= $student['course']; ?></td>
                                    <td>
                                        <a href="view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a>
                                        <a href="edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                        <form action="code.php" method="POST"class="d-inline">
                                          <button type="submit" name="delete_student" value="<?=$student['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                               }

                            }
                            else
                                    {
                                        echo '   <h5>No Record Found</h5>';
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>