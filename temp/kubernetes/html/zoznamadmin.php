<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Page!</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="insertdata">
<form action="insert.php" method="post">
<p>
<label for="name">First Name:</label>
<input type="text" name="name" id="name">
</p>
<p>
<label for="surname">Last Name:</label>
<input type="text" name="surname" id="surname">
</p>
<p>
<label for="department">Department:</label>
<input type="text" name="department" id="department">
</p>
<p>
<label for="phonenumber">Phone number:</label>
<input type="text" name="phonenumber" id="phonenumber">
</p>
<input type="Submit" value="Submit">
</form>
</div>

<div class="end">
<p><?php include('/etc/hostname'); ?></p>
</div>
</body>
</html>
