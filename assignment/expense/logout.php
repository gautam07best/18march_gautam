<?php 
session_start();
unset($_SESSION["userid"]);
unset($_SESSION["name"]);
unset($_SESSION["email"]);
session_destroy();
echo "<script>
alert('You are Logout in as Users successfully')
window.location='index.php';
</script>"
?>