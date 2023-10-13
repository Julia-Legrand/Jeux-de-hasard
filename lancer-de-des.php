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

    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> 

    <!--STYLES-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <div class="home-title">
            <h1>Simulateur de lancer de dé</h1>
            <h2>“Jouer, c'est expérimenter le hasard.”</h2>
        </div>
        <nav>
            <ul>
                <li><a href="index.php?faces=6">Dé à 6 faces</a></li>
                <li><a href="index.php?faces=8">Dé à 8 faces</a></li>
                <li><a href="index.php?faces=10">Dé à 10 faces</a></li>
                <li><a href="index.php?faces=20">Dé à 20 faces</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
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
                <form action="index.php?faces=<?= $faces ?>" method="POST">
                    <label class="textForm" for="select">Choisissez le nombre de dés</label>
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

</body>
</html>