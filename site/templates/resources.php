<?php snippet('header') ?>
<h1><?= $page->title() ?></h1>
<?php if($page->resourcesText()->isNotEmpty()): ?>
<section id="resources-text">
    <?= $page->resourcesText()->kt() ?>
</section>
<?php endif ?>
<section class="project-grid">
<?php $items = $page->resources()->toStructure();
foreach ($items as $item): ?>
    <a class="link" href="<?= $item->url()?>">    
        <figure class="img" style="--w: 16; --h:9"><?= $item->image()->toFile() ?></figure>
        <h5> <?= $item->title() ?></h5>     
        <article class="description">
            <?= $item->description()->kt() ?>
        </article>  
        </a>
<?php endforeach ?>
</section>
<?php snippet('footer') ?>