<?php
include_once (incDir."/header.php");
include_once (incDir."/navigation.php");
include_once (incDir."/leftbar.php");
include_once (incDir."/statisticsbar.php");
?>
<div id="content">
	<div class="box">
		<div class="top">
			<div class="padding">Pelaajahaun tulokset</div>
		</div>
		<div class="content">
			<?php
			$searchResult = unserialize($_REQUEST["searchResult"]);
			if (count($searchResult) <= 0) { echo "<strong>Ei hakutuloksia</strong>";}
			foreach ($searchResult as $player) {
				if ($player->__get('previousNames') <> null) {$previousNames = "({$player->__get('previousNames')})";} else {$previousNames="";}
				echo "<a href=\"/player/{$player->__get('name')}\">{$player->__get('name')}</a> $previousNames<br />";
			}
			?>
		</div>
	</div>
<?php
include_once (incDir."/footer.php");
?>