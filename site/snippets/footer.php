        </main>
        <footer>
        <!-- TODO: Speak with XXKM about what should go in the footer? 
        Copyright / Social / Etc
        -->
        <section id='bottom' class="gradient"></section>
        <section class="links">
            <?php snippet('social') ?>
        </section>
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