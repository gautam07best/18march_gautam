<?php 
session_start();
unset($_SESSION["doctorid"]);
unset($_SESSION["name"]);
unset($_SESSION["email"]);
session_destroy();

echo "<script>
    
alert('You are Logout successfully')
window.location='index.php';
</script>";
?>