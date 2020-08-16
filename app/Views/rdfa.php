<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>PokémonGo | RDFa</title>
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
			<h1>PokémonGo | RDFa</h1>
			<h2>Exercício da Pós-Graduação. Módulo: Web Semântica</h2>
		</div>
	</header>

	<section>
		<div vocab="http://xmlns.com/foaf/0.1/">
			<div resource="#personalidade_cearense">
				<span property="class" href="#pokemon">Descrição: <br> Jogo Pokémon</span>.<br>
				<span property="class" href="#person">Jogador: David Alves</span>.<br>
				<span property="class" href="#event"><br>Características: <br> Batalha</span>.<br>
				<span property="class" href="#place">Ginásios</span>.<br>
				<span property="class" href="#organization">Guilds</span>.<br>
				<span property="class" href="#game">Estilo Jornada Pokémon</span>.<br>
				<span property="class" href="#action">É possivel capturar Pokémon</span>.<br>
				<span property="class" href="#agend">Pokedex para descrever cada Pokémon</span>.<br>
				<span property="class" href="#date"></span>
			</div>
			<div resource="#pokemon" typeof="pokemon">
				<span property="name">alakazam</span>
				<a property="type">psíquico</a>.
			</div>
			<div resource="#person" typeof="Person">
				<span property="name">David Alves</span>
				<a property="pokemons">Alakazam, Eddie,Vic Rattlehead</a>.
				<a property="birthDate">03/07/1996</a>.
				<a property="badges">Ginásio do Fogo</a>.
			</div>
			<div resource="#event" typeof="Batalha">
				<span property="Jogadores">David Alves e Bilu</span>
				<a property="Duration">30 minutos</a>.
				<a property="Guildas">Megadeth x Metallica</a>.
			</div>
			<div resource="#place" typeof="Ginásio">
				<span property="Id">1</span>
				<a property="type">Fogo</a>.
				<a property="type">Bilu</a>.
			</div>
			<div resource="#organization" typeof="Guilda">
				<span property="Id">3</span>
				<a property="Name">Iron Maiden</a>.
				<a property="Emblem">Foto do Eddie</a>.
			</div>
			<div resource="#game" typeof="Jornada_Pokemon">
			</div>
			<div resource="#action" typeof="Pegar_Um_Novo_Pokemon">
			</div>
			<div resource="#agend" typeof="Pokedex">
			</div>
			<div resource="#date" typeof="Inicio_do_Game">
			</div>
		</div>
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