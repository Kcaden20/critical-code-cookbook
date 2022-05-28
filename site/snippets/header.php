<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title><?= $site->title() ?> | <?= $page->title() ?></title>

        <?= css([
            'assets/css/fonts.css', 
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
            foreach($pages as $pa): ?>
            <a href="<?= $pa->url() ?>"> <?= $pa->title() ?> </a>
            <?php endforeach ?>
        <!-- TODO: Add Toggle Mode Buttons -->
            </nav>

            <label id="gradients" class="switch" aria-label="Toggle Gradient">
                <input type="checkbox" checked>
                <span class="slider round"></span>
                <p>Gradient On</p>
            </label>

            <label id="theme" class="switch" aria-label="Toggle Theme">
                <input type="checkbox" checked>
                <span class="slider round"></span>
                <p>Light</p>
            </label>
            <?php if(($page->hasChildren() && $page->template() == 'contribution') || $page->template() == 'contribution-subpage'):?>
                <nav>
                    <p>Contribution Content</p>
                    <a href="<?php if($page->template() == 'contribution') { echo $page->url(); } else { echo $page->parent()->url(); }?>"> Overview </a>
                    <?php 
                    if($page->template() == 'contribution') {
                        $contributions = $page->children();
                    } else {
                        $contributions = $page->parent()->children();
                    }
                    
                    foreach($contributions as $contribution): ?>
                        <a href="<?= $contribution->url()?>"> <?= $contribution->title() ?></a>
                    <?php endforeach ?>
                </nav>
            <?php elseif($page->template() == 'contribution-subpage'): ?>
                <nav>
                    <p> Contribution Content </p>
                    <a href="<?= $page->parent()->url() ?>"> Overview</a>

                </nav>
            <?php endif ?>
        </header>

        <!-- TODO: Add in a way to change color based on categories on contributions page -->
        <main class="template_<?= $page->template() ?>">
