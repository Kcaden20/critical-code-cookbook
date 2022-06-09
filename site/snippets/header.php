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
            'assets/css/media.css',
            'assets/css/lightbox.css',
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
                <p>Gradient On</p>
            </article>
            <article class="toggle" aria-label="Toggle Theme">
                <label id="theme" class="switch">
                    <input type="checkbox" checked>
                    <span class="slider round"></span>
                </label>
                <p>Light</p>
            </article>
            </section>
            <?php if(($page->hasChildren() && $page->template() == 'contribution') || $page->template() == 'contribution-subpage'):?>
                <nav class="subnav">
                    <a href="#title"> Introduction </a>
                    <?php 
                    if($page->template() == 'contribution') {
                        $contributions = $page->children();
                    } else {
                        $contributions = $page->parent()->children();
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
