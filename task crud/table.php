
<?php
require_once __DIR__.'/dbconnect.php';
$a = mysqli_query($conn,"select*from emp");


?>
<html>
<head>
<style>
.a
{
	height:400px;
	width:300px;
	font-size:30px;
}
</style>
</head>
<body>
<div class="a">
<table border='1' cellspacing="4" cellpadding="2" style="color:black">
<tr>
<th>id</th>
<th>email</th>
<th>Gender</th>
<th>password</th>
<th>pass</th>
</tr>
<?php while($row = mysqli_fetch_assoc($a)):?>
<tr>
<td><?php echo $row['id']?></td>
<td><?php echo $row['email']?></td>
<td><?php echo $row['gen']?></td>
<td><?php echo $row['password']?></td>
<td><?php echo $row['pass']?></td>
</tr>
<?php endwhile; ?>
</table>
</br>
<a href="form1.php"></a>
</div>
</body>
</html>