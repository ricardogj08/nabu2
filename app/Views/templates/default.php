<?php helper('html') ?>
<?= doctype() ?>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= link_tag('images/buho.svg', 'icon', 'image/svg+xml') ?>
    <?= link_tag('css/normalize.css') ?>
    <?= link_tag('css/components/navbar.css') ?>
    <?= link_tag('css/components/navbar-desktop.css', 'stylesheet', 'text/css', '', 'screen and (min-width: 768px)') ?>
    <?= link_tag('css/components/footer.css') ?>
    <?= link_tag('css/components/footer-desktop.css', 'stylesheet', 'text/css', '', 'screen and (min-width: 650px)') ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?= $this->renderSection('head') ?>
</head>
<body>
    <?= $this->renderSection('content') ?>
    <?= $this->include('components/footer') ?>
    <?= script_tag('js/home/index.js') ?>
    <?= $this->renderSection('scripts') ?>
</body>
</html>
