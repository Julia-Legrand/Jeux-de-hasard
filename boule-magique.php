<?php

    $responses = array();
    $responses[0] = "Oui bien sûr !";
    $responses[1] = "Absolument pas.";
    $responses[2] = "Peut-être...";
    $responses[3] = "Vous savez, moi je ne crois pas qu'il y ait de bonne ou de mauvaise situation. Moi, si je devais résumer ma vie aujourd'hui avec vous, je dirais que c'est d'abord des rencontres. Des gens qui m'ont tendu la main, peut-être à un moment où je ne pouvais pas, où j'étais seul chez moi. Et c'est assez curieux de se dire que les hasards, les rencontres, forgent une destinée... Parce que quand on a le goût de la chose, quand on a le goût de la chose bien faite, le beau geste, parfois on ne trouve pas l'interlocuteur en face je dirais, le miroir qui vous aide à avancer. Alors ça n'est pas mon cas, comme je disais là, puisque moi au contraire, j'ai pu : et je dis merci à la vie, je lui dis merci, je chante la vie, je danse la vie... je ne suis qu'amour ! Et finalement, quand beaucoup de gens aujourd'hui me disent « Mais comment fais-tu pour avoir cette humanité ? », et bien je leur réponds très simplement, je leur dis que c'est ce goût de l'amour ce goût donc qui m'a poussé aujourd'hui à entreprendre une construction mécanique, mais demain qui sait ? Peut-être simplement à me mettre au service de la communauté, à faire le don, le don de soi...";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boule magique</title>

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
<body class="ballBody">

<header>
<nav class="navbar navbar-expand-md">
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

<main class="ballMain">
    <section class="home-title-ball" id="home-title-ball">
        <h1>Boule magique</h1>
        <h2>Posez votre question et la boule vous répondra...</h2>
    </section>

    <section class="form-ball" id="form-ball">

        <form action="index.php" method="POST">
            <div class="question">
                <input type="text" name="question" placeholder="Votre question">
            </div>
            <div class="submit">
                <input type="submit" name="responses" value="Réponse...">
            </div>
        </form>
        <?php
            if ($_POST) {
                if (!empty($_POST['question'])) { ?>
                    <div class='response'>
                        <span><?= $responses[rand(0,3)]; ?></span>
                    </div>

        <?php
                }
                else {
                    echo "Veuillez poser une question";
                }
            }
        ?>
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