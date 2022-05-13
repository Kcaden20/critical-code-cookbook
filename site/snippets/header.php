<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title><?= $site->title() ?> | <?= $page->title() ?></title>

        <?= css([
            'assets/css/var.css',
            'assets/css/index.css',
            '@auto'
        ]) ?>

        <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
    </head>
    <body>
        <header>
            <nav>
            <?php if(!$page->isHomePage()): ?> 
                <a href="<?= $site->url() ?>"> Home </a> 
            <?php endif ?>
            <?php 
            $pages = $site->children()->listed();
            foreach($pages as $page): ?>
            <a href="<?= $page->url() ?>"> <?= $page->title() ?> </a>
            <?php endforeach ?>
        <!-- TODO: Add Toggle Mode Buttons -->
            </nav>

            <label class="switch" aria-label="Toggle Gradient">
                <input type="checkbox" checked>
                <span class="slider round"></span>
                <p>Toggle Gradient</p>
            </label>

            <label class="switch" aria-label="Toggle Theme">
                <input type="checkbox" checked>
                <span class="slider round"></span>
                <p>Light</p>
            </label>
        </header>

        <!-- TODO: Add in a way to change color based on categories on contributions page -->
        <main class="template_<?= $page->template() ?>">
