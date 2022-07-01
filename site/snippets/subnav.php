<a href="#title"> Introduction </a>
                    <a href="#body">The Recipe</a>
                    <?php
                    if($page->template() == 'contribution') {$contributions = $page->children();}
                    foreach($contributions as $contribution): ?>
                        <a href="#<?= $contribution->uid()?>"> <?= $contribution->title() ?></a>
                    <?php endforeach ?>
                    <?php if($page->context() == 'true'):?>
                        <a href="#context">Q&A</a>
                    </a>
                    <?php endif ?>