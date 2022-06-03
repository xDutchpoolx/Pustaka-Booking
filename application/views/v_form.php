<!DOCTYPE html>
<html>
<head>
	<title>Form Matakuliah Mahasiswa</title>
</head>
<body>
	<h1>Mata Kuliah Mahasiswa</h1>
	<?php echo validation_errors(); ?>
	<?php echo form_open('form/aksi'); ?>
		<label>Nama</label><br/>
		<input type="text" name="nama"><br/>
        <label>Nama Mata Kuliah</label><br/>
		<input type="text" name="matkul"><br/>
        <label>Kode Mata Kuliah</label><br/>
		<input type="text" name="kodematkul"><br/>
		<label>Email</label><br/>
		<input type="text" name="email"><br/>
		<label>Konfirmasi Email</label><br/>
		<input type="text" name="konfir_email"><br/>
		<input type="submit" value="Simpan">
	</form>
</body>
</html>