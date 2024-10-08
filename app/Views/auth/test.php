<?php 

include('app/Views/header.php');

use Kernel\Model;


?>


        <div class="row">
            <h1>test</h1> 
        </div>

        <div class="row">
       
<?php

session_start();

$email = $_POST['email']; // Récupérer l'email depuis le formulaire
$password = $_POST['password']; // Récupérer le mot de passe depuis le formulaire

// Préparer la requête SQL pour vérifier si l'email et le mot de passe existent
$query = "SELECT email, password FROM users WHERE email = :email";
$stmt = \kernel\Connexion::get()->prepare($query);

// Exécuter la requête avec l'email fourni
$stmt->execute(['email' => $email]);

// Récupérer le résultat
$user = $stmt->fetch(\PDO::FETCH_ASSOC);

// Vérifier si un utilisateur a été trouvé et vérifier le mot de passe
if ($user && hash('sha1', $password) === $user['password']) {
    // Si l'email et le mot de passe correspondent, l'utilisateur est authentifié
    header('Location: .?controller=Missions&action=index');
    
} else {
    // Échec de l'authentification, enregistrer un message d'erreur dans la session
    $_SESSION['error'] = "Email ou mot de passe incorrect.";
    
    // Redirection vers la page de connexion
    header("Location: .?controller=Authentif&action=login");
    exit();
}






?>
        </div>
     
<?php
include('app/Views/footer.php');
