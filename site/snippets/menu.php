<nav class="navbar is-transparent">
	<div class="navbar-brand">
		<a class="navbar-item" href="<?php echo url() ?>">
			<img src="https://bulma.io/images/bulma-logo.png" alt="<?php echo html($site->title()) ?>" width="112"
					 height="28">
		</a>
		<div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>

	<div id="navbarExampleTransparentExample" class="navbar-menu">
		<div class="navbar-start">
			<a class="navbar-item" href="<?php echo url() ?>">
				Eingangsbereich
			</a>
			<div class="navbar-item has-dropdown is-hoverable">
				<a class="navbar-link" href="/documentation/overview/start/">
					FeWo
				</a>
				<div class="navbar-dropdown is-boxed">
					<a class="navbar-item" href="/documentation/overview/start/">
						Raumteilung
					</a>
					<a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
						Anfahrt
					</a>
					<a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
						Preise
					</a>
					<a class="navbar-item" href="https://bulma.io/documentation/layout/container/">
						Anfrage
					</a>
					<a class="navbar-item" href="https://bulma.io/documentation/form/general/">
						Form
					</a>
					<hr class="navbar-divider">
					<a class="navbar-item" href="https://bulma.io/documentation/elements/box/">
						Elements
					</a>
					<a class="navbar-item is-active" href="https://bulma.io/documentation/components/breadcrumb/">
						Components
					</a>
				</div>
			</div>
			<?php foreach ($pages->visible() AS $p): ?>
				<a <?php echo ($p->isOpen()) ? ' class="navbar-item is-active"' : ' class="navbar-item"' ?>
					href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a>
			<?php endforeach ?>

		</div>

		<div class="navbar-end">
			<div class="navbar-item">
				<div class="field is-grouped">
					<p class="control">
						<a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet"
							 data-social-target="http://localhost:4000" target="_blank"
							 href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&amp;hashtags=bulmaio&amp;url=http://localhost:4000&amp;via=jgthms">
							<span class="icon"><i class="fa fa-twitter"></i></span>
							<span>Tweet</span>
						</a>
					</p>
					<p class="control">
						<a class="button is-primary" href="https://github.com/jgthms/bulma/archive/0.5.1.zip">
							<span class="icon"><i class="fa fa-download"></i></span>
							<span>Download</span>
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</nav>

