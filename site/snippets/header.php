<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="format-detection" content="telephone=no" />
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
        <?php $count = count($site->children->listed()); if($page->isHomePage()) {$thresh = 6;} else {$thresh = 7;} ?> 
        <header class="box-shadow <?php if($count >= $thresh): ?> align-top <?php endif ?>">
            <?php
            if($count >= $thresh): ?>
             <nav>
                <details>
                    <summary> Menu </summary>
                    <?php snippet('nav') ?>
                </details>
            </nav> 

            <?php else: ?> 
             <nav class="mobile">
                <details>
                    <summary> Menu </summary>
                    <?php snippet('nav') ?>
                </details>
            </nav> 

            <nav class="desktop">
                <?php snippet('nav') ?>
            </nav>
            <?php endif ?>
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
                    <a href="#body">The Recipe</a>
                    <?php
                    if($page->template() == 'contribution') {$contributions = $page->children();}
                    foreach($contributions as $contribution): ?>
                        <a href="#<?= $contribution->uid()?>"> <?= $contribution->title() ?></a>
                    <?php endforeach ?>
                    <?php if($page->context() == 'true'):?>
                        <a href="#context">Q&A</a>
                    </a>
                    <?php endif ?>
                </nav>
            <?php endif ?>
        </header>
        <main class="<?= $page->template() ?>">
        <?php if(!$page->isHomePage()): ?>
            <?php if(($page->template() == 'contributions') or ($page->template() == 'about') or ($page->template() == 'resources') or ($page->template() == 'downloads')): ?>
                <?php snippet('svg-select', ['svgSel' => $page->title() ]) ?>
                <h1 id="title"><?= $page->title() ?></h1>
            <?php else: ?>
                <h1 id="title"><?= $page->title() ?></h1>
            <?php endif ?>
        <?php endif ?>
