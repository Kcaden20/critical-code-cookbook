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
    <?php if($page->layoutTog() == 'true'): ?>
        <!-- TODO: Need to Style In CSS -->
        <?php foreach ($page->bodylayout()->toLayouts() as $layout): ?>
            <article class="grid" id="<?= $layout->id() ?>">
            <?php foreach ($layout->columns() as $column): ?>
            <div class="column" style="--span:<?= $column->span() ?>">
                <div class="blocks">
                <?= $column->blocks() ?>
                </div>
            </div>
            <?php endforeach ?>
            </article>
            <?php endforeach ?>
    <?php else: ?>
        <?= $page->bodyCont()->kt() ?>
    <?php endif ?>
</section>
<?php snippet('prevnext') ?>
<?php snippet('footer') ?>