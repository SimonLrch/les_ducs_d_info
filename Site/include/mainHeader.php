<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once(realpath(__DIR__ . '/..') . "/main/configRoot.php");
?>
<header class="topbar">
	<a href="#"><img class="topbar-logo" src="../Images/logo.png" alt="Logo Illumination"/></a>
	<nav class="topbar-menu">
		<a href="<?php echo ROOT_PATH?>../main/index.php">Accueil</a>
		<a href="<?php echo ROOT_PATH?>../main/restitution.php">Restitution</a>
		<a href="<?php echo ROOT_PATH?>../main/donation-submission.php">Ajout</a>
		<?php if (isset($_SESSION["email"])): ?>
		<a href="<?php echo ROOT_PATH?>../profil/profil.php">Profil</a>
		<?php else: ?>
		<a href="<?php echo ROOT_PATH?>../main/connexion.php">Connexion</a>
		<?php endif; ?>
	</nav>
</header>