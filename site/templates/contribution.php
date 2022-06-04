<?php snippet('header') ?>
<!-- Contribution Title & Author -->
<h1 id="title"><?= $page->title() ?></h1>
<?= kt($page->author()) ?>
<?php if($page->keywords()): ?>
    <article class="keywords">
        <?php foreach($page->keywords()->split() as $keyword): ?>
            <p>#<?= $keyword ?></p>
        <?php endforeach ?>
        </article>
<?php endif ?>
</section>

<hr>
<h2>Overview</h2>
<!-- Contribution Context -->
<?php if($page->context() == 'true'):?>
<section id="context">
    <h3>Context</h3>
    <article>
        <h4>What is the context or background that inspired your recipe?</h4>
        <?= $page->contextOne()->kt() ?>
    </article>
    <article>
        <h4>Which community are you offering the recipe to?</h4>
        <?= $page->contextTwo()->kt() ?>
    </article>
    <article>
        <h4>How does your submission relate to intersectional feminism?</h4>
        <?= $page->contextThree()->kt() ?>
    </article>
</section>
<?php endif ?> 

<!-- Contribution Abstract  -->
<?php if($page->shortDesc() == 'true'):?>
    <hr>
<section id="abstract">
    <h3>Abstract</h3>
    <?= $page->shortDescText()->kt() ?>
</section>

<hr>
<?php endif ?>

<!-- Contribution Body -->
<section id="body">
    <h3>Body</h3>
    <?php snippet('bodyCont') ?>
</section>

<?php if($page->hasChildren()):?> 
    <?php foreach($page->children() as $child): ?>
        <hr id="<?= $child->uid() ?>"> 
        <section> 
        <h3> <?= $child->title() ?></h3>
        <?php snippet('bodyCont', ['page' => $child]) ?>
    <?php endforeach ?>
    </section> 
<?php endif ?> 
<?php snippet('prevnext') ?>
<?php snippet('footer') ?>