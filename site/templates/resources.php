<?php snippet('header') ?>

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
        <?php if(!$item->author()->isEmpty()): ?>
            <article class="details">
                <?= $item->author()->kt() ?>
            </article>
        <?php endif ?>
        <?php if(!$item->description()->isEmpty()): ?>
            <article class="description">
                <?= $item->description()->kt() ?>
            </article>  
        <?php endif ?>
        </a>
<?php endforeach ?>
</section>
<?php snippet('footer') ?>