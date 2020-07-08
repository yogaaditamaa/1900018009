<!DOCTYPE html>
<html>
<head>
	<title>Tabel</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php

	if ($_SERVER['REQUEST_METHOD'] == "POST" ) {
		
		$buka = fopen("pendaftaran.txt", "a+");
		$nama = $_POST['inputNama']; 
		$email = $_POST['mail'];
		$Telp = $_POST['nomer'];
		$user = $_POST['username'];
		$pw = $_POST['Password'];
		$tgl = $_POST['ttl'];
		$kl = $_POST['Kelamin'];
		$ag = $_POST['Agama'];

		fputs($buka, "$nama | $email | $Telp | $user | $pw | $tgl | $kl | $ag \n");
		fclose($buka);
	}
	?>
	<div class="body" style="width: 100%; height: 750px; background-image: url(490346.jpg); background-size: 100%">
		<div class="container" style="width: 100%; height: 700px; ">
			<table style="width: 100%; color: white">
				<tr>
					<td colspan="2" height="50px"; align="center">
						<h3>Daftar Akun Point Blank</h3>
					</td>
				</tr>
				<?php
					$buka = fopen("pendaftaran.txt", "a+");
					while ($in = fgets($buka,100)) {
						$pem = explode("|", $in);

						echo "<tr><td>Nama  </td><td>: $pem[0]</td></tr>";
						echo "<tr><td>E-mail  </td><td>: $pem[1]</td></tr>";
						echo "<tr><td>Telepon  </td><td>: $pem[2]</td></tr>";
						echo "<tr><td>Username </td><td>: $pem[3]</td></tr>";
						echo "<tr><td>Password </td><td>: $pem[4]</td></tr>";
						echo "<tr><td>Tanggal lahir  </td><td>: $pem[5]</td></tr>";
						echo "<tr><td>Kelamin  </td><td>: $pem[6]</td></tr>";
						echo "<tr><td>Agama </td><td>: $pem[7]</td></tr>";
					}
					

					fclose($buka);

				?>
			</table>
		</div>
		<div class="footer" style="width: 100%; height: 50px; background: maroon; color: white; line-height: 50px; font-style: italic; ">
			<center>Copyright &copy; 2020 Yoga Aditama</center>
		</div>
	</div>
</body>
</html>
