<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en"> 
<head>
	<title>Communiteach</title>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Bootstrap Documentation Template For Software Developers">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
	<link rel="shortcut icon" href="<?php echo base_url('assets/images/api.png') ?>"> 
	
	<!-- Google Font -->
	<link href="<?php echo('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap') ?>" rel="stylesheet">
	
	<!-- FontAwesome JS-->
	<script defer src="<?php echo base_url('assets/fontawesome/js/all.min.js') ?>"></script>

	<!-- Theme CSS --> 
	<link id="theme-style" href="<?php echo base_url('assets/css/login_style.css') ?>" rel="stylesheet">
	<link id="theme-style" href="<?php echo base_url('assets/css/theme.css') ?>" rel="stylesheet"> 
	
	
	<script src="<?php echo ('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js') ?>"></script>
	
</head> 

<body >
	<header class="header fixed-top">	    
		<div class="branding docs-branding">
			<div class="container-fluid position-relative py-2">
				<div class="docs-logo-wrapper">
					<div class="site-logo"><a class="navbar-brand" href="<?php echo base_url('index.php') ?>"><img class="logo-icon mr-2" src="<?php echo base_url('assets/images/logo-small.png') ?>" alt="logo"></a></div>
				</div>
			</div>
		</div>
	</header>
	<div class="page-header  py-5 text-center position-relative">
		<div class="container">
			<h1 class="page-heading single-col-max mx-auto">Communiteach</h1>
			<div class="page-intro single-col-max mx-auto">Indihome Guru Komunitas Untuk Negeri dan Anak Bangsa</div>
		</div>
	</div>
	<div class="login">
		<h1>Login</h1>	
		<form class="loginbox" action="<?php echo base_url('index.php/login/index') ?>" method="POST">
			<p><input type="text" placeholder="Username" name="username" required></p>
			<p><input type="password" placeholder="Password" name="password" required></p>
<!-- 			<p class="error">Authentication error.</p>
			<p class="valid">Valid. Please wait a moment.</p> -->
			<p class="submit"><input type="submit" name="commit" value="Login" id="submit"></p>

			<p><a class="nav-link page-scroll" href="<?php echo base_url('index.php/register/index') ?>">Belum bergabung? Ayo bergabung bersama kami.</a></p>
		</form>

	</div>
</body>         
</body>
</html> 

