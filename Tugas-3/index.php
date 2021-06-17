<!-- 
Nama  : Muhammad Rofi
NIM   : 11119003 
-->

<?php session_start();

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T3-11119003-Muhammad Rofi</title>

    <link href="./css/styleindex.css" rel="stylesheet">
</head>
<body>
    <div class="navbar-top">
        <div class="title">
            <h1>Profile</h1>
        </div>
    </div>

    <div class="sidenav">
        <div class="profile">
            <img src="./image/a.jpg" alt="" width="100" height="100">

            <div class="name">
                Muhammad Rofi
            </div>
            <div class="job">
			 	College Student
            </div>
        </div>

        <div class="sidenav-url">
            <div class="url">
                <a href="" class="active">Profile</a>
                <hr align="center">
            </div>
            <div class="url">
				<a href="logout.php">Logout</a>
                <hr align="center">
            </div>
        </div>
    </div>

    <div class="main">
        <h2>IDENTITY</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>Muhammad Rofi</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>rofimuhammad22@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Hobbies</td>
                            <td>:</td>
                            <td>Reading Book, Playing Games, Listening Music</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>