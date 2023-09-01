<?php
include 'connection.php';

$id = $_GET['id'];
$select = "select * from student where id='$id'";
$data = mysqli_query($con, $select);
$row = mysqli_fetch_array($data);

if (isset($_POST['update_btn'])) {
    $fname = $_POST['fristname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $age = $_POST['age'];

    $update = "update student set fristname='$fname', lastname='$lname', email='$email', number='$number', age='$age' where id='$id'";
    $data = mysqli_query($con, $update);
    if ($data) {
        echo "<script type='text/javascript'>
                alert('Data updated successfully');
                window.location.href = 'http://localhost/phptts/demo/view.php';
              </script>";
        exit();
    } else {
        echo "Error updating data: " . mysqli_error($con);
    }
}
?>

<div>
    <form action="" method="post">
        <input value="<?php echo $row['fristname'] ?>" type="text" name="fristname" placeholder="FristName"> <br><br>
        <input value="<?php echo $row['lastname'] ?>" type="text" name="lastname" placeholder="LastName"> <br><br>
        <input value="<?php echo $row['email'] ?>" type="text" name="email" placeholder="email"> <br><br>
        <input value="<?php echo $row['number'] ?>" type="text" name="number" placeholder="number"> <br><br>
        <input value="<?php echo $row['age'] ?>" type="number" name="age" placeholder="Age"> <br><br>
        <input type="submit" name="update_btn" value="Update">
    </form>
    <button><a href="view.php">Back</a></button>
</div>
