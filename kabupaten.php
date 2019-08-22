<?php
$conn = mysqli_connect('localhost', 'root', '', 'indonesia');
$getdata = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM regencies WHERE province_id ='$getdata'");

?>
<html>
<head>
<title>Kabupaten</title>
</head>
<body>
<H1>DATA KABUPATEN</H1>
<?php
while ($row = mysqli_fetch_assoc($query)) {?>
	<a href='kecamatan.php?id=<?php echo $row['id']?>'><?php echo json_encode($row)?></a><br>
	<?php
}				
?>
</body>

</html>`
