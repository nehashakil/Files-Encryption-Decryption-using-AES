<!DOCTYPE html>
<html>
<head>
	<title>File Encrypt & Decrypt Using AES</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<form action="decrypt.php" method="post" enctype="multipart/form-data">

	<div class="dec-container">

		<div class="box">

				<h1>Decrypt Files</h1>

				<div class="inner-box">
					<h2>Input Key</h2>
					<div><input type="text" name="key" placeholder="key" required></div>
				</div>

				<div class="inner-box">
					<h2>Upload Document</h2>
					<div><input type="file" name="doc"></div>
				</div>

				<div class="inner-box">
					<h2><button class="btn" type="submit">Decrypt</button></h2>
				</div>

		</div>

	</div>

</form>
</body>
</html>