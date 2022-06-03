<?php snippet('header') ?>
<h1><?= $page->title() ?></h1>
<?php if($page->resourcesText()): ?>
<section id="resources-text">
    <?= $page->resourcesText()->kt() ?>
</section>
<?php endif ?>
<section class="resources-grid">
<?php $items = $page->resources()->toStructure();
foreach ($items as $item): ?>
    <a class="link" href="<?= $item->url()?>">    
        <figure class="img" style="--w: 16; --h:9"><?= $item->image()->toFile() ?></figure>
        <h5> <?= $item->title() ?></h5>     
        <?= $item->description()->kt() ?>
        </a>
<?php endforeach ?>
</section>
<?php snippet('footer') ?>