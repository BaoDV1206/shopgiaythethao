<?php 

require "../database/database.php";
?>
<?php 
    $DB = new AdminLogin();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $login_check = $DB->admin_login($username, $password);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .container{
            text-align: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <section id="container">
            <form action="login.php" method="post" id="login">
                <h1>Login</h1>
                <div><input type="text" name="username" placeholder="Enter User name..."></div>
                <div><input type="text" name="password" placeholder="Enter Password..."></div>
                <div><input type="submit" value="Login" /></div>
            </form>
        </section>
    </div>
</body>
</html>