<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>
<?php snippet('hero') ?>

<!-- Example row of columns -->
<main class="section">
	<section class="container">
			<h1 class="title"><?php echo html($page->title()) ?></h1>
			<?php echo kirbytext($page->text()) ?>
	</section>
	<aside class="col-xs-4">
		<h2>Buchungsanfrage</h2>
		<?php snippet('booking') ?>
	</aside>
</main>

<?php snippet('footer') ?>
