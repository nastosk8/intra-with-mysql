<?php
include("temp.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Zoznam zamestnancov</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="printdata">
<table class="datatable">
<thead>
    <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Department</th>
        <th>Phone number</th>
    </tr>
</thead>
<tbody>
<?php
while($row = mysqli_fetch_assoc($result)){?>
    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['surname']; ?></td>
        <td><?php echo $row['department']; ?></td>
        <td><?php echo $row['phonenumber']; ?></td>
        <tr>
            <?}?>
        </tbody>
</table>
</div>

<div class="end">
<p><?php include('/etc/hostname'); ?></p>
</div>

</body>
</html>