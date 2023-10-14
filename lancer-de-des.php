<?php
    if ($_POST) {
        $nbdes = $_POST['nbdes'];
    }
    else {
        $nbdes = 0;
    }

    if ($_GET) {
        $faces = $_GET['faces'];
        for ($i=0 ; $i<$nbdes ; $i++) {
            $results[] = rand (1,$faces);
        }
    }
    else {
        $faces = 6;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lancer de dé</title>

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
<body class="diceBody">
    
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

<main class="diceMain">
    <section class="home-title-dice" id="home-title-dice">
        <h1>Simulateur de lancer de dé</h1>
        <h2>“Jouer, c'est expérimenter le hasard.”</h2>
    </section>

    <nav class="navDice">
        <ul>
            <li><a href="lancer-de-des.php?faces=6">Dé à 6 faces</a></li>
            <li><a href="lancer-de-des.php?faces=8">Dé à 8 faces</a></li>
            <li><a href="lancer-de-des.php?faces=10">Dé à 10 faces</a></li>
            <li><a href="lancer-de-des.php?faces=20">Dé à 20 faces</a></li>
        </ul>
    </nav>    
    
    <section class="tirage">
        <h2>Tirage à <?= $faces ?> faces</h2>
        
        <div class="simulator">
            <?php
                for ($i=0 ; $i<$nbdes ; $i++) {
                if ($_POST) { ?>
                    <div class='total'>
                        <span><?php echo $results[$i] ?></span>
                    </div>
            <?php
                    }
                }
                if (!$_POST) { ?>
                    <div class='total'>
                        <span></span>
                    </div>
            <?php
                }
            ?>
        </div>

        <div class="submitForm">
            <form action="lancer-de-des.php?faces=<?= $faces ?>" method="POST">
                <label class="textForm" for="select" style="text-align: center;">Choisissez le nombre de dés</label>
                <select name="nbdes" class="nombreDes">
                    <option value="1">1 dé</option>
                    <option value="2">2 dés</option>
                    <option value="3">3 dés</option>
                </select>

                <input type="submit" value="Lancez le dé">
            </form>
        </div>
    </section>
</main>

<footer id="contact" style="color: #f9e9fb;">
    <div class="copyrights">
        <p>Jeux de hasard - Copyright 2023.</p>
    </div>
    <div class="contact-details">
        <div class="mail">
            <i class="fa-solid fa-envelope"></i><p>contact@gmail.fr</p>
        </div>
        <div class="phoneNumber">
            <i class="fa-solid fa-phone"></i><p>06 02 03 04 05</p>
        </div>
    </div>
    <div class="socials">
        <a href="https://github.com/Julia-Legrand/Jeux-de-hasard.git"><i class="fa-brands fa-github" style="color: #f9e9fb;"></i></a>
        <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin" style="color: #f9e9fb;"></i></a>
        <a href="https://www.instagram.com"><i class="fa-brands fa-instagram" style="color: #f9e9fb;"></i></a>
            
    </div>
</footer>

<!--SCRIPT-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>