<?php snippet('header') ?>
            Test
            <!-- TODO: Build Splashpage -->
            <section>
                <h1><?= $site->title() ?></h1>
            </section>
            
            <!-- TODO: Build About Section -->
            <section>
                <!-- Introduction Title Conditional -->
                <?php 
                $introTitle = $page->introTitle(); 
                if($introTitle->isNotEmpty()): ?>
                    <h2><?= $introTitle?></h2>
                <?php endif ?>
                
                <!-- Introduction Text Conditional -->
                <?php 
                $introText = $page->introText();
                if($introText->isNotEmpty()): ?>
                    <?= $introText->kt() ?>
                <?php endif ?>
            </section>
                    <?php $contributions = page('contributions')?>
                    <h2><?= $contributions->title() ?></h2>
                    <?php if($page->contributionText()):?>
                        <?= $page->contributionText()->kt() ?>
                    <?php endif ?>

                    <?php if($page->contributionLink()):?>
                        <a href="<?= $contributions->url() ?>"><?= $page->contributionLink() ?></a>
                    <?php endif ?>
            <!-- TODO: Build Contributions Section -->
            <section>
                    <?php $resources = page('resources'); ?>
                    <h2><?= $resources->title()?></h2>
                    <?php if($page->resourcesText()):?>
                        <?= $page->resourcesText()->kt() ?>
                    <?php endif ?>
                    <?php if($page->resourcesLink()):?>
                        <a href="<?= $resources->url()?>"><?= $page->resourcesLink()->kt() ?></a>
                    <?php endif ?>    
            </section> 

            <!-- TODO: Build Resources Section -->
            <section>
            </section> 

<?php snippet('footer') ?>

