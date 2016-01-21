<?php
	ini_set("display_errors", "On");
	$links = [
		'home' => '',
		'films' => 'community/conversations/films',
		'news' => 'community/conversations/news',
		'community' => 'community/',
		'about' => 'about/',
		'equipment' => 'equipment/'
	];
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<nav class="small">
	<?php 
		foreach ($links as $key => $value) {

			$linkID = $key;
			$linkTitle = ucfirst($linkID);
			$linkLocation = $value;

			if (strlen($linkLocation) == 0 ||
				!strpos($actual_link,$linkLocation)) {

				$absoluteLocation = str_replace($value, '', $actual_link);

				echo '<a id="'.$linkID.'" href="'.$absoluteLocation.'">'.$linkTitle.'</a>';
			}
		}
	?>
</nav>
