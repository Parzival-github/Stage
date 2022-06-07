<!-- pagina voor boeken aanmaken -->

<?php
if (isset($_POST['sbt'])) {
    // localhost include en ao alkmaar config
    // include '../includes/localhost.php';
    include '../config.php';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pssword);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $naam = $_POST['title'];
        $auteur = $_POST['auteur'];
        $uitgever = $_POST['uitgever'];
        $foto = $_POST['foto'];

        // insert values in de boeken database
        $sql = "INSERT INTO boeken (naam, auteur, uitgever, foto)
            VALUES ('$naam', '$auteur', '$uitgever', '$foto'";
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;

    // maakt een nieuwe boek pagina voor het toegevoegde boek
    $myfile = fopen($_POST['title'] . ".php", "w") or die("Unable to open file!");
    $txt = '<?php
            session_start();
            $_SESSION["boeknaam"] = "' . $_POST['title'] . '";?>';
    fwrite($myfile, $txt);
    $txt = file_get_contents("code/code.txt");
    fwrite($myfile, $txt);
    fclose($myfile);

    header("Refresh: 0; url=../account.php");
}
