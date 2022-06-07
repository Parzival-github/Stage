<!-- pagina gemaakt met bootstrap -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Boekenwinkel</title>
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Boekenwinkel</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#onze boeken">Boeken</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">top 10</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item">
                        <div class="account"><a class="nav-link" href="account.php">Account</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Uw favoriete boekenwinkel</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Welkom op onze website, hier kunt u ons assortiment zien aan boeken dat wij verkopen. Als u vragen heeft kunt u rechtsbovenin op "Contact" klikken en een mailtje versturen! Veel kijk plezier!</p>
                    <a class="btn btn-primary btn-xl" href="#onze boeken">Klik hier!</a>
                </div>
            </div>
        </div>
    </header>
    <!-- onze boeken-->
    <section class="page-section bg-primary" id="onze boeken">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Onze boeken</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Klik hier voor al onze boeken</p>
                    <a class="btn btn-light btn-xl" href="boeken.php?sort=naam">Klik hier!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- top 10-->
    <?php
    // de database gegevens //
    include 'config.php';

    // connectie maken //
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $pssword);
        // PDO mode naar exception //
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $data = $conn->query("SELECT * FROM top10boeken")->fetchAll();


        echo '<div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-3">';

        foreach ($data as $row) {
            echo $row["foto"];
        }

        echo    '</div>
        </div>
    </div>';
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage(); // Maakt een error bericht als er een fout optreed
        echo "Connection to database failed: " . $e->getMessage(); // Maakt een error bericht als er een fout optreed
    }
    $conn = null; // Disconnect van de database
    ?>
    <!-- Contact-->
    <div id="contact" class="w-25 mx-auto">
        <form action="actie2.php">
            <br>
            <h2 class="text-center mt-auto g-2">Neem contact op!</h2>
            <br>
            <div class="form-floating mb-3 ">
                <input type="text" class="form-control" id="floatingInput" name="naam" placeholder="name@example.com" required>
                <label for="floatingInput">U naam </label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingPassword" name="email" placeholder="Password" required>
                <label for="floatingPassword">U email</label>
            </div>
            <br>
            <div class="form-floating">
                <textarea class="form-control" placeholder="U bericht hier" id="floatingTextarea2" name="text" style="height: 100px" required></textarea>
                <label for="floatingTextarea2">U bericht</label>
            </div>
            <br>
            <button class="d-grid gap-2 col-6 mx-auto btn btn-primary btn-large" type="submit" name="submit"><span>Afspraak maken</span></button>
        </form>
        <br>
    </div>

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