<!DOCTYPE html>
<html lang="en">
<?php
session_start();
 
if (!empty($_SESSION['username'])) {
        header('location:index.php');
}
?>

<head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Form Login | Aplikasi Data Jama'ah Umrah</title>
        <meta name="author" content="Faisal Abdurrahman" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>	
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
				background: #7f9b4e url(images/bg2.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		</style>
    </head>
 
  <body>
        <div class="container">
		
          
			
			<header>
			
				<h1> <strong>أهلاً وسهلاً</strong> </h1>
				<h1>Aplikasi Data Jama'ah Umrah</h1>
				<h2>Silahkan masuk untuk melanjutkan</h2>
				
			
			</header>
			
			<section class="main">
				<form class="form-4" name="login" action="config/otentikasi.php" method="post">
				    <h1>Login</h1>
					<?php
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
    if ($_GET['error'] == 1) {
        echo '<h2>Username dan Password belum diisi!</h2>';
    } else if ($_GET['error'] == 2) {
        echo '<h2>Username belum diisi!</h2>';
    } else if ($_GET['error'] == 3) {
        echo '<h2>Password belum diisi!</h2>';
    } else if ($_GET['error'] == 4) {
        echo"<script>alert('Username atau password yang Anda masukkan Salah!');</script>";
    }
}
?>
				    <p>
				        <label for="login">Username or email</label>
				        <input type="text" name="username" placeholder="Username" required>
				    </p>
				    <p>
				        <label for="password">Password</label>
				        <input type="password" name='password' placeholder="Password" required> 
				    </p>

				    <p>
				        <input type="submit" name="submit" value="Continue">
				    </p>       
				</form>​
			</section>
			
        </div>
    </body>
</html>