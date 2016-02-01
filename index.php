<?php

include ("parts/header.php");
?>

<p class="explain">this is php header and footer exercice.<p>

	<div class="time">
		<?php
		$date = date("d-m-Y");
		$heure = date("H:i");
		Print("Nous sommes le $date et il est $heure");
		?>
	</div>

	<?php

	// if ($_GET["page"] == "contact") {
	// 	include "parts/contact.php";
	// }
	// if ($_GET["page"] == "home") {
	// 	include "parts/home.php";
	// }

	$pages = ["contact", "home"];
	$adrese = $_GET["page"];


	if (in_array($adrese, $pages)){
		include 'parts/'.$adrese. '.php';
	}
	?>

	<?php
	include ("parts/footer.php");
	?>
