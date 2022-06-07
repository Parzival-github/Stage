<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Twee broers uit Auschwitz</title>
    <!-- Css voor de database items -->
    <link href="css/boeken.css" rel="stylesheet" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="../boekenwinkel.php">Boekenwinkel</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="../boekenwinkel.php">Boeken</a></li>
                    <li class="nav-item"><a class="nav-link" href="../boekenwinkel.php#portfolio">top 10</a></li>
                    <li class="nav-item"><a class="nav-link" href="../boekenwinkel.php#contact">Contact</a></li>
                    <li class="nav-item">
                        <div class="account"><a class="nav-link" href="../account.php">Account</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center text-center">
                <div class="">
                    <?php
                    // localhost include en ao alkmaar config
                    // include '../includes/localhost.php';
                    include '../config.php';


                    // connectie maken
                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $pssword);
                        // PDO mode naar exception
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $data = $conn->query("SELECT * FROM boeken WHERE naam LIKE 'Twee broers uit Auschwitz'");

                        echo '<div class="d-flex">';
                        // Printen van data
                        foreach ($data as $row) {
                            echo '<div id="boeken" class="dbBoeken col-4">';

                            echo '<div class="foto">' . $row["foto"] . "</div>";
                            echo "<br>";
                            echo '<div class="naam">' . "<b>" . $row["naam"] . "</b>" . "</div>";
                            echo "<br>";
                            echo '<div class="auteur">' . $row["auteur"] . "</div>";
                            echo "<br>";
                            echo '<div class="auteur">' . $row["uitgever"] . "</div>";
                            echo "<br>";
                            echo '<div class="prijs">' . "&euro;" . $row["prijs"] . "</div>";

                            echo '</div>';

                            echo '<div class="recensie col-8">' . $row["recensie"] . "</div>";
                        }
                        echo "</div>";
                    } catch (PDOException $e) {
                        echo $sql . "<br>" . $e->getMessage(); // Maakt een error bericht als er een fout optreed
                        echo "Connection to database failed: " . $e->getMessage(); // Maakt een error bericht als er een fout optreed
                    }
                    $conn = null; // Disconnect van de database
                    ?>
                </div>
            </div>
        </div>


    </header>

    <!-- Footer-->
    <footer class="bg-light py-5">
        <?php
        if ($_SESSION['email'] == "admin@admin.admin" || $_SESSION['password'] == "admin") {
        ?>
            <div>
                <div class="btn">
                    <form method="POST" action="#">
                        <input class="input" type="text" name="recensietxt">
                        <button class="btn btn-primary" type="submit" name="Sub">pas aan!
                    </form>
                </div>


                <?php
                if (isset($_POST["Sub"])) {
                    // localhost include en ao alkmaar config
                    // include '../includes/localhost.php';
                    include '../config.php';

                    $txt = $_POST['recensietxt'];

                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pssword);
                        // set the PDO error mode to exception
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $sql = "UPDATE boeken SET recensie='$txt' WHERE id=1";

                        // Prepare statement
                        $stmt = $conn->prepare($sql);

                        // execute the query
                        $stmt->execute();

                        // echo a message to say the UPDATE succeeded
                        echo $stmt->rowCount() . " records UPDATED successfully";
                    } catch (PDOException $e) {
                        echo $sql . "<br>" . $e->getMessage();
                    }

                    $conn = null;
                    header("Refresh: 0; url=boek1.php");
                }

                ?>
            </div>
        <?php
        }
        ?>
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2021 - Ezra , Mitch , Mees </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

</body>


</html>