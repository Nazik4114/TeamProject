<?php

require_once __DIR__.'/config.php';

$flats = [];

if (is_readable(BOOKING_FILE_PATH)) {
    $json_content = file_get_contents(BOOKING_FILE_PATH);
    $flats = json_decode($json_content, true);
} else {
    $prices = range(FLAT_PRICE_MIN, FLAT_PRICE_MAX, FLAT_PRICE_STEP);
    for ($i=FLOOR_MIN; $i <= FLOOR_MAX ; $i++) { 
        foreach(range(FLAT_NUMBER_FROM, FLAT_NUMBER_TO) as $flat) {
            $flats[$i][$flat] = [
                'status' => FLAT_STATUSES[array_rand(FLAT_STATUSES)],
                'price' => $prices[array_rand($prices)],
            ];
        }
    }

    file_put_contents(BOOKING_FILE_PATH, json_encode($flats));
}
