<?php 

include('app/Views/header.php');



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astronomy Picture of the Day (APOD)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #000;
            color: #fff;
        }
        .apod-container {
            margin-top: 50px;
        }
        .apod-container img {
            max-width: 80%;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.5);
        }
        .title {
            font-size: 2em;
            margin: 20px 0;
            color: blue;
        }
        .description {
            margin: 20px;
            font-size: 1.2em;
            color: black;

        }
    </style>
</head>
<body>
    <div class="apod-container">
        <h1 class="title">Astronomy Picture of the Day (APOD)</h1>
        
        <?php include 'apod.php'; ?>

        <!-- Vérifier si les données existent -->
        <?php if (isset($imageUrl)) : ?>
            <h2><?php echo $title; ?></h2>
            <p>Date: <?php echo $date; ?></p>
            <img src="<?php echo $imageUrl; ?>" alt="Astronomy Picture of the Day">
            <p class="description"><?php echo $explanation; ?></p>
        <?php else: ?>
            <p>Impossible de charger l'image. Veuillez réessayer plus tard.</p>
        <?php endif; ?>
    </div>
</body>
</html>

        
     
<?php
include('app/Views/footer.php');
