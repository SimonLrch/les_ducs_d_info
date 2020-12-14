<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once(realpath(__DIR__ . '/..') . "/main/configRoot.php");
?>
<footer  class="bottombar">
	<nav class="bottombar-menu">
		<a href="<?php echo ROOT_PATH?>../MentionLegale/MentionsLegales.html">Mentions Légales</a>
		<a href="<?php echo ROOT_PATH?>../MentionLegale/CGU.html">CGU</a>
	</nav>
</footer>