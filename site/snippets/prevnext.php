<section>
    <!-- TODO: Add Label For Switching Between Articles -->
    <?php if ($page->hasPrevListed()): ?>
        <a class="prev" href="<?= $page->prevListed()->url() ?>">Go To The Previous Receipt!</a>
    <?php endif ?>

    <?php if ($page->hasNextListed()): ?>
        <a class="next" href="<?= $page->nextListed()->url() ?>">Go To the Next Recipe!</a>
    <?php endif ?>
</section>