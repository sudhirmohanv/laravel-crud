<?php
require __DIR__.'/dbconnect.php';
$Sql = "SELECT * FROM department";

$result_Set = mysqli_query($conn,$Sql);


?>
<html>
<head></head>
<body>
    <form>
        Select Department: 
        <select name="department">
            <option value="">Select</option>
            <?php if(mysqli_num_rows($result_Set)>0): ?>
                <?php while($department = mysqli_fetch_assoc($result_Set)): ?>
                    <option value="<?php echo $department['id']?>">
					<?php echo $department['name']; ?>
					</option>
                <?php endwhile; ?>
            <?php endif; ?>
        </select>
    </form>

</body>
</html>