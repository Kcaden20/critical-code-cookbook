<?php if($page->layoutTog() == 'true'): ?>
        <!-- TODO: Need to Style In CSS -->
        <?php foreach ($page->bodylayout()->toLayouts() as $layout): ?>
            <article class="grid" id="<?= $layout->id() ?>">
            <?php foreach ($layout->columns() as $column): ?>
            <div class="column" style="--span:<?= $column->span() ?>">
                <div class="blocks">
                <?= $column->blocks() ?>
                </div>
            </div>
            <?php endforeach ?>
            </article>
            <?php endforeach ?>
    <?php else: ?>
        <?= $page->bodyCont()->kt() ?>
    <?php endif ?>