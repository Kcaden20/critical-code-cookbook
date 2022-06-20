<?php snippet('header') ?>
<?php foreach ($page->layout()->toLayouts() as $layout): ?>
<section class="grid margin-xl" id="<?= $layout->id() ?>" style="--gutter: 1.5rem">
  <?php foreach ($layout->columns() as $column): ?>
  <section class="column" style="--columns:<?= $column->span() ?>">
    <section class="blocks">
      <?= $column->blocks() ?>
    </section>
  </section>
  <?php endforeach ?>
</section>
<?php endforeach ?>
<?php snippet('footer') ?>