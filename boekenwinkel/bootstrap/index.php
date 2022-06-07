<?php
include 'config.php';
session_start();
error_reporting(0);
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

    // conn opnieuw want andere functions werken met PDO
    $conn = mysqli_connect($servername, $username, $pssword, $dbname);
    
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        print_r($row);

        $_SESSION['username'] = $row['username'];

        header("Location: account.php");
    } else {
        echo "<script>alert('E-mail of wachtwoord is incorrect, probeer opnieuw!')</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="css/inlogcss.css" rel="stylesheet" />

    <title>Inloggen</title>
</head>

<body>
    <style>
        /* stukje styling op alleen deze pagina */
        body { 
            background-image: url('pictures/background.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>
    <!-- login of registeren -->
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Log In</p>
            <div class="input-group">
                <input type="email" placeholder="E-mail" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Wachtwoord" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Log In</button>
            </div>
            <p class="login-register-text">Heb je nog geen account? <a href="register.php">Registreer hier</a>.</p>
        </form>
    </div>
</body>

</html>