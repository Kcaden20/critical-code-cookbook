<?php if(!$page->isHomePage()): ?> 
    <?php $counter = 0; ?>
            <a href="<?= $site->url() ?>"> Home </a> 
    <?php $counter++ ?>
            <?php endif ?>
            <?php 
            $pages = $site->children()->listed();
            foreach($pages as $pa): ?>
            <a href="<?= $pa->url() ?>"> <?= $pa->title() ?> </a>
            <?php endforeach ?>