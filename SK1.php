<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Mulai
 2. Masukkan dua angka untuk selanjutnya akan dikalkulasi
 3. Pilih operasi matematikanya
 4. Klik Ok untuk submit
 5. Muncul hasil dari pengoperasian dua angka yang telah diinputkan sebelumnya
 6. Selesai
-->
	<head>
		<title>Studi Kasus 1</title>
	</head>
	<body>
		<h1>Kalkulator Sederhana</h1>
		<!-- pengiriman data melalui metode POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			<input type="text" name="v1" placeholder="Variable 1" value="<?php echo $_POST['v1']; ?>" required />
			<!-- select untuk menentukan operasi perhitungan -->
			<select name="ops">
				<option value="+" <?php if($_POST['ops']=='+') echo"selected"; ?>>+</option>
				<option value="-" <?php if($_POST['ops']=='-') echo"selected"; ?>>-</option>
				<option value="x" <?php if($_POST['ops']=='x') echo"selected"; ?>>x</option>
				<option value="/" <?php if($_POST['ops']=='/') echo"selected"; ?>>/</option>
			</select>
			<input type="text" name="v2" placeholder="Variable 2" value="<?php echo $_POST['v2']; ?>" required />
			<input type="submit" value="=" />
		<?php
			// "if" digunakan untuk menentukan proses yang akan dijalankan
			if(isset($_POST['v1']) && isset($_POST['v2'])){
				if($_POST['ops']=='+') $hasil=$_POST['v1'] + $_POST['v2'];
				else if($_POST['ops']=='-') $hasil=$_POST['v1'] - $_POST['v2'];
				else if($_POST['ops']=='x') $hasil=$_POST['v1'] * $_POST['v2'];
				else if($_POST['ops']=='/') $hasil=$_POST['v1'] / $_POST['v2'];
				
			}
		?>
			<input type='text' name='hasil' value='<?php echo $hasil;?>' readonly />
		</form>
	</body>
</html>