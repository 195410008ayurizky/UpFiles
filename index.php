<html>
<head>
<link rel="stylesheet" href="style.css"/>
</head>
<body> 	
	<div class="container">
	<div class="main">
		<form method="get" action="index.php" id="form">
		<h2>DATA IDENTITAS</h2>
		<hr/>
		<label>Nama	:</label>
		<input type="text" name="fnama" id="fnama"/>
		
		<label>Alamat	:</label>
		<input type="text" name="lalamat" id="lalamat"/>
		
		<label>No Hp	:</label>
		<input type="text" name="no_hp" id="no_hp"/>
		
		<label>tanggal lahir	:</label>
		<input type="text" name="tgl_lahir" id="tgl_lahir"/>
		
		<input type="submit" name="submit" id="submit" value="submit">
		</form>
		<?php include "proses.php";?>
	</div>
	</div>
</body>
</html>
