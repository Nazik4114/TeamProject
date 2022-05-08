<?php

if (isset($_POST['go'])) {

    list($floor, $room_name) = explode('|', $_POST['booking']);

    if ($flats[$floor][$room_name]['status'] == FLAT_STATUSES[1])
      $flats[$floor][$room_name]['status'] = FLAT_STATUSES[0];
    else
      echo '<script> alert("Вибачте, але даний номер вже зарезервований!") </script>';

    file_put_contents(BOOKING_FILE_PATH,
        json_encode($flats)
    );
    header('Location: '.INDEX_FILE);
    exit;
}

if (isset($_POST['go_out'])) {
  list($floor, $room_name) = explode('|', $_POST['booking']);

  if ($flats[$floor][$room_name]['status'] == FLAT_STATUSES[0])
    $flats[$floor][$room_name]['status'] = FLAT_STATUSES[1];
  else
    echo '<script> alert("Вибачте, але даний номер вже і так вільний та чекає заселення!") </script>';

  file_put_contents(BOOKING_FILE_PATH,
    json_encode($flats)
  );

  header('Location: '.INDEX_FILE);
  exit;
}

