<?php

include 'db.php';

if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$position=$_POST['position'];
$salary=$_POST['salary'];

$query="INSERT INTO employees(name,email,phone,position,salary)
VALUES('$name','$email','$phone','$position','$salary')";

mysqli_query($conn,$query);

header("Location:index.php");

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Add Employee</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<?php include 'navbar.php'; ?>

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-success text-white">
<h4>Add New Employee</h4>
</div>

<div class="card-body">

<form method="POST">

<div class="row">

<div class="col-md-6 mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label>Phone</label>
<input type="text" name="phone" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label>Position</label>
<input type="text" name="position" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label>Salary</label>
<input type="number" name="salary" class="form-control" required>
</div>

</div>

<button type="submit" name="submit" class="btn btn-success">
Add Employee
</button>

</form>

</div>

</div>

</div>

</body>

</html>