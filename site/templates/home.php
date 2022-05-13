<?php snippet('header') ?>

            <!-- TITLESPLASH -->
            <!-- TODO: Build Splashpage -->
            <section>
                <h1><?= $site->title() ?></h1>
            </section>
            
            <!-- ABOUT -->
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
            
            <!-- CONTRIBUTIONS  -->
            <section>
                    <?php $contributions = page('contributions')?>
                    <h2><?= $contributions->title() ?></h2>

                    <!-- Contributions Text Conditional -->
                    <?php if($page->contributionText()):?>
                        <?= $page->contributionText()->kt() ?>
                    <?php endif ?>

                    <!-- Contributions Link Conditional -->
                    <?php if($page->contributionLink()):?>
                        <a href="<?= $contributions->url() ?>"><?= $page->contributionLink() ?></a>
                    <?php endif ?>    
            </section>

            <!-- RESOURCES -->
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
<?php snippet('footer') ?>

