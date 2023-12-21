<?php 
require_once("include/config.php");
require_once("include/header.php");
// add users
if(isset($_POST["register"]))
{
    $name=$_POST["name"];
    $em=$_POST["email"];
    $pwd=$_POST["pass"];
    $phone=$_POST["phone"];
    $add=$_POST["address"];
    
    $insert="insert into tbl_user(name,email,password,phone,address) values('$name','$em','$pwd','$phone','$add')";
    $exe=mysqli_query($con,$insert);
    echo "<script>
    alert('Account created successfully')
    window.location='login.php';
    </script>";
}
?>
    <!-- content start here -->

    <div class="container p-3 mt-5">
        <div class="row">
            <div class="col-md-4 p-4">
                <h2>Create Account here</h2>

</div>
                
                <div class="col-md-7 ms-3 p-3">
                <h2 class="bg-primary text-white p-2 w-50">Register Form</h2>
            
                <form method="post">
                <div class="input-group mt-3">
                    <input type="text" name="name" placeholder="Name *" required class="form-control" required>
                </div>
                
                <div class="input-group mt-3">
                    <input type="text" name="email" placeholder="Email *" required class="form-control" required>
                </div>

                
                <div class="input-group mt-3">
                    <input type="password" name="pass" placeholder="Password" required class="form-control">
                </div>


                
                <div class="input-group mt-3">
                    <input type="text" name="phone" placeholder="Phone *" required class="form-control">
                </div>

                
                <div class="input-group mt-3">
                    <textarea  name="address" placeholder="Address" required class="form-control"></textarea>
                </div>
                
                <div class="input-group mt-3">
                    <input type="submit" name="register" placeholder="Expense Expense" required class="btn btn-sm btn-dark bg-dark text-white" value="Create Account">

                    <input type="reset" name="reset"  class="btn btn-sm btn-dark bg-danger ms-3 text-white" value="Reset">
                </div>

                <div class="input-group mt-3">
             
                 <b>Already have an account ? </b> <a href="login.php">Login here</a>
                </div>


</form>
            </div>
         </div>
            
            </div>
        </div>
    </div>

