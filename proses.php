<html>
<body style="background-color: #92a8d1;">

	<center><h2 style="font-family: Century Gothic; text-shadow: 20%">Silahkan Pilih</h2></center>
	<hr>
	<form action=" " method="POST" enctype="multipart/form-data">
	<table>
		<ul>
		<tr>
			<td><h3><li><b>Foto</b></h3></li></td>
			<td> <input type="file" name="photo" style="width: 80%; height: 20px; border-radius: 10%"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><h3><li><b>Hobi :</b></li></h3></td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="hoby[]" value="Membaca">Membaca<br>
				<input type="checkbox" name="hoby[]" value="Menulis">Menulis
			</td>
			<td>
				<input type="checkbox" name="hoby[]" value="Badminton">Badminton<br>
				<input type="checkbox" name="hoby[]" value="Sepak Bola">Sepak Bola
			</td>
			<td>
				<input type="checkbox" name="hoby[]" value="Bermain Game">Bermain Game
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><h3><li><b>Genre Film :</b></h3></li></td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="filem[]" value="Horror">Horror<br>
				<input type="checkbox" name="filem[]" value="Action">Action 
			</td>
			<td>
				<input type="checkbox" name="filem[]" value="Anime">Anime<br>
				<input type="checkbox" name="filem[]" value="Thriller">Thriller
			</td>
			<td>
				<input type="checkbox" name="filem[]" value="Animasi">Animasi
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><h3><li><b>Tujuan Traveling :</b></h3></li></td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="tujuan[]" value="Bali">Bali<br>
				<input type="checkbox" name="tujuan[]" value="Raja Ampat">Raja Ampat 
			</td>
			<td>
				<input type="checkbox" name="tujuan[]" value="Pulau Derawan">Pulau Derawan<br>
				<input type="checkbox" name="tujuan[]" value="Bangka Belitung">Bangka Belitung
			</td>
			<td>
				<input type="checkbox" name="tujuan[]" value="Labuan Bajo">Labuan Bajo
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td align="right"><input type="submit" name="submit" value="Submit"></td>
		</tr>	

		</ul>
	</table>
</html>
<?php
	if(isset($_POST['submit'])) {
		$hoby = $_POST['hoby'];
		$film = $_POST['filem'];
		$travel = $_POST['tujuan'];
		$foto = $_FILES['photo']['Foto'];

		echo "<br><br><br>";
		echo "<hr>";

		$uploaddir = 'gambar.png';
    	$uploadfile = $uploaddir . basename($_FILES['photo']['Foto']);

    	echo "<p>";

    	

	?>
	<center>
<table style="width: 20%; height: 10%; border-radius: 10%">
	<tr>
		<td colspan="2" align="center"><h3>Ini Dia Hasilnya</h3></td>
	</tr>	
	<tr>
		<td><b>Hobi :</b></td>
		<td align="center">
			<?php
				foreach ($hoby as $a) {
					echo $a."<br>";
				}
			?>		
		</td>
	</tr>
	<tr>
		<td><b>Film :</b></td>
		<td align="center">
			<?php
				foreach ($film as $b) {
					echo $b."<br>";
				}
			?>
		</td>
	</tr>
	<tr>
		<td><b>Tujuan Traveling :</b></td>
		<td align="center">
			<?php
				foreach ($travel as $c) {
					echo $c."<br>";
				}
			?>	
		</td>
	</tr>

	<tr>
		<td>Gambar</td>
		<td>
			<?php
				if (move_uploaded_file($_FILES['photo']['Foto'], $uploadfile)) {
      				echo "<img src='gambar.png' style='width:200px;height:200px'>";	
    			} else {
       				echo "Upload failed";
    			}
			?>
		</td>

	</tr>
</table>
	<?php		

	}
?>



