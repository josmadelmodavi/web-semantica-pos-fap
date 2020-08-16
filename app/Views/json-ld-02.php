<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>PokémonGo | JSON-LD 02</title>
	<meta name="description" content="Exercício da Pós-Graduação. Módulo: Web Semântica">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico" />
	<link rel="stylesheet" href="<?= base_url('public/assets/css/tables-bootstrap.css') ?>">
	<link rel="stylesheet" href="<?= base_url('public/assets/css/style.css') ?>">
</head>

<body>

	<header>
		<?= view('menu/nav') ?>
		<div class="heroe">
			<h1>PokémonGo | JSON-LD 02</h1>
			<h2>Exercício da Pós-Graduação. Módulo: Web Semântica</h2>
		</div>
	</header>

	<section>
		<script type="application/ld+json">
			{
				"@context": "http://schema.org/",
				"@type": "Jogador",
				"Nome": "David",
				"Pokémon": "Pikachu",
				"Badges": "Volcano Badge"
			}
		</script>
		<h1>Jogador</h1>
		<p>Nome</p>
		<pre><code>David</code></pre>
		<p>Pokémon</p>
		<pre><code>Pikachu</code></pre>
		<p>Badges</p>
		<pre><code>Volcano Badge</code></pre>
	</section>

	<?= view('template/footer') ?>

	<script>
		function toggleMenu() {
			var menuItems = document.getElementsByClassName('menu-item');
			for (var i = 0; i < menuItems.length; i++) {
				var menuItem = menuItems[i];
				menuItem.classList.toggle("hidden");
			}
		}
	</script>

</body>

</html>