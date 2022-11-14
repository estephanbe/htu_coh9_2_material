<?php
define('ANIMALS_API_URL', 'https://zoo-animal-api.herokuapp.com/animals/rand');

/**
 * Redirect - it redirect the script to a required path.
 *
 * @param String $path
 * @return void
 */
function anp_redirect($path)
{
    header("Location: $path");
    exit();
}

/**
 * Echo the HTML page title section
 *
 * @return void
 */
function echo_page_title()
{
    $page_title = null;
    foreach (json_decode(file_get_contents('./local_data/menu.json')) as $item) {
        if (strpos($_SERVER['SCRIPT_NAME'], $item->script_name)) {
            $page_title = $item->title;
            break;
        }
    }

    // Heredoc syntax
    echo <<<EOD
    <h1 class="text-center mt-5">$page_title Page</h1>
    <hr class="mb-5 style-two">
    EOD;
}

function get_animals_data()
{
    $animals_array = array();

    $data_switch = false; // to determine if we want to load the data from an API or the animals.json

    // check if the data is already cached on the server. 
    if (!file_exists('./local_data/animals.json')) {
        $data_switch = true;
    } elseif (
        empty(json_decode(file_get_contents('./local_data/animals.json')))
    ) {
        $data_switch = true;
    }

    // proceed and define the animals aray based on the data source (animals.json)
    if ($data_switch) {
        for ($i = 0; $i < 20; $i++) {
            // array_push($animals_array, json_decode(file_get_contents(ANIMALS_API_URL)));
            $animals_array[] = json_decode(file_get_contents(ANIMALS_API_URL));
        }
        file_put_contents('./local_data/animals.json', json_encode($animals_array));
    } else {
        $animals_array = json_decode(file_get_contents('./local_data/animals.json'));
    }

    return $animals_array;
}
