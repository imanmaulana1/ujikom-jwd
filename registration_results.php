<?php

include './config/db.php';
include './includes/functions.php';

$pageTitle = 'Result';
$content = './views/results.view.php';
$jsFile = 'result.js';

$query = "SELECT * FROM pendaftaran_beasiswa";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $data = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    // _d($data);
}

mysqli_close($conn);

include './includes/layout.php';
