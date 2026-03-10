<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>

<head>

<title>Employee Management</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="style.css">

</head>

<body>

<?php include 'navbar.php'; ?>

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-primary text-white">
<h4>Employee Records</h4>
</div>

<div class="card-body">

<table class="table table-hover table-bordered text-center">

<thead class="table-dark">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Position</th>
<th>Salary</th>
<th>Action</th>
</tr>

</thead>

<tbody>

<?php

$query="SELECT * FROM employees";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['position']; ?></td>
<td>₹<?php echo $row['salary']; ?></td>

<td>

<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>

<a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</div>

</body>

</html>