<?php
    require'koneksi.php';

    // jikok data sing ape dikirim ngo form
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        // nyeleksi data user dengan username karo password sing bener
        $data = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password'");

		// ngitung data sing ditemu
		$cek = mysqli_num_rows($data);

		if ($cek > 0) {
			$_SESSION['status'] = "login";
			header("location: tampilan.php");
		} else {
			echo"<script>windows.alert('kesalahan login') windows.location='index.html'</script>";
		}
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>md5</title>
	<style>
		body {
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
			background:black;
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
		}

		.login {
			padding: 2em;
			margin: 6em auto;
			width: 17em;
			background: lightblue;
			border-radius: 3px;
		}

		.input {
			border-radius: 5px;
			padding: 5px;
			background: #efe;
		}

	</style>
</head>
<body>
	<div class="login">
		<h2>Masukkan Username dan Password untuk login</h2>
		<form action="" method="post">
			<table>
				<tr>
					<td>
						Username
					</td>
					<td>
						<input type="text" name="username" placeholder="username" required>
					</td>
				</tr>
				<tr>
					<td>
						password
					</td>
					<td>
						<input type="password" name="password" placeholder="password" required>
					</td>
				</tr>
				<tr>
					<td>
						<td colspan="2">
							<input type="submit" name="login" value="Login">
						</td>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>