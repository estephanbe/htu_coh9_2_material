<?php

include './includes/functions.php';

$animal_id = isset($_GET['id']) ? $_GET['id'] : null; // get the animal ID

// checek if te animal ID is empty
if (empty($animal_id))
    die('you are trying to access this page directly!');

$animals = json_decode(file_get_contents('./local_data/animals.json')); // get the animals so we can select the favorit animal
$animals_arr = array_filter($animals, function ($item) use ($animal_id) { // filter with the favorite animal
    return $item->id == $animal_id;
});

// check if empty animal
$animal = !empty($animals_arr) ? $animals_arr[array_key_first($animals_arr)] : null;
if (empty($animal))
    die('You are trying to access an animal that is not existed in our DB!');

$fav_animals = json_decode(file_get_contents('./local_data/fav_animals.json')); // get the fav animals and decode to php array
$fav_animals[] = $animal; // add the new animal
file_put_contents('./local_data/fav_animals.json', json_encode($fav_animals)); // rewrite the new fav_animals array

// prepare the query string to redirect to the animal page.
$query_string = '';
foreach ($animal as $key => $value) {
    $query_string .= "$key=$value" . (array_key_last((array) $animal) != $key ? "&" : "");
}
// ?key=value&key2=value2
anp_redirect("./animal.php?$query_string");
