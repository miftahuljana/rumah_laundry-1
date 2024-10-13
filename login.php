<?php 
	require_once('_functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rumah Laundry | Login</title>
	<link rel="stylesheet" href="<?=url('_assets/css/login.css')?>">
	<link rel="shortcut icon" href="<?= url('_assets/img/logo/favicon-svg.svg') ?>" type="image/x-icon">
</head>
<body>

	<?php if (isset($_SESSION['login']) && isset($_SESSION['master'])) : ?>
		<script>window.location='http://localhost/rumah_laundry/'</script>
	<?php endif ?> 

	<?php 
		if (isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			$data = mysqli_query($koneksi,"SELECT * FROM master WHERE username = '$username'");

			if (mysqli_num_rows($data) > 0) {
				$hasil = mysqli_fetch_assoc($data);

				if (password_verify($password, $hasil['password'])) {
					$_SESSION['master'] = $username;
					$_SESSION['login'] = true; ?>
						<script>window.location="http://localhost/rumah_laundry/";</script>
				<?php 
				}else {?>

					<div class="overlay">
						<div class="boxSalah">
							<a href="<?=url('login.php');?>" class="close">&times;</a>
							<p>Password Salah!</p>
						</div>
					</div>
				
				<?php 
				}
			}else{?>
				<div class="overlay">
					<div class="boxSalah">
						<a href="<?=url('login.php');?>" class="close">&times;</a>
						<p>Username & password salah!</p>
					</div>
				</div>
			<?php 
			}
		}
	?>

	<div class="box">
		<div class="box-content">
			<div class="col box__left">
				<div class="logo">
				</div>
				<div class="box__left-title">
					<h4>Login untuk akunmu</h4>
				</div>

				<div class="box__left-form">
					<form action="" method="post">
						<div class="box__left-form-group">
							<div class="input-form">
								<input type="text" name="username" placeholder="Username" required autocomplete="off">
							</div>
						</div>

						<div class="box__left-form-group">
							<div class="input-form">
								<input type="password" name="password" placeholder="Password" required autocomplete="off">
							</div>
						</div>

						<div class="box__left-form-group">
							<button type="submit" name="login" class="btn-login mt-1">Login</button>
						</div>
					</form>
				</div>
			</div>

			<div class="col box__right">
				<div class="box__right-content">
					<div class="text__right">
						<h1>Rumah Laundry</h1>
					</div>
	
		<script>
		// mengambil tanggal hari ini
		var now = new Date();
		var tahun = now.getFullYear();
		// menampilkan tahun di dalam elemen HTML
		document.getElementById("tahun").innerHTML = tahun;
		</script>
	
	</div>

</body>
</html>