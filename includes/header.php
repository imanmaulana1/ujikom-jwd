<?php

$navItems = [
    [
        'href' => 'index.php',
        'label' => 'Pilihan Beasiswa',
        'uri' => '/ujikom/index.php'
    ],
    [
        'href' => 'registration_form.php',
        'label' => 'Daftar',
        'uri' => '/ujikom/registration_form.php'
    ],
    [
        'href' => 'registration_results.php',
        'label' => 'Hasil',
        'uri' => '/ujikom/registration_results.php'
    ]
];

?>

<header>
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container py-2">
            <a class="navbar-brand" href="#">
                <img src="./assets/images/logo.svg" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 py-2">
                    <?php foreach ($navItems as $item): ?>
                        <li class="nav-item">
                            <a class="nav-link <?= $_SERVER['REQUEST_URI'] === $item['uri'] ? 'active' : '' ?>" href="<?= $item['href'] ?>"><?= $item['label'] ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>