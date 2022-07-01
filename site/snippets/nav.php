<?php if(!$page->isHomePage()): ?> 
            <a href="<?= $site->url() ?>"> Home </a> 
            <?php endif ?>
            <?php 
            $pages = $site->children()->listed();
            foreach($pages as $pa): ?>
            <a href="<?= $pa->url() ?>"> <?= $pa->title() ?> </a>
            <?php endforeach ?>