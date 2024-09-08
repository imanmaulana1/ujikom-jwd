<?php

include './includes/functions.php';
include './includes/constants.php';

_d(meetsMinimumIPK(IPK));

$pageTitle = 'Form Registrasi';
$content = './views/registration.view.php';

include './includes/layout.php';
