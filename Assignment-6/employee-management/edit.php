<?php

include 'db.php';

$id=$_GET['id'];

$result=mysqli_query($conn,"SELECT * FROM employees WHERE id=$id");

$row=mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$position=$_POST['position'];
$salary=$_POST['salary'];

mysqli_query($conn,"UPDATE employees SET
name='$name',
email='$email',
phone='$phone',
position='$position',
salary='$salary'
WHERE id=$id");

header("Location:index.php");

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Edit Employee</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<?php include 'navbar.php'; ?>

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-warning">
<h4>Edit Employee</h4>
</div>

<div class="card-body">

<form method="POST">

<input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control mb-3">

<input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control mb-3">

<input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control mb-3">

<input type="text" name="position" value="<?php echo $row['position']; ?>" class="form-control mb-3">

<input type="number" name="salary" value="<?php echo $row['salary']; ?>" class="form-control mb-3">

<button type="submit" name="update" class="btn btn-warning">
Update Employee
</button>

</form>

</div>

</div>

</div>

</body>

</html>