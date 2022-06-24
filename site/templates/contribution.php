<?php snippet('header') ?>
<!-- Contribution Title & Author -->
<?= kt($page->author()) ?>
<?php if($page->keywords()): ?>
    <article class="keywords">
        <?php foreach($page->keywords()->split() as $keyword): ?>
            <p>#<?= $keyword ?></p>
        <?php endforeach ?>
        </article>
<?php endif ?>
</section>


<!-- Contribution Abstract  -->
<?php if($page->shortDesc() == 'true'):?>
    <hr>
<section id="abstract">
    <h3>Introduction</h3>
    <?= $page->shortDescText()->kt() ?>
</section>

<hr>
<?php endif ?>

<!-- Contribution Body -->
<section>
    <h3 id="body">The Recipe</h3>
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

<!-- Contribution Context -->
<?php if($page->context() == 'true'):?>
    <hr>
<section>
    <h3 id="context">Q&A</h3>
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
<?php snippet('prevnext') ?>
<?php snippet('footer') ?>