<?php
$sql = '';
if (count($kereSzoveg) > 1) {
    if (is_int(intval($kereSzoveg[1]))) {
        $sql = 'DELETE FROM futar WHERE fazon=' . $kereSzoveg[1];
    } else {
        http_response_code(404);
        echo 'Nem létező futár';
    }
}
require_once './databaseconnect.php';
$result = $connection->query($sql);
if ($result = $connection->query($sql)) {
    http_response_code(200);
    echo "Sikeres törlés";
}
else {
    http_response_code(404);
    echo 'Nem sikerült a törlés';
}