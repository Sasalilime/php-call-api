<?php $name = "Salim ";

$api_url = 'https://geo.api.gouv.fr/regions';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);
// $array = json_decode(json_encode($response_data), true);



// // All user data exists in 'data' object
$regions = $response_data;

    // // Cut long data into small & select only first 10 records

    // Print data if need to debug
    // print_r($regions);

    // Traverse array and display user data
    // foreach ($regions as $region) {
    //     echo "Nom: " . $region->nom;
    //     echo "<br />";
    //     echo "name: " . $region->code;
    //     echo "<br /> <br />";
    // }
;
