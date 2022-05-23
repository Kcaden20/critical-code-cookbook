<?php snippet('header') ?>
<h1><?= $page->title() ?></h1>
<?php $items = $page->resources()->toStructure();
foreach ($items as $item): ?>
<section>
    <?= $item->image()->toFile() ?>
    <h5><a href="<?= $item->url()?>"> <?= $item->title() ?></a></h5>     
    <?= $item->description()->kt() ?>
<section>
<?php endforeach ?>
<?php snippet('footer') ?>