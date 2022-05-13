<?php snippet('header') ?>
<section>
    <h1><?= $page->title() ?></h1>
    <h4>Filter By</h4>
    <section class="filter">
        <a href="<?= $page->url() ?>">All</a>
        <?php foreach($filters as $filter):?>
            <?php if($filter == ''): ?>
            <?php else: ?>
            <?php 
                $url = $_SERVER['REQUEST_URI'];
                $key = strval($filter); 
                $cleanFilter = preg_replace("/[^a-zA-Z0-9]+/", " ", $filter);
        ?>
            <a <?php e((strpos($url, $key) !== false), 'aria-current') ?> href="<?php $page->url() ?>?filter=<?= $filter ?>"><?= $cleanFilter ?></a>
            <?php endif ?>
        <?php endforeach ?>
  </section>

  
<section>
    <?= $filterBy ?>
    <?php 
    foreach($projects as $contribution): ?>
    <article id="<?= $contribution->title()->slug() ?>">
        <h5><?= $contribution->title() ?></h5>
        <?= kt($contribution->author()) ?>
        <?= kt($contribution->category()) ?>
        <?= kt($contribution->language()) ?>
        <?= kt($contribution->shortDescText()->excerpt(140)) ?>
    </article> 
    <?php endforeach ?>
</section>


<?php snippet('footer') ?>