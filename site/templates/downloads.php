<?php snippet('header') ?>
<h1> <?= $page->title() ?></h1> 
<section>
<?php $downloads = $page->download()->toStructure();
foreach($downloads as $download): ?>
    <?= $download->description()->kt() ?>
    <a class="download" href="<?= $download->file()->toFile() ?>"><?= $download->title() ?> </a>
<?php endforeach ?> 
<?php snippet('footer')?>