<?php include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM student WHERE id='$id'";
$data=mysqli_query($con,$query);
if ($data) {
    ?>
<script type="text/javascript">
     alert("data deleted successfully");
     window.open("http://localhost/phptts/demo/view.php","_self"); 
</script>
    <?php        
}
else
{
    ?>
    <script type="text/javascript">
        aleart("please try again");
    </script>    
    <?php
}