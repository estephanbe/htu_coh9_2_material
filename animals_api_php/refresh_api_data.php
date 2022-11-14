<?php
include './includes/functions.php';

for ($i = 0; $i < 20; $i++) {
    // array_push($animals_array, json_decode(file_get_contents(ANIMALS_API_URL)));
    $animals_array[] = json_decode(file_get_contents(ANIMALS_API_URL));
}
file_put_contents('./local_data/animals.json', json_encode($animals_array));

anp_redirect('./home.php');
