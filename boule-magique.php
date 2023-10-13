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

    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> 

    <!--STYLES-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <h1>Boule magique</h1>
        <h2>Posez votre question et la boule vous répondra...</h2>
    </header>

    <main>
        <form action="index.php" method="POST">
            <input type="text" name="question" placeholder="Votre question">
            <input type="submit" name="responses" value="Réponse...">
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
    </main>

</body>
</html>