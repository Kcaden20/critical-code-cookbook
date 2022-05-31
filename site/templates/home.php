<?php snippet('header') ?>

            <!-- TITLESPLASH -->
            <!-- TODO: Build Splashpage -->
            <section>
                <h1><?= $site->title() ?></h1>
            </section>
            
            <!-- ABOUT -->
            <section id="about">
                <!-- TODO: Add Icon -->
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
            
            <!-- CONTRIBUTIONS  -->
            <!-- TODO: Add Icon -->
            <section id="contributions">
                    <?php $contributions = page('contributions')?>
                    <h2><?= $contributions->title() ?></h2>

                    <!-- Contributions Text Conditional -->
                    <?php if($page->contributionText()):?>
                        <?= $page->contributionText()->kt() ?>
                    <?php endif ?>

                    <!-- Contributions Link Conditional -->
                    <?php if($page->contributionLink()):?>
                        <a class="button" href="<?= $contributions->url() ?>"><?= $page->contributionLink() ?></a>
                    <?php endif ?>    
            </section>

            <!-- RESOURCES -->
            <!-- TODO: Add Icon -->
            <section id="resources">
                    <?php $resources = page('resources'); ?>
                    <h2><?= $resources->title()?></h2>
                    <?php if($page->resourcesText()):?>
                        <?= $page->resourcesText()->kt() ?>
                    <?php endif ?>
                    <?php if($page->resourcesLink()):?>
                        <a class="button" href="<?= $resources->url()?>"><?= $page->resourcesLink() ?></a>
                    <?php endif ?>    
            </section> 
<?php snippet('footer') ?>

