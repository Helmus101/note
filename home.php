<!--<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Home</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    </head>
    <body>
        <nav class ="navbar navbar-expand-xl navbar-dark bg-transparent", class="navigation", style="color:#fff; ">
            <a class ="navbar-brand" href ="#"> Website Name </a>
            <button class ="navbar-toggler" type ="button" data-toggle ="collapse" data-target ="#colNav">
            <span class ="navbar-toggler-icon"></span>
            </button>
            <div class ="collapse navbar-collapse" id ="colNav">
            <ul class ="navbar-nav">
            <li class ="nav-item">
            <a class ="nav-link" href="#" style="color:
            #fff;"> Home </a>
            </li>
            <div class="right-links">
            <li class ="nav-item">
            <button class="button" href="logout.php">Logout</button>
            </li>
            </div>
           </ul>

            </nav>
          <br>

        <main>
            <div class="main-box top">
                <div class="top">
                    <div class="box">
                        <p>Hello <b>Willem</b>, Welcome</p>
                    </div>
                    <div class="box">
                        <p>Your email is <b>tjong.willem@gmail.com</b></p>
                    </div>
                </div>
                <div class="bottom">
                    <div class="box">
                       <p>And your password is <b>1234</b></p> 
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>-->

<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
	<body class="loggedin">
    <nav class ="navbar navbar-expand-xl navbar-dark bg-transparent", class="navigation", style="color:#fff; ">
            <a class ="navbar-brand" href ="#"> Website Name </a>
            <button class ="navbar-toggler" type ="button" data-toggle ="collapse" data-target ="#colNav">
            <span class ="navbar-toggler-icon"></span>
            </button>
            <div class ="collapse navbar-collapse" id ="colNav">
            <ul class ="navbar-nav">
            <li class ="nav-item">
            <a class ="nav-link" href="profile.php" style="color:
            #fff;"><i class="fas fa-user-circle"></i>Profile </a>
            </li>
            <li class ="nav-item">
            <a class ="nav-link" href ="logout.php" style="color:
            #fff;"> <i class="fas fa-sign-out-alt"></i>Logout</a>
            </li>
            
            </ul>
            </div>
            </nav>
		<br>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>
	</body>
</html>


 
