<?php
$conn = mysqli_connect('localhost', 'root', '', 'indonesia');
$query = mysqli_query($conn, 'SELECT * FROM provinces');
?>
<html>
<head>
<title>Provinsi</title>
</head>
<body>
<h1>DATA PROVINSI</h1>
<?php
while ($row = mysqli_fetch_assoc($query)) {?>
	<a href='kabupaten.php?id=<?php echo $row['id']?>'><?php echo json_encode($row)?></a><br>
	<?php
}				
?>
</body>

</html>