<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application de jeux de hasard</title>

    <!--ICONS-->
    <script src="https://kit.fontawesome.com/d977b1f38d.js" crossorigin="anonymous"></script>

    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <!--STYLES-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="Resources/CSS/style.css">
</head>

<body class="indexBody">

    <header>
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container-fluid">
                <div class="menu-bloc-left">
                    <a class="navbar-brand" href="index.php" style="color: #f9e9fb; font-size: 30px; font-family: 'Handlee', cursive;">Jeux de hasard</a>
                </div>
                <div class="menu-bloc-right">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#myMenu" aria-controls="myMenu" aria-expanded="false" aria-label="Menu for mobile">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="myMenu">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link" href="index.php" style="margin: 10px; color: #f9e9fb; font-size: 20px; font-family: 'Handlee', cursive;">Accueil</a>
                            <a class="nav-item nav-link" href="lancer-de-des.php" style="margin: 10px; color: #f9e9fb; font-size: 20px; font-family: 'Handlee', cursive;">Lancer de dé</a>
                            <a class="nav-item nav-link" href="boule-magique.php" style="margin: 10px; color: #f9e9fb; font-size: 20px; font-family: 'Handlee', cursive;">Boule magique</a>
                            <a class="nav-item nav-link" href="#contact" style="margin: 10px; color: #f9e9fb; font-size: 20px; font-family: 'Handlee', cursive;">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="indexMain">
        <section class="home-title-index">
            <h1>Bienvenue sur mon application</h1>
            <h2>Choisissez un jeu</h2>
        </section>

        <section class="games">
            <div class="diceGame">
                <a href="lancer-de-des.php">Lancer de dé</a>
            </div>
            <div class="ballGame">
                <a href="boule-magique.php">Boule magique</a>
            </div>
        </section>
    </main>

    <footer id="contact">
        <div class="copyrights">
            <p>Jeux de hasard - Copyright 2023.</p>
        </div>
        <div class="contact-details">
            <div class="mail">
                <i class="fa-solid fa-envelope"></i>
                <p>contact@gmail.fr</p>
            </div>
            <div class="phoneNumber">
                <i class="fa-solid fa-phone"></i>
                <p>06 02 03 04 05</p>
            </div>
        </div>
        <div class="socials">
            <a href="https://github.com/Julia-Legrand/Jeux-de-hasard.git"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>

        </div>
    </footer>

    <!--SCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>