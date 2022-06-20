<?php snippet('header') ?>
<?php if($page->downloadText()->isNotEmpty()): ?>
    <section id="download-text">
        <?= $page->downloadText()->kt() ?>
    </section>
<?php endif ?>
<section id="downloads">
<?php $downloads = $page->download()->toStructure();
foreach($downloads as $download): ?>
    <h3><?= $download->title()?></h3>
    <?= $download->description()->kt() ?>
    <a class="download button" href="<?= $download->file()->toFile() ?>">Download <?= $download->title() ?> </a>
<?php endforeach ?> 
</section>
<?php snippet('footer')?>