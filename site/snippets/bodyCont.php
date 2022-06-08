<?php if($page->layoutTog() == 'true'): ?>
        <!-- TODO: Need to Style In CSS -->
        <?php foreach ($page->bodylayout()->toLayouts() as $layout): ?>
            <article class="grid" id="<?= $layout->id() ?>">
            <?php foreach ($layout->columns() as $column): ?>
            <section class="column" style="--columns:<?= $column->span() ?>">
                <section class="blocks">
                <?= $column->blocks() ?>
                </section>
            </section>
            <?php endforeach ?>
            </article>
            <?php endforeach ?>
    <?php else: ?>
        <?= $page->bodyCont()->kt() ?>
    <?php endif ?>