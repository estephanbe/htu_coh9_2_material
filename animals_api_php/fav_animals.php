<?php
include "./header.php";
echo_page_title();

$animals = json_decode(file_get_contents('./local_data/fav_animals.json'));
?>

<div class="row justify-content-around">

    <?php foreach ($animals as $animal) : ?>
        <div class="card-wrapper col-<?= rand(3, 6) ?> mb-5">
            <div class="card">
                <img src="<?= $animal->image_link ?>" class="card-img-top" alt="<?= $animal->name ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $animal->name ?></h5>
                    <p class="card-text"><?= $animal->diet ?></p>
                </div>
                <form action="./animal.php" method="GET">
                    <input type="hidden" name="id" value="<?= $animal->id ?>">
                    <input type="hidden" name="name" value="<?= $animal->name ?>">
                    <input type="hidden" name="latin_name" value="<?= $animal->latin_name ?>">
                    <input type="hidden" name="animal_type" value="<?= $animal->animal_type ?>">
                    <input type="hidden" name="active_time" value="<?= $animal->active_time ?>">
                    <input type="hidden" name="length_min" value="<?= $animal->length_min ?>">
                    <input type="hidden" name="length_max" value="<?= $animal->length_max ?>">
                    <input type="hidden" name="weight_min" value="<?= $animal->weight_min ?>">
                    <input type="hidden" name="weight_max" value="<?= $animal->weight_max ?>">
                    <input type="hidden" name="lifespan" value="<?= $animal->lifespan ?>">
                    <input type="hidden" name="habitat" value="<?= $animal->habitat ?>">
                    <input type="hidden" name="diet" value="<?= $animal->diet ?>">
                    <input type="hidden" name="geo_range" value="<?= $animal->geo_range ?>">
                    <input type="hidden" name="image_link" value="<?= $animal->image_link ?>">
                </form>
            </div>
        </div>
    <?php endforeach; ?>

</div>


<?php include "./footer.php" ?>