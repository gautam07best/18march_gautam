
    <!-- content start here -->
   <?php 
  if(!isset($_SESSION["userid"]))
  {
   ?>
    <div class="container p-3 mt-5">
        <div class="row">
            <div class="col-md-4 p-5">
               <img src="https://media.tenor.com/QDEK3BH2Nh0AAAAj/viaggialo-viaggialocom.gif" class="img-fluid w-100">
            </div>

            <div class="col-md-7 ms-4 p-5">
                <h2>Add Expense here</h2>
                <h4><a href="#" onclick="login()" class="btn btn-block bg-primary w-100 p-3 text-white">Add Expense Here</a></h4>
            </div>
        </div>
    </div>

    <?php 
  }
  else 
  {

    ?>

    <?php 
     if(isset($_POST["add-expense"]))
     {
    $userid=$_SESSION["userid"];
    $title=$_POST["title"];
    $amt=$_POST["ammount"];
    $date=$_POST["date"];
    $insert="insert into tbl_expense(userid,title,ammount,added_date) values('$userid','$title','$amt','$date')";
    $exe=mysqli_query($con,$insert);
    echo "<script>
    alert('Congratulations Your Expense added successfully')
    window.location='index.php';
    </script>";

     }  



     ?>

    <div class="container p-3 mt-5">
        <div class="row">
        <h2>Add Expense here</h2>
            <div class="col-md-4 p-4">
            <form method="post">
            <div class="input-group mt-3">
                    <input type="text" name="title" placeholder="Expense Title" required class="form-control">
                </div>
                
                <div class="input-group mt-3">
                    <input type="text" name="ammount" placeholder="Expense Ammount" required class="form-control">
                </div>

                
                <div class="input-group mt-3">
                    <input type="date" name="date" placeholder="Expense Title" required class="form-control">
                </div>

                
                <div class="input-group mt-3">
                    <input type="submit" name="add-expense" placeholder="Expense Expense" required class="btn btn-sm btn-dark bg-dark text-white" value="Add Expense">
                </div>

  </form>

            </div>
            <div class="col-md-7 ms-3 p-3">


               
              <!-- subtotal expense count -->
    <?php 
    $userid=$_SESSION["userid"];
    $select="select sum(ammount) as total from tbl_expense where userid='$userid'";
    $exe=mysqli_query($con,$select);
    $fetch=mysqli_fetch_array($exe); 
    if($fetch["total"]==true)
    {
    ?>
    <h2 class="bg-primary text-white p-2 w-100">Total expenses Rs.<?php echo $fetch["total"];?></h2>
    <?php 
     }
     ?>
                <div class="mt-5">
                <table id="example" class="mt-4 display table table-responsive" style="width:100%">
                    <thead>
                        <tr>
                        <th>Id</th>
                            <th>Title</th>
                            <th>UserName</th>
                            <th>Ammount</th>
                            <th>Added Date</th>
                            <th>Action</th>
                          
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
                     
    //  show expense list 
    $userid=$_SESSION["userid"];
    $select="select tbl_expense.*,name from tbl_expense join tbl_user on tbl_expense.userid=tbl_user.userid where tbl_expense.userid='$userid'";
    $exe=mysqli_query($con,$select); 
    while($fetch=mysqli_fetch_array($exe))
    {     
                     ?>
                        <tr>
                            <td><?php echo $fetch["expensid"]; ?></td>
                            <td><?php echo $fetch["name"]; ?></td>
                            <td><?php echo $fetch["title"]; ?></td>
                            <td><?php echo $fetch["ammount"]; ?></td>
                            <td><?php echo $fetch["added_date"]; ?></td>
                            <td><a href="#" class="btn btn-sm btn-danger bg-danger text-white"><i class="bi bi-trash"></i></a></td>
                           
                        </tr>
     
                        
                        <?php 

    }
    ?>
                </table>
                </div>
            
            </div>
        </div>
    </div>



    <?php 
  }
  ?>
