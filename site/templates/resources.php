<?php snippet('header') ?>
<h1><?= $page->title() ?></h1>
<section class="resources-grid">
<?php $items = $page->resources()->toStructure();
foreach ($items as $item): ?>
    <a class="link" href="<?= $item->url()?>">    
        <?= $item->image()->toFile() ?>
        <h5> <?= $item->title() ?></h5>     
        <?= $item->description()->kt() ?>
        </a>
<?php endforeach ?>
</section>
<?php snippet('footer') ?>