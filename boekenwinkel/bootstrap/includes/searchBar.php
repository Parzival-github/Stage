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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<!-- alle searchbar elements -->
<body>
    <div class="topnav">
        <div class="dropdown">
            <button class="dropbtn">Sorteren op</button>
            <div class="dropdown-content">
                <!-- button onclick functions -->
                <a onclick=sort_naam()>naam</a>
                <a onclick=sort_auteur()>auteur</a>
                <a onclick=sort_uitgever()>uitgever</a>
                <a onclick=sort_prijs()>prijs</a>
            </div>
        </div>
        <form method="POST" action="actie.php">
            <input class="input" type="text" placeholder="Search.." name="search">
            <button class="button" type="submit" name="btnSubmit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</body>

</html>