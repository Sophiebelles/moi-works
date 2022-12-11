<?php include'dbconn.php';
session_start();
require 'dbconn.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($conn,$_POST['delete_student']);
    $query = "DELETE FROM students WHERE id='$student_id' ";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Delete Successfully";
        header("Location: index.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Student Not Deleted ";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($conn,$_POST['student_id']);
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $course = mysqli_real_escape_string($conn,$_POST['course']);

    $query= "UPDATE students SET  name = '$name', email='$email',phone='$phone',course='$course' WHERE id='$student_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Student Not Updated ";
        header("Location: index.php");
        exit(0);
    }
}

   if(isset($_POST['submit']))
   {
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);
        $course = mysqli_real_escape_string($conn,$_POST['course']);

        $query = "INSERT INTO details.students (name,email,phone,course) VALUES ('$name','$email','$phone','$course')";
        $query_run = mysqli_query($conn,$query);
        if($query_run)
        {
            $_SESSION['message'] = "Student created successfully";
            header("location: student.php");
            exit();
        }
        else{
            $_SESSION['message'] = "Student not created successfully";
            header("location: student.php");
            exit();
        }
   }
?>