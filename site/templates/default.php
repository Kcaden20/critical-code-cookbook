<?php snippet('header') ?>

<!-- Contribution Body -->
<section>
    <?php snippet('bodyCont') ?>
</section>

<?php if($page->hasChildren()):?> 
    <?php foreach($page->children() as $child): ?>
        <hr> 
        <section> 
        <h3 id="<?= $child->uid() ?>"> <?= $child->title() ?></h3>
        <?php snippet('bodyCont', ['page' => $child]) ?>
        </section> 
    <?php endforeach ?>

<?php endif ?> 

<?php snippet('footer') ?>