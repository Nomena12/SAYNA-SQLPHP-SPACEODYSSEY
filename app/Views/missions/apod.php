<?php
// Clé API
$apiKey = 'DEMO_KEY'; // Remplacez par votre propre clé si vous en avez une

// URL de l'API APOD
$apiUrl = 'https://api.nasa.gov/planetary/apod?api_key=' . $apiKey;

// Appel API avec cURL
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $apiUrl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
curl_close($curl);

// Décoder la réponse JSON
$data = json_decode($response, true);

if (isset($data['url'])) {
    $imageUrl = $data['url'];          // URL de l'image
    $title = $data['title'];           // Titre de l'image
    $explanation = $data['explanation']; // Explication
    $date = $data['date'];             // Date de l'image
} else {
    echo "Erreur lors de la récupération de l'image.";
}
?>
