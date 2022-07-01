                    <a class="subnav-link" href="#title"> Introduction </a>
                    <a class="subnav-link" href="#body">The Recipe</a>
                    <?php
                    if($page->template() == 'contribution') {$contributions = $page->children();}
                    foreach($contributions as $contribution): ?>
                        <a class="subnav-link" href="#<?= $contribution->uid()?>"> <?= $contribution->title() ?></a>
                    <?php endforeach ?>
                    <?php if($page->context() == 'true'):?>
                        <a class="subnav-link" href="#context">Q&A</a>
                    </a>
                    <?php endif ?>