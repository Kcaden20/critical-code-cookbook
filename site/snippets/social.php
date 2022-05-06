<?php
if($site->socialMedia()->isNotEmpty()):

// Accessing social media structure
$items = $site->socialMedia()->toStructure();

//Making each item in the structure into a separate item to be accessed
foreach($items as $item): 
?>

<a href="<?php
//Checking to see if the link being used is an e-mail or not.
if($item->emailToggle()->isTrue()) { ?>
<?= Str::encode($item->emailLink()); ?>
<?php 
} 
else {
  echo $item->link();
}
?>">
<?php 
  if($item->displayText()->isNotEmpty()) {
    echo $item->displayText();
  } else {
    echo $item->platform()->text();
  }
?>
</a>
<?php endforeach ?>
<?php endif ?>
