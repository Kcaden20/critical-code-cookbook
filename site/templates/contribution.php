<?php snippet('header') ?>
<!-- Contribution Title & Author -->
<h1><?= $page->title() ?></h1>
<?= kt($page->author()) ?>
<?php if($page->keywords()): ?>
    <ul>
        <?php foreach($page->keywords()->split() as $keyword): ?>
            <li>#<?= $keyword ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>
</section>

<hr>
<h2>Overview</h2>
<!-- Contribution Context -->
<?php if($page->context() == 'true'):?>
<section>
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
<section>
    <h3>Abstract</h3>
    <?= $page->shortDescText()->kt() ?>
</section>

<hr>
<?php endif ?>

<!-- Contribution Body -->
<section>
    <h3>Body</h3>
    <?php snippet('bodyCont') ?>
</section>
<?php snippet('prevnext') ?>
<?php snippet('footer') ?>