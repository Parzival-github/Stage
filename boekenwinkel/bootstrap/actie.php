<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Boekenwinkel</title>
    <!-- Css voor de database items -->
    <link href="css/database.css" rel="stylesheet" />
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
            <a class="navbar-brand" href="boekenwinkel.php">Boekenwinkel</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="boekenwinkel.php">Boeken</a></li>
                    <li class="nav-item"><a class="nav-link" href="boekenwinkel.php#portfolio">top 10</a></li>
                    <li class="nav-item"><a class="nav-link" href="boekenwinkel.php#contact">Contact</a></li>
                    <li class="nav-item">
                        <div class="account"><a class="nav-link" href="account.php">Account</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead ">
        <div class="container px-4 px-lg-5 h-100 overflow-auto">
            <div class="row gx-4 align-items-center text-center">
                <div class="">
                    <?php
                    // include de search bar //
                    include "includes/searchBar.php";

                    // include de database gegevens
                    include 'config.php';
                    // connectie maken
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $pssword);

                    if (isset($_POST['btnSubmit'])) {

                        $str = $_POST["search"];
                        $sth = $con->query("SELECT * FROM boeken WHERE naam LIKE '%$str%'");

                        $sth->setFetchMode(PDO::FETCH_OBJ);

                        // Printen van data in de form van een foreach loop //
                        echo '<div class="flexbox">';
                        foreach ($sth as $row) {
                            echo '<div id="boeken" class="h-25 dbBoeken">';
                            echo '<div class="foto">' . $row->foto . "</div>";
                            echo "<br>";

                            echo '<div class="naam">' . "<b>" . $row->naam . "</b>" . "</div>";
                            echo "<br>";

                            echo '<div class="auteur">' . $row->auteur . "</div>";
                            echo "<br>";

                            echo '<div class="auteur">' . $row->uitgever . "</div>";
                            echo "<br>";

                            echo '<div class="prijs">' . "&euro;" . $row->prijs . "</div>";
                            echo '</div>';
                        }
                        echo '</div>';
                    } else {
                        echo "Er is iets fout gegaan probeer opnieuw!";
                    }

                    ?>
                </div>
            </div>
        </div>

    </header>

    <!-- Footer-->
    <footer class="bg-light py-5">
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