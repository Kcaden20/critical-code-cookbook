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
    <body id="<?= $page->uid() ?>" class="<?php if($page->template() == 'default' || $page->template() == 'downloads'): ?> <?= $page->color() ?><?php endif ?>">
        <?php $count = count($site->children->listed()); if($page->isHomePage()) {$thresh = 6;} else {$thresh = 7;} ?> 
        <header class="box-shadow <?php if($count >= $thresh): ?> align-top <?php endif ?>">
            <?php
            if($count >= $thresh): ?>
             <nav>
                <details>
                    <summary> Menu </summary>
                    <section class="toggle-mobile"><?php snippet('toggles') ?></section>
                    <?php snippet('nav') ?>
                </details>
            </nav> 
            <section class="toggle-desktop"><?php snippet('toggles') ?></section>

            <?php else: ?> 
             <nav class="mobile">
                <details>
                    <summary> Menu </summary>
                    <section class="toggle-mobile"><?php snippet('toggles') ?></section>
                    <?php snippet('nav') ?>
                </details>
            </nav> 

            <nav class="desktop">
                <?php snippet('nav') ?>
            </nav>
            <section class="toggle-desktop"><?php snippet('toggles') ?></section>
            <?php endif ?>

            <!-- CONTRIBUTION SUBNAV -->
            <?php if($page->template() == 'contribution'):?>
                <?php 
                    $count = 3 + count($page->children());
                    $thresh = 5; 
                    if($count >= $thresh): 
                    ?>
                    <nav class="subnav mobile">
                        <details>
                            <summary>Page Content</summary>
                            <?php snippet('subnav') ?>
                        </details>
                    </nav>
                    <nav class="subnav desktop">
                        <?php snippet('subnav') ?>
                    </nav>
                <?php else: ?> 
                <nav class="subnav">
                    <?php snippet('subnav') ?>
                </nav>
                <?php endif ?>
            <?php endif ?>

            <!-- DEFAULT SUBNAV -->
            <?php 
            if($page->template() == 'default' && $page->hasChildren()): 
            $subPages = $page->children(); ?>
            <nav class="subnav">
            <?php foreach($subPages as $subPage): ?>
                <a href="#<?= $subPage->uid() ?>"><?= $subPage->title() ?> </a>
            <?php endforeach ?>
            </nav>
            <?php endif ?>
        </header>
        <main class="<?= $page->template() ?>">
        <?php if(!$page->isHomePage()): ?>
            <?php if(($page->template() == 'contributions') or ($page->template() == 'about') or ($page->template() == 'resources') or ($page->template() == 'downloads')): ?>
                <?php snippet('svg-select', ['svgSel' => $page->title() ]) ?>
                <h1 id="title"><?= $page->title() ?></h1>
            <?php elseif($page->template() == 'default'): ?>
                <?php snippet('svg-select', ['svgSel' => "custom", 'cusSel' => $page->svgUpload() ]) ?>
                <h1 id="title"><?= $page->title() ?></h1>
            <?php else: ?>
                <h1 id="title"><?= $page->title() ?></h1>
            <?php endif ?>
        <?php endif ?>
