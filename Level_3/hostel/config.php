<?php

define('FLAT_STATUSES', ['booked', 'cleaning', 'free']);

define('FLAT_NUMBER_FROM', "A");
define('FLAT_NUMBER_TO', "Z");

define('FLAT_PRICE_MIN', 300);
define('FLAT_PRICE_MAX', 1500);
define('FLAT_PRICE_STEP', 50);

define('FLOOR_MIN', 1);
define('FLOOR_MAX', 10);

define('BOOKING_FILE_PATH', __DIR__.'/storage/booking.json');
define('VIEWS_PATH', __DIR__.'/views/');

$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
define('INDEX_FILE', $url);

