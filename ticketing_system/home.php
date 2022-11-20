<?php
include "./header.php";
?>


<div class="row my-5 py-5">

    <?php foreach (get_seats() as $seat) :
        // if the seat is available > let any user reserve
        if ($seat->is_available) { ?>
            <a href="./seat_reservation.php?id=<?= $seat->id ?>" class="ts-seat col-2 m-3 d-flex justify-content-center align-items-center <?= $seat->is_available ? "available_seat" : 'unavailable_seat' ?>">
                <?= $seat->seat_num ?>
            </a>
            <?php
        } else {
            // if the seat is unavailable > check if the current user is the one who reserved the seat
            if ($seat->user_id == $_SESSION['user']['user_id']) {
                // if true
                // allow the user to make the seat available 
            ?>
                <a href="./seat_reservation.php?id=<?= $seat->id ?>" class="ts-seat col-2 m-3 d-flex justify-content-center align-items-center <?= $seat->is_available ? "available_seat" : 'unavailable_seat' ?>">
                    <?= $seat->seat_num ?>
                </a>
            <?php
            } else {
                // if false
                // do not allow the user to make the seat available
            ?>
                <div class="ts-seat col-2 m-3 d-flex justify-content-center align-items-center <?= $seat->is_available ? "available_seat" : 'unavailable_seat' ?>">
                    <?= $seat->seat_num ?>
                </div>
    <?php
            }
        }
    endforeach; ?>


</div>


<?php include "./footer.php" ?>