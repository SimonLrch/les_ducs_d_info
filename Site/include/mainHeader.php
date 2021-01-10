<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once(realpath(__DIR__ . '/..') . "/configRoot.php");
?>

<script>
	function handleHamburger() {
		let menu = document.querySelector(".topbar");
		let hamburger = document.querySelector(".hamburger-menu");
		if (menu.classList.contains("menu-show")) {
			menu.classList.remove("menu-show");

			// Animation
			hamburger.classList.remove("hamburger-active");
		}
		else {
			menu.classList.add("menu-show");

			// Animation
			hamburger.classList.add("hamburger-active");
		}
	}
</script>

<header class="topbar">
	<div class="topbar-box">
		<a href="<?php echo ROOT_PATH?>index.php">
			<img class="topbar-logo" src="<?php echo ROOT_PATH?>Images/logo.png" alt="Logo Illumination"/>
		</a>
		<a class="hamburger-menu" onClick=handleHamburger()>
			<svg viewBox="0 0 100 100">
				<path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
				<path d="m 30,50 h 40" />
				<path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
			</svg>
		</a>
	</div>
	<nav class="topbar-menu">
		<a href="<?php echo ROOT_PATH?>index.php">Accueil</a>
		<a href="<?php echo ROOT_PATH?>restitution.php">Restitution</a>
		<a href="<?php echo ROOT_PATH?>donation-submission.php">Ajout</a>
		<?php if (isset($_SESSION["email"])): ?>
		<a href="<?php echo ROOT_PATH?>profil/profil.php">Profil</a>
		<?php else: ?>
		<a href="<?php echo ROOT_PATH?>connexion.php">Connexion</a>
		<?php endif; ?>
	</nav>
</header>