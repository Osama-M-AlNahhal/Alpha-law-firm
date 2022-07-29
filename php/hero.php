<section class="hero">
	<?php
		if (isset($_SESSION['username'])) {
			echo '<h1> welcome back ' . $_SESSION['username'] . '</h1>';
		} 

	?>
</section>