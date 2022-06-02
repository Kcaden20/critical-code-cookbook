<?php snippet('header') ?>

            <!-- TITLESPLASH -->
            <!-- TODO: Build Splashpage -->
            <section id="splash" class="gradient">
                <h1><?= $site->title() ?></h1>
                <?= $page->byLine()->kt() ?>
            </section>
            
            <!-- ABOUT -->
            <section id="about">
                <!-- TODO: Add Icon -->
                <!-- Introduction Title Conditional -->
                <svg width="45" height="45" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="45" cy="45" r="43.5" stroke="black" stroke-width="3"/>
                </svg>
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
            <svg width="45" height="45" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="45" cy="45" r="43.5" stroke="black" stroke-width="3"/>
                </svg>
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
            <svg width="45" height="45" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="45" cy="45" r="43.5" stroke="black" stroke-width="3"/>
                </svg>
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

