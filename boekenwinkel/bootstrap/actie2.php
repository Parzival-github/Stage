<?php

// de database gegevens //
include 'config.php';

// connectie maken
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$naam = $_POST['naam'];
$email = $_POST['email'];
$text = $_POST['text'];
// formdata inserten in de database
$sql = "INSERT INTO contact (naam, email, text)
            VALUES ('$naam', '$email', '$text')";
// aangeven of het is gelukt of niet
if ($conn->query($sql) === TRUE) {
    echo '<script>console.log("U bericht is verstuurd!")</script>';
}

header("Location: boekenwinkel.php#contact");
exit();
