<section class="prevnext">
    <!-- TODO: Add Label For Switching Between Articles -->
    <?php if ($page->hasPrevListed()): ?>
        <a class="prev button" href="<?= $page->prevListed()->url() ?>">Go To The Previous Receipt!</a>
    <?php endif ?>
    <a class="button" href="#title">Back To Top</a>
    <?php if ($page->hasNextListed()): ?>
        <a class="next button" href="<?= $page->nextListed()->url() ?>">Go To the Next Recipe!</a>
    <?php endif ?>
</section>