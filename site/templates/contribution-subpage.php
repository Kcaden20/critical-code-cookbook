<?php snippet('header') ?> 

<h1><?= $page->parent()->title() ?></h1>
<?= kt($page->parent()->author()) ?>
<?php if($page->parent()->keywords()): ?>
    <ul>
        <?php foreach($page->parent()->keywords()->split() as $keyword): ?>
            <li>#<?= $keyword ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>
</section>

<hr>
<h2><?= $page->title() ?></h2>
<?php snippet('bodyCont') ?>
<?php snippet('footer') ?>