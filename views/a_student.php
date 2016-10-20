<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 9/18/2016
 * Time: 1:37 PM
 */
session_start();

if(!isset($_SESSION["email"])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Student Management</title>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
<?php include 'layout/header.php'; ?>

<div class="container">
    <div class="row">
        <legend><a href="t_marks.php">Class</a>/<a href="t_student.php">students</a></legend>
    </div>

    <table class="table">
        <thead>

        <tr>
            <th>Photo</th>
            <th>name</th>
            <th>roll.no</th>
        </tr>
        </thead>
        <tbody>

        <tr>

            <td><a href="a_profile.php">photo</a></td>
            <td><a href="a_profile.php">ram</a></td>
            <td><a href="a_profile.php">2079</a></td>
        </tr>

        </tbody>
    </table>
</div>
</body>
</html>