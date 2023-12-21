<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Expense management systems</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- data tables called here -->
    <script>
        $(document).ready(function(){
            
            new DataTable('#example');    
        })
    </script>
    <script>
        function login()
        {
            alert('Are you sure to Add expense Please Login First ?')
            window.location='login.php';
        }
    </script>
</head>
<body>

    <!-- header -->
    <div class="container-fluid bg-primary p-4 navbar">
        <a href="index.php" class="navbar-brand text-white">Expense Managements systems</a>
       
     
        <ul class="navbar-link">

        <?php 
       if(!isset($_SESSION["userid"]))
       {
       ?>
            <li class="dropdown"><a  data-bs-toggle="dropdown" href="#" class="btn btn-sm btn-primary bg-primary shadow text-white dropdown-toggle">Create Account</a>
              <ul class="dropdown-menu">
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
              </ul>

            </li>
            <?php 
       }
       else 
       {
        ?>
           

            <li class="dropdown"><a  data-bs-toggle="dropdown" href="#" class="btn btn-sm btn-primary bg-primary shadow text-white dropdown-toggle">Welcome :<?php echo ucfirst($_SESSION["name"]);?></a>
              <ul class="dropdown-menu">
                <li><a href="manageprofile.php">Manage Profile</a></li>
                <li><a href="changepassword.php"> Change Password</a></li>
                <li><a href="logout.php" class="btn btn-danger bg-danger text-white" onclick="return confirm('Are you sure to Logout ?')"> Logout here</a></li>
              </ul>

            </li>
<?php 
       }
       ?>
        </ul>
    </div>
