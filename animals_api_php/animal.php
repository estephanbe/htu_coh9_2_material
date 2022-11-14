<?php
include "./header.php";

$animal = (object) $_GET;

?>

<div id="animal-template" class="row py-5 my-5">
    <div class="col">
        <img src="<?= $animal->image_link ?>" class="img-fluid" alt="<?= $animal->name ?>">
    </div>
    <div class="col">
        <div class="d-flex flex-row-reverse">
            <a href="./make_fav.php?id=<?= $animal->id ?>" class="btn btn-danger">
                <i class="fa-solid fa-heart"></i>
            </a>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Description</th>
                    <th scope="col">Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>id</td>
                    <td><?= $animal->id ?></td>
                </tr>
                <tr>
                    <td>name</td>
                    <td><?= $animal->name ?></td>
                </tr>
                <tr>
                    <td>latin_name</td>
                    <td><?= $animal->latin_name ?></td>
                </tr>
                <tr>
                    <td>animal_type</td>
                    <td><?= $animal->animal_type ?></td>
                </tr>
                <tr>
                    <td>active_time</td>
                    <td><?= $animal->active_time ?></td>
                </tr>
                <tr>
                    <td>length_min</td>
                    <td><?= $animal->length_min ?></td>
                </tr>
                <tr>
                    <td>length_max</td>
                    <td><?= $animal->length_max ?></td>
                </tr>
                <tr>
                    <td>weight_min</td>
                    <td><?= $animal->weight_min ?></td>
                </tr>
                <tr>
                    <td>weight_max</td>
                    <td><?= $animal->weight_max ?></td>
                </tr>
                <tr>
                    <td>lifespan</td>
                    <td><?= $animal->lifespan ?></td>
                </tr>
                <tr>
                    <td>habitat</td>
                    <td><?= $animal->habitat ?></td>
                </tr>
                <tr>
                    <td>diet</td>
                    <td><?= $animal->diet ?></td>
                </tr>
                <tr>
                    <td>geo_range</td>
                    <td><?= $animal->geo_range ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include "./footer.php" ?>