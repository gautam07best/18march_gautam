<?php include 'connection.php'; ?>
<a href="index.php">home</a>
<table border="1px" cellpading="10px" cellspaching="0">
    <tr>
        <th>frist name</th>
        <th>last name</th>
        <th>email</th>
        <th>number</th>
        <th>age</th>
        <th colspan="2">actions</th> 
    </tr>
    <?php
    $query="select * from student";
    $data=mysqli_query($con,$query);
    $result=mysqli_num_rows($data);
    if ($result) 
     
        while ($row=mysqli_fetch_array($data))  {
            ?>
            <tr>
                <td><?php echo $row['fristname']; ?>
                </td>
                <td><?php echo $row['lastname']; ?>
                </td>
                <td><?php echo $row['email']; ?>
                </td>
                <td><?php echo $row['number']; ?>
                </td>
                <td><?php echo $row['age']; ?>
                </td>
                <td><a href="update.php?id=<?php echo $row['id']; ?>">edit></a></td>
                <td><a onclick="return confirm('are you sure, you want to delete?')" href="delete.php?id=<?php echo $row['id']; ?>">delete</a></td>  
            </tr>    
            <?php
        } 
        else
        {
           ?>
           <tr>
                <td>no record found</td>    
           </tr>
           <?php
        }
        ?>   
</table>        