<?php

if (isset($_POST['go'])) {
    list($floor, $room_name) = explode('|', $_POST['booking']);
    
    $flats[$floor][$room_name]['status'] = FLAT_STATUSES[0];
    
    file_put_contents(BOOKING_FILE_PATH, 
        json_encode($flats)
    ); 

    header('Location: http://localhost:8181/index.php');
    exit;
}

