<?php 
// de database gegevens //
$servername = "localhost";
$username = "s167430_boekenwinkel";
$pssword = "admin";
$dbname = "s167430_boekenwinkel";

// mysqli conn 
$conn = mysqli_connect($servername, $username, $pssword, $dbname);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}