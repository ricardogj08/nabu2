<?php helper('html') ?>
<?php helper('form') ?>

<?= $this->extend('templates/default') ?>

<?= $this->section('head') ?>
    <?= link_tag('css/posts/new.css') ?>
    <?= link_tag('css/easymde.min.css') ?>
    <title><?= config('App')->name ?> | Crear un post</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <header class="header">
        <?= $this->include('components/navbar') ?>
    </header>

    <main class="hero">
        <?= form_open_multipart(url_to('Posts::create'), 'class="public__form"') ?>
            <?= form_input('title', set_value('title'), 'placeholder="Título del post" id="title" class="public__title" minlength="1" maxlength="256" required') ?>

            <?= form_textarea('excerpt', set_value('excerpt'), 'placeholder="Cuéntame lo más interesante de tu post" id="excerpt" class="public__summary" minlength="1" maxlength="512" required') ?>

            <?= form_textarea('body', set_value('body'), 'placeholder="Escribe lo que tienes para compartir" id="body" class="public__content" minlength="1" required') ?>

            <?= form_submit('submit', 'Enviar', 'class="public__send"') ?>
        <?= form_close() ?>
    </main>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <?= script_tag('js/easymde.min.js') ?>
    <?= script_tag('js/posts/new.js') ?>
<?= $this->endSection() ?>
