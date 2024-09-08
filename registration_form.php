<?php

include './config/db.php';
include './includes/functions.php';
include './includes/constants.php';

$pageTitle = 'Form Registrasi';
$content = './views/registration.view.php';
$jsFile = 'form.js';

$beasiswaOptions = [
    '' => 'Pilihan Beasiswa',
    '1' => 'Akademik',
    '2' => 'Non Akademik'
];

$idBeasiswa = isset($_GET['id']) ? $_GET['id'] : '';

if (meetsMinimumIPK(IPK)) {
    $idBeasiswa = '';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $semester = $_POST['semester'];
    $beasiswa = $_POST['beasiswa'];
    $ipk = IPK;
    $file = $_FILES['file'];
    $statusAjuan = false;

    // Handle file upload
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileDestination = 'uploads/' . $fileName;

    // Pindahkan file yang diupload ke folder "uploads"
    move_uploaded_file($fileTmpName, $fileDestination);

    $query = "INSERT INTO pendaftaran_beasiswa (nama, email, nohp, semester, ipk, beasiswa, berkas, status_ajuan)
              VALUES ('$nama', '$email', '$nohp', '$semester', '$ipk', '$beasiswa', '$fileName', '$statusAjuan')";

    if (mysqli_query($conn, $query)) {
        header('Location: registration_form.php?message=success');
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);

include './includes/layout.php';
