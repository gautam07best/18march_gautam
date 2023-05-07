<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    function myaddress()
    {
        echo "'ayothiya hostel',<br>room no 303, <br> suvrastra univercity behind , <br> rajkot-360005.";
    }
    ?>

    <h2>my Address is:</h2>
    <address>
        <?php myaddress(); ?>
    </address>
</body>
</html>