<?php
if (isset($_GET['latitude']) && isset($_GET['longitude'])) {
    $latitude = $_GET['latitude'];
    $longitude = $_GET['longitude'];

    $data = "Latitude: $latitude\nLongitude: $longitude\nTimestamp: " . date('Y-m-d H:i:s') . "\n\n";

    $file = 'data.txt';
    file_put_contents($file, $data, FILE_APPEND);

    echo "Location data has been recorded.";
}
?>
