<?php
$conn = mysqli_connect('localhost', 'root', '', 'indonesia');
$getdata = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM villages WHERE district_id ='$getdata'");

?>
<html>
<head>
<title>Desa</title>
</head>
<body>
<H1>DATA DESA</H1>
<?php
while ($row = mysqli_fetch_assoc($query)) {?>
	<a href=''><?php echo json_encode($row)?></a><br>
	<?php
}				
?>
</body>

</html>