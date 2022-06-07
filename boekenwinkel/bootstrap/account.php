<!-- dit controlleert of je goed ingelogd bent met de admin login -->
<?php
    session_start();

    if($_SESSION['email'] == "admin@admin.admin" || $_SESSION['password'] == "admin") {
           echo '<script>console.log("Ingelogd als admin!")</script>';
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="css/accountcss.css" rel="stylesheet" />

    <title>Account</title>
</head>

<!-- Bootstrap Icons-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
<!-- Google fonts-->
<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
    rel="stylesheet" type="text/css" />
<!-- SimpleLightbox plugin CSS-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
<!-- Core theme CSS (includes Bootstrap)-->
<link href="css/accountcss.css" rel="stylesheet" />

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="boekenwinkel.php#page-top">Boekenwinkel</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="boekenwinkel.php">Boeken</a></li>
                    <li class="nav-item"><a class="nav-link" href="boekenwinkel.php#portfolio">top 10</a></li>
                    <li class="nav-item"><a class="nav-link" href="boekenwinkel.php#contact">Contact</a></li>
                    <li class="nav-item">
                        <div class="account"><a class="nav-link" href="logout.php">Uitloggen</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- dit is de account pagina waar je je gebruikersnaam en email ziet en de functie krijg om het te veranderen -->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">

                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Uw Account Gegevens</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <div class="text-white-75">
                        <p class="text-white-75">

                        <?php echo "<p1>Welkom " . $_SESSION['username'] . "</p1>"; ?><br>

                        <p>Uw Gebruikersnaam: </p>

                        <?php echo "<p>" . $_SESSION['username'] . "</p>"; ?><br>

                        <p>Uw E-mail: </p>

                        <?php echo "<p>" . $_SESSION['email'] . "</p>"; ?><br>

                        </p>
                    </div>
                    <a class="btn btn-primary btn-xl" href="accountaanpassingen.php">Bewerken</a>
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
    

<!-- stukje code voor het toevoegen van een boek -->
    <form method="POST" action="../bootstrap/boeken_paginas/boek.php">
        <label for="title">title</label>
        <input name="title" type="text" required>
        <label for="auteur">auteur</label>
        <input name="auteur" type="text" required>
        <label for="uitgever">uitgever</label>
        <input name="uitgever" type="text" required>
        <label for="foto">Foto</label>
        <input name="foto" type="file" required>
        <button type="submit" name="sbt">Verstuur</button>
</form>
</body>

</html>

