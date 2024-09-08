<?php

include './includes/functions.php';

$pageTitle = 'Result';
$content = './views/results.view.php';
$jsFile = 'result.js';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $semester = $_POST['semester'];
    $beasiswa = $_POST['beasiswa'];
    $file = $_FILES['file'];

    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($file["name"]);
    move_uploaded_file($file["tmp_name"], $targetFile);
}


include './includes/layout.php';
