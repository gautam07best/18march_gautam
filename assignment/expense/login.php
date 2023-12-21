<?php 
require_once("include/config.php");
require_once("include/header.php");
// login as users
if(isset($_POST["login"]))
{
    $em=$_POST["email"];
    $pwd=$_POST["pass"];
    $select="select * from tbl_user where email='$em' and password='$pwd'";
    $ex=mysqli_query($con,$select);
    $fetch=mysqli_fetch_array($ex);
    $no_rows=mysqli_num_rows($ex);
    if($no_rows==1)
    {
        $_SESSION["userid"]=$fetch["userid"];
        $_SESSION["name"]=$fetch["name"];
        $_SESSION["email"]=$fetch["email"];
        echo "<script>
        alert('You are Logged in as Users successfully')
        window.location='index.php';
        </script>";
    }

    else 
    {
        echo "<script>
        alert('Your email and Password are Incorect try again')
        window.location='login.php';
        </script>";
    }
}

?>
    <!-- content start here -->

    <div class="container p-3 mt-5">

        <div class="row">
            <div class="col-md-5 p-4">
                <h2>Login here as Customers</h2>

</div>
                
                <div class="col-md-6 ms-3 p-3">
                <h2 class="bg-primary text-white p-2 w-100">Login Form</h2>
               
                <form method="post">
             
                
                <div class="input-group mt-3">
                    <input type="text" name="email" placeholder="Email *" required class="form-control" required>
                </div>

                
                <div class="input-group mt-3">
                    <input type="password" name="pass" placeholder="Password" required class="form-control">
                </div>
                <div class="input-group mt-3">
                    <input type="submit" name="login"  class="btn btn-sm btn-dark bg-dark text-white" value="SignIn">

                    
                </div>

                <div class="input-group mt-3">
             
                 <b>Don't have an account ? </b> <a href="register.php">Create account here</a>
                </div>

</form>

            </div>
         </div>
            
            </div>
        </div>
    </div>



    
</body>
</html>