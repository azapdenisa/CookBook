<?php 
include('../login/functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <link rel="stylesheet" type="text/css" href="styleLogin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    
	<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
    }
    .a:hover, a:link{
  text-decoration: none;
    }
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br><br>
						<a href="home.php?logout='1'" style="color: red;" class="btn">logout</a>
                       &nbsp; <a href="create_user.php" class="btn"> + add user</a>
                       &nbsp; <a href="../recipes/new_recipe.php" class="btn"> + add recipe</a>
                       &nbsp; <a href="index.php" class="btn"> Go to home page</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>