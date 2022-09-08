<?php helper('html') ?>
<?php helper('auth') ?>
<div class="overlay"></div>
<nav class="nav">
    <div class='nav__polygon'></div>
    <figure class="nav__logo-wrapper">
        <?= anchor(url_to('Home::index'), img('images/nabu-logo.svg', false, ['class' => 'nav__logo', 'alt' => 'Logo de nabu'])) ?>
    </figure>
    <span class="nav__burger-icon" id="control-menu">&#9776;</span>
    <ul class="nav__menu" id="menu">
        <li class="nav__item-logo">
            <?= anchor(url_to('Home::index'), img('images/nabu-logo.svg', false, ['class' => 'nav__logo-menu', 'alt' => 'Logo de nabu'])) ?>
        </li>
        <li class="nav__item">
            <span>&#9783;</span><?= anchor(url_to('Posts::index'), 'Muro', ['class' => 'nav__link-underline']) ?>
        </li>
        <?php if (auth()->loggedIn()): ?>
            <?php $user = auth()->user() ?>
            <?php if ($user->inGroup('admin', 'moderator')): ?>
                <li class="nav__item">
                    <span>&#128736;</span><?= anchor(url_to('Admin\Posts::index'), 'Administración') ?>
                </li>
            <?php endif ?>
            <li class="nav__item">
                <span>&#10146;</span><?= anchor(url_to('Posts::new'), 'Publicar un post', ['class' => 'nav__link-underline']) ?>
            </li>
            <li class="nav__item">
                <span>&#10029;</span><?= anchor(url_to('Favorites::index'), 'Favoritos', ['class' => 'nav__link-underline']) ?>
            </li>
            <li class="nav__item">
                <span>&#9787;</span><?= anchor(url_to('Profiles::show', $user->username), $user->username, ['class' => 'nav__link-underline']) ?>
            </li>
            <li class="nav__item">
                <span class="close__icon">&#10162;</span><?= anchor(url_to('logout'), 'Cerrar sesión') ?>
            </li>
        <?php else: ?>
            <li class="nav__item">
                <span>&#10162;</span><?= anchor(url_to('login'), 'Inicia sesión') ?>
            </li>
            <li class="nav__item">
                <span>&#10002;</span><?= anchor(url_to('register'), 'Comienza a escribir') ?>
            </li>
        <?php endif ?>
    </ul>
</nav>
