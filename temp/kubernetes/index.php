<!DOCTYPE html>
<html lang="en">
<head>
<title>Frontpage, Welcome!</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Vitaj na uvodnej stranke!</h1>

<div class="mainsites">
<h2>Main sites:</h2>   
<a href="zoznam.php">Zoznam zamestnancov</a>
</div>


<div class="adminsite">
<h2>Admin sites:</h2>
<a href="zoznamadmin.php">Uprava zoznamu zames.</a>
</div>


<div class="end">
<p><?php include('/etc/hostname'); ?></p>
</div>

</body>
</html>
