<?php snippet('header') ?>

            <!-- TITLESPLASH -->
            <!-- TODO: Build Splashpage -->
            <section id="splash" class="gradient">
                <h1><?= $site->title() ?></h1>
                 <?= $page->byLine()->kt() ?>
            <?php snippet('splash') ?>
            </section>
            
            <!-- ABOUT -->
            <section id="about">
                <!-- TODO: Add Icon -->
                <!-- Introduction Title Conditional -->
                <p class="icon" aria-hidden="true">»</p>
                <?php 
                $introTitle = $page->introTitle(); 
                if($introTitle->isNotEmpty()): ?>
                    <h2><?= $introTitle?></h2>
                <?php endif ?>
                
                <!-- Introduction Text Conditional -->
                <?php 
                $introText = $page->introText();
                if($introText->isNotEmpty()): ?>
                    <article><?= $introText->kt() ?></article>
                <?php endif ?>
            </section>
            
            <!-- CONTRIBUTIONS  -->
            <section id="contributions">
                <!-- TODO: Add Final Icon -->
                <p class="icon" aria-hidden="true">\</p>
                    <?php $contributions = page('contributions')?>
                    <h2><?= $contributions->title() ?></h2>

                    <!-- Contributions Text Conditional -->
                    <?php if($page->contributionText()):?>
                        <article><?= $page->contributionText()->kt() ?></article>
                    <?php endif ?>
                    

                    <!-- Access Categories from Home Page -->
                    <article class="filter">
                            <?php foreach($filters as $filter):?>
                                <?php if($filter == ''): ?>
                                <?php else: ?>
                                <?php 
                                    $url = $contributions->url();
                                    $key = strval($filter); 
                                    $cleanFilter = preg_replace("/[^a-zA-Z0-9]+/", " ", $filter); ?>
                                    <a <?php e((strpos($url, $key) !== false), 'aria-current') ?> href="<?= $contributions->url() ?>?filter=<?= $filter ?>">
                                    <p><?= $cleanFilter ?></p>
                                    </a>
                                <?php endif ?>
                            <?php endforeach ?>
                    </article>

                    <!-- Contributions Link Conditional -->
                    <?php if($page->contributionLink()):?>
                        <a class="button" href="<?= $contributions->url() ?>"><?= $page->contributionLink() ?></a>
                    <?php endif ?>    
            </section>

            <!-- RESOURCES -->
            <!-- TODO: Add Icon -->
            <section id="resources">
                <p class="icon" aria-hidden="true">Ë</p>
                    <?php $resources = page('resources'); ?>
                    <h2><?= $resources->title()?></h2>
                    <?php if($page->resourcesText()):?>
                        <article><?= $page->resourcesText()->kt() ?></article>
                    <?php endif ?>
                    <?php if($page->resourcesLink()):?>
                        <a class="button" href="<?= $resources->url()?>"><?= $page->resourcesLink() ?></a>
                    <?php endif ?>    
            </section> 
<?php snippet('footer') ?>

