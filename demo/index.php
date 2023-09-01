
<?php
include 'connection.php';

if (isset($_POST['save_btn'])) {
    $fname = $_POST['fristname'];
    $lname = $_POST['lastname'];
    $em = $_POST['email'];
    $num = $_POST['number'];
    $age = $_POST['age'];

    $query = "INSERT INTO student (fristname, lastname, age, email, number ) VALUES ('$fname', '$lname', '$age','$em','$num')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>alert('Data saved successfully');</script>";
    } else {
        echo "<script>alert('Failed to save data');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div>
    <form action="" method="post">
        <input type="text" name="fristname" placeholder="Frist Name"><br><br>
        <input type="text" name="lastname" placeholder="Last Name"><br><br>
        <input type="text" name="email" placeholder="email"><br><br>
        <input type="text" name="number" placeholder="number"><br><br>
        <input type="number" name="age" placeholder="Age"><br><br>
        <input type="submit" name="save_btn" value="Save">
        <button><a href="view.php">view</a></botton>
    </form>
</div>
</body>
</html>
