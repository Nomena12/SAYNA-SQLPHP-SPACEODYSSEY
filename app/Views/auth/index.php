<?php 

//include('../app/Views/header.php');
session_start();


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <link rel="stylesheet" href="dist/css/styles.css"> <!-- Lien vers le fichier CSS externe -->
</head>
<body>
    <div class="login-container">

     <!-- Afficher le message d'erreur s'il existe -->
     <?php if (isset($_SESSION['error'])): ?>
        <p style="color: red;"><?php echo $_SESSION['error']; ?></p>
        <?php unset($_SESSION['error']); // Supprimer le message d'erreur après l'affichage ?>
    <?php endif; ?>
    
        <form action=".?controller=Authentif&action=verifLogin" method="POST" class="login-form">
            <h2>Connexion</h2>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-btn">Se connecter</button>
            <p class="signup-link">Pas encore de compte ? <a href=".?controller=Authentif&action=register">S'inscrire</a></p>
        </form>
    </div>
</body>
</html>

     
<?php
//include('../app/Views/footer.php');
