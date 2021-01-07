<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once(realpath(__DIR__ . '/..') . "/configRoot.php");
?>
<footer  class="bottombar">
	<nav class="bottombar-menu">
		<a href="<?php echo ROOT_PATH?>MentionLegale/MentionsLegales.php">Mentions Légales</a>
		<a href="<?php echo ROOT_PATH?>MentionLegale/CGU.php">CGU</a>
	</nav>
</footer>