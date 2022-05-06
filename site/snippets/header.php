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
        <!-- TODO: Add in Nav Pages  -->
        <!-- TODO: If not homepage, add home button  -->
        <!-- TODO: Add Toggle Mode Buttons -->
            </nav>
        </header>

        <!-- TODO: Add in a way to change color based on categories on contributions page -->
        <main class="template_<?= $page->template() ?>">
