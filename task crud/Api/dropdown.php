
<?php
if(isset($_POST['submit'])){
include 'dbconnect.php';
$name = $_POST['name'];
$sql = "INSERT into task2(country) 
values('$name')";
if(mysqli_query($conn,$sql)){
    header("Location: dropdown.php");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <div>
      <form action="dropdown.php" method="post">
          <input type="text" name="name" id="">
          <input type="Submit" name="submit" value="Add country">
      </form>
      
    </div>
    <h1>Show Record</h1>

    <select name="" id="">
       <option value="">---Select Country---</option>


<?php
   include 'dbconnect.php';
    
   $sql = "Select * From task2";
    
   $query = mysqli_query($conn,$sql);
   if( mysqli_num_rows($query)>0){
       while($row = mysqli_fetch_assoc($query)){

?>
   
   <option value="<?php echo $row['id'] ?>"><?php echo $row['country'] ?></option>

<?php
       }
   }
?>

</select>

<select name="" id="">
       <option value="">---Select city---</option>


<?php
   include 'dbconnect.php';
    
   $sql = "Select * From task3";
    
   $query = mysqli_query($conn,$sql);
   if( mysqli_num_rows($query)>0){
       while($row = mysqli_fetch_assoc($query)){

?>
   
   <option value="<?php echo $row['id'] ?>"><?php echo $row['city'] ?></option>

<?php
       }
   }
?>

</select>

</body>
</html>