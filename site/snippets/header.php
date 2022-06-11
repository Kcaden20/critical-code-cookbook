<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <?php snippet('meta_information'); ?>
        <?php snippet('robots'); ?>
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
        <?= css([
            'assets/css/fonts.css', 
            'assets/css/var.css',
            'assets/css/index.css',
            'assets/css/media.css',
            'assets/css/lightbox.css',
            'assets/css/background.css',
            '@auto'
        ]) ?>

        <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
    </head>
    <body>
        <header class="box-shadow">
             <nav class="mobile">
                <details>
                    <summary> Menu </summary>
                    <?php snippet('nav') ?>
                </details>
            </nav> 
            <nav class="desktop">
                <?php snippet('nav') ?>
            </nav>
        <section>
            <article class="toggle" aria-label="Toggle Gradient">
                <label id="gradients" class="switch">
                    <input type="checkbox" checked>
                    <span class="slider round"></span>
                </label>
                <p>Effects On</p>
            </article>
            <article class="toggle" aria-label="Toggle Theme">
                <label id="theme" class="switch">
                    <input type="checkbox" checked>
                    <span class="slider round"></span>
                </label>
                <p>Light</p>
            </article>
            </section>
            <?php if($page->template() == 'contribution'):?>
                <nav class="subnav">
                    <a href="#title"> Introduction </a>
                    <a href="#body">Body</a>
                    <?php
                    if($page->template() == 'contribution') {
                        $contributions = $page->children();
                    }
                    
                    
                    foreach($contributions as $contribution): ?>
                        <a href="#<?= $contribution->uid()?>"> <?= $contribution->title() ?></a>
                    <?php endforeach ?>
                </nav>
            <?php endif ?>
        </header>
        <main class="<?= $page->template() ?>">
        <?php if(!$page->isHomePage()): ?>
            <h1 id="title"><?= $page->title() ?></h1>
        <?php endif ?>
