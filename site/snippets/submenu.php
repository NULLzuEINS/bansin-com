<?php

// find the open/active page on the first level
$open = $pages->findOpen();
$items = ($open) ? $open->children()->visible() : false;

?>
<?php if ($items && $items->count()): ?>
	<?php foreach ($items AS $item): ?>
		<a <?php echo ($p->isOpen()) ? ' class="navbar-item is-active"' : ' class="navbar-item"' ?>
			href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a>
	<?php endforeach ?>
<?php endif ?>
