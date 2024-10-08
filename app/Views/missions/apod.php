<?php
// Chemin du fichier cache
$cacheFile = 'apod_cache.json';

// Durée du cache en secondes (24 heures = 86400 secondes)
$cacheDuration = 86400; 

// Vérifier si le fichier cache existe et est encore valide
if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheDuration) {
    // Lire les données depuis le cache
    $data = json_decode(file_get_contents($cacheFile), true);
} else {
    // Si le cache est invalide ou n'existe pas, appeler l'API
    $apiKey = 'DEMO_KEY'; // Remplacez par votre propre clé si vous en avez une
    $apiUrl = 'https://api.nasa.gov/planetary/apod?api_key=' . $apiKey;

    // Appel API avec cURL
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);
    curl_close($curl);

    // Décoder la réponse JSON
    $data = json_decode($response, true);

    // Si l'API a renvoyé une réponse valide, mettre à jour le cache
    if (isset($data['url'])) {
        file_put_contents($cacheFile, json_encode($data)); // Stocker les données dans le fichier cache
    } else {
        echo "Erreur lors de la récupération de l'image.";
        exit;
    }
}

// Extraire les données du cache ou de l'API
$imageUrl = $data['url'];
$title = $data['title'];
$explanation = $data['explanation'];
$date = $data['date'];
?>
