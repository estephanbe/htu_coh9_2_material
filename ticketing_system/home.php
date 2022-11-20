<?php
include "./header.php";
?>


<div class="row my-5 py-5">

    <?php foreach (get_seats() as $seat) : ?>
        <div class="ts-seat col-2 m-3 d-flex justify-content-center align-items-center <?= $seat->is_available ? "available_seat" : 'unavailable_seat' ?>">
            <?= $seat->seat_num ?>
        </div>
    <?php endforeach; ?>


</div>


<?php include "./footer.php" ?>