<?php snippet('header') ?>

            <!-- TITLESPLASH -->
            <section id="splash" class="gradient">
                <h1><?= $site->title() ?></h1>
                 <?= $page->byLine()->kt() ?>
            <?php snippet('splash') ?>
            </section>
            
            <!-- ABOUT -->
            <section id="about">
                <?php 
                $about = page('about');
                snippet('svg-select', ['svgSel' => $about->title()]); 
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
                    <?php 
                    $contributions = page('contributions');
                    snippet('svg-select', ['svgSel' => $contributions->title() ]);
                    ?>
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
                                    $cleanFilter = preg_replace("/[^a-zA-Z0-9]+/", " ", str_replace(' ', '', $filter)); 
                                    $catOptions = $contributions->catOptions()->toStructure();
                                    $langOptions = $contributions->langOptions()->toStructure();
                                    ?>
                                    <!-- TODO: Compare Filter Against Larger Structure: If Found, Display SVG -->
                                    <a <?php e((strpos($url, $key) !== false), 'aria-current') ?> href="<?= $contributions->url() ?>?filter=<?= $filter ?>">
                                    <?php if(in_array($key, $catFilter) !== FALSE): ?>
                                        <?php foreach ($catOptions as $catOption): ?>
                                            <?php $catCompFilter = preg_replace("/[^a-zA-Z0-9]+/", " ", strval($catOption->category())); 
                                                if(strcasecmp($cleanFilter, $catCompFilter) === 0): ?>
                                                <?php $catString = preg_replace("/[^a-zA-Z0-9]+/", " ", str_replace(" ", "", $catOption->select())) ?>
                                                    <?php snippet('svg-select', ['svgSel' => $catString ]); ?>
                                                <?php endif ?>
                                        <?php endforeach ?>
                                    <?php else: ?>
                                        <?php foreach($langOptions as $langOption): ?>
                                            <?php $langCompFilter = preg_replace("/[^a-zA-Z0-9]+/", " ", strval($langOption->category())); 
                                                if(strcasecmp($cleanFilter, $langCompFilter) === 0): ?>
                                                <?php $langString = preg_replace("/[^a-zA-Z0-9]+/", " ", str_replace(" ", "", $langOption->select())) ?>
                                                    <?php snippet('svg-select', ['svgSel' => $langString ]); ?>
                                                <?php endif ?>
                                        <?php endforeach ?>
                                    <?php endif ?>
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
                    <?php 
                    $resources = page('resources'); 
                    snippet('svg-select', ['svgSel' => $resources->title()]);
                    ?>
                    <h2><?= $resources->title()?></h2>
                    <?php if($page->resourcesText()):?>
                        <article><?= $page->resourcesText()->kt() ?></article>
                    <?php endif ?>
                    <?php if($page->resourcesLink()):?>
                        <a class="button" href="<?= $resources->url()?>"><?= $page->resourcesLink() ?></a>
                    <?php endif ?>    
            </section> 
<?php snippet('footer') ?>

