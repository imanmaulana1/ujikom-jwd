<?php

include './includes/functions.php';

$pageTitle = 'Result';
$content = './views/results.view.php';
$jsFile = 'result.js';

$results = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $semester = $_POST['semester'];
    $beasiswa = $_POST['beasiswa'];
    $file = $_FILES['file'];
    $statusAjuan = 'Belum di verifikasi';

    // Simpan hasil input kedalam array
    $results = [
        'nama' => ['label' => 'Nama', 'value' => $nama],
        'email' => ['label' => 'Email', 'value' => $email],
        'nohp' => ['label' => 'No. Hp', 'value' => $nohp],
        'semester' => ['label' => 'Semester', 'value' => $semester],
        'beasiswa' => ['label' => 'Jenis Beasiswa', 'value' => $beasiswa],
        'berkas' => ['label' => 'File Berkas', 'value' => $file],
        'status' => ['label' => 'Status Ajuan', 'value' => $statusAjuan]
    ];


    // Pindahkan file yang diunggah ke folder uploads
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($file["name"]);
    move_uploaded_file($file["tmp_name"], $targetFile);
}


include './includes/layout.php';
