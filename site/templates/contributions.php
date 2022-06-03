<?php snippet('header') ?>
<h1><?= $page->title() ?></h1>
<section id="contributions-introduction">
    <?php if($page->contributionText()->isNotEmpty()):?>
        <?= $page->contributionText()->kt() ?> 
    <?php endif ?>
    </section>
    <section>
    <h4>Filter By</h4>
    </section>
    <section class="filter">
        <a class="button" href="<?= $page->url() ?>">All</a>
        <?php foreach($filters as $filter):?>
            <?php if($filter == ''): ?>
            <?php else: ?>
            <?php 
                $url = $_SERVER['REQUEST_URI'];
                $key = strval($filter); 
                $cleanFilter = preg_replace("/[^a-zA-Z0-9]+/", " ", $filter);
        ?>
            <a class="button" <?php e((strpos($url, $key) !== false), 'aria-current') ?> href="<?php $page->url() ?>?filter=<?= $filter ?>"><?= $cleanFilter ?></a>
            <?php endif ?>
        <?php endforeach ?>
  </section>

  
<section id="contributions" class="project-grid">
    <?php 
    foreach($projects as $contribution): ?>
    <a id="<?= $contribution->title()->slug() ?>" href="<?= $contribution->url() ?>">
        <h5><?= $contribution->title() ?></h5>
        <article class="details">
            <?= kt($contribution->author()) ?>
            <?= kt(preg_replace("/[^a-zA-Z0-9]+/", " ", $contribution->category())) ?>
            <?= kt(preg_replace("/[^a-zA-Z0-9]+/", " ", $contribution->language())) ?>
        </article>
        <article class="description">
            <?= kt($contribution->shortDescText()->excerpt(140)) ?>
        </article>
    </a>
    <?php endforeach ?>
</section>


<?php snippet('footer') ?>