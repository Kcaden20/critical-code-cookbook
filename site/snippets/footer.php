        </main>
        <footer>
        <section id='bottom'></section>
            <?php if($site->socialMedia()->isNotEmpty()):?>
        <section class="links">
            <?php snippet('social') ?>
        </section>
        <?php endif ?>
        <?php if($site->creditsText()->isNotEmpty()):?>
            <section class="other-info">
                <?= $site->creditsText()->kt() ?>
            </section>
        <?php endif ?>
        </footer>

        <?= js([
        'assets/js/index.js',
        'assets/js/lightbox.js',
        '@auto'
        ]) ?>
    </body>
</html>