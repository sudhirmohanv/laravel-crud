<?php 

require_once __DIR__.'/dbconnect.php';
$sql = "SELECT * FROM crud";
$result_set = mysqli_query($conn,$sql);
if(mysqli_num_rows($result_set)>0):
    
?>
<table border="1" width="100%" cellspacing="0">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Delete</th>      
    </tr>

   <?php while($row = mysqli_fetch_assoc($result_set)): ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['mobile']; ?></td>
        <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    </tr>
    <?php endwhile; ?>
</table>
<?php else: ?>
    No Record Found !
<?php  endif; ?>