<?php

$rooms = array(
    array(
        'image' => './img1.svg',
        'title' => 'Standard Twin Room'
    ),
    array(
        'image' => './img2.svg',
        'title' => 'Standard Room'
    ),
    array(
        'image' => './img3.svg',
        'title' => 'Standard View Room'
    ),
    array(
        'image' => './img4.png',
        'title' => 'Deluxe Room'
    )
);
?>

<div class="rooms">
    <?php
    foreach ($rooms as $room) {
        echo '<div class="rooms-card">';
        echo '<img src="' . $room['image'] . '" alt="' . $room['title'] . '">';
        echo '<div class="overlay"></div>';
        echo '<div class="cards-content">';
        echo '<h3 class="card-title">' . $room['title'] . '</h3>';
        echo '<a href="#" class="button button-small">Check Rates</a>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>