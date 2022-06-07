        <!-- pagina om je account gegevens aan te passen -->
        <?php

        session_start();

        if (!isset($_SESSION['username'])) {
            header("Location: index.php");
        }
        ?>

        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

            <!-- Bootstrap Icons-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
            <!-- Google fonts-->
            <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
            <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
            <!-- SimpleLightbox plugin CSS-->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
            <!-- Core theme CSS (includes Bootstrap)-->
            <link href="css/accountaanpassingencss.css" rel="stylesheet" />

            <title>Account</title>
        </head>

        <body id="page-top">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
                <div class="container px-4 px-lg-5">
                    <a class="navbar-brand" href="boekenwinkel.php#page-top">Boekenwinkel</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
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
            <!-- Masthead-->
            <header class="masthead">
                <div class="container px-4 px-lg-5 h-100">
                    <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                        <div class="col-lg-8 align-self-end">
                            <h1 class="text-white font-weight-bold">Uw Account Gegevens aanpassen</h1>
                            <hr class="divider" />
                        </div>
                        <div class="col-lg-8 align-self-baseline">
                            <form method="POST" action="accountaanpassingen.php">
                                <div class="form-floating">
                                    <p class="text-white-75">

                                    <p class="text-white-75">Gebruikersnaam</p>

                                    <div class="form-floating mb-3 w-50 mx-auto">
                                        <input type="text" class="form-control" id="floatingInput" name="oudnaam" placeholder="name@example.com" required>
                                        <label for="floatingInput">Uw oude gebruikersnaam </label>
                                    </div>

                                    <div class="form-floating mb-3 w-50 mx-auto">
                                        <input type="text" class="form-control" id="floatingInput" name="naam" placeholder="name@example.com" required>
                                        <label for="floatingInput">Uw nieuwe gebruikersnaam </label>
                                    </div>

                                    <p class="text-white-75">Uw E-mail: </p>

                                    <div class="form-floating w-50 mx-auto">
                                        <input type="email" class="form-control" id="floatingPassword" name="email" placeholder="Password" required>
                                        <label for="floatingPassword">Uw nieuwe E-mail</label>
                                    </div>
                                    <br>

                                    </p>
                                </div>
                                <input type="submit" class="btn btn-primary btn-xl" name="Sub">
                            </form>

                            <!-- Hier kan je je account gegevens aanpassen -->
                            <?php
                            if (isset($_POST["Sub"])) {
                                // include de database gegevens
                                include 'config.php';

                                $txt = $_POST['naam'];
                                $txt2 = $_POST['email'];
                                $oud = $_POST['oudnaam'];

                                try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    // set the PDO error mode to exception
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $sql = "UPDATE users SET username='$txt', email='$txt2' WHERE username='$oud' ";

                                    // Prepare statement
                                    $stmt = $conn->prepare($sql);

                                    // execute the query
                                    $stmt->execute();

                                    // zegt het als de update is gelukt
                                    echo " Gegevens aangepast!";
                                } catch (PDOException $e) {
                                    echo $sql . "<br>" . $e->getMessage();
                                }

                                $conn = null;
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