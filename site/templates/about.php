<?php snippet('header') ?>
<h1> <?= $page->title() ?></h1> 
<?php foreach ($page->layout()->toLayouts() as $layout): ?>
<section class="grid margin-xl" id="<?= $layout->id() ?>" style="--gutter: 1.5rem">
  <?php foreach ($layout->columns() as $column): ?>
  <div class="column" style="--columns:<?= $column->span() ?>">
    <div class="text">
      <?= $column->blocks() ?>
    </div>
  </div>
  <?php endforeach ?>
</section>
<?php endforeach ?>
<?php snippet('footer') ?>