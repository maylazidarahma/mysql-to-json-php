<?php
$conn = mysqli_connect('localhost', 'root', '', 'indonesia');
$getdata = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM districts WHERE regency_id ='$getdata'");

?>
<html>
<head>
<title>Kecamatan</title>
</head>
<body>
<H1>DATA KECAMATAN</H1>
<?php
while ($row = mysqli_fetch_assoc($query)) {?>
	<a href='desa.php?id=<?php echo $row['id']?>'><?php echo json_encode($row)?></a><br>
	<?php
}				
?>
</body>

</html>