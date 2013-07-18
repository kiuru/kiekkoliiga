<?php
include_once (incDir."/header.php");
include_once (incDir."/navigation.php");
include_once (incDir."/leftbar.php");
include_once (incDir."/rightbar.php");
?>
<div id="content">
	<div class="box">
		<div class="top">
			<div class="padding">Kiekkoliiga</div>
		</div>
		<div class="content">
			
			<div class="home_logo"><img src="/images/kla_logo.png"></div>
			
			<p><strong>Kiekkoliiga</strong> on <a href="http://kiekko.tk/">Kiekko.tk</a> -nettipelin 
			pohjalle rakentuva nettijääkiekkoliiga. Liiga on pyörinyt johtokunnan johdolla
			jo yli kuusi vuotta, eikä loppua ole näkyvissä. Pienimuotoinen liiga on kasvanut 
			satojen pelaajien tiiviiksi kiekkoyhteisöksi ja yhä uusia pelaajia ja joukkueita 
			on tyrkyllä liigaan.</p>
			
			<p>Kiekkoliigan alaisia sarjoja on nykypäivänä viisi. Ylin sarjataso on Liiga, 
			jonka jälkeentulee alempina sarjatasoina 1. Divari, 2. Divari, 3. Divari ja 4. Divari. 
			Divarien kautta joukkueet voivat sarjatasojen välisten karsintojen kautta nousta yleempiin 
			Divareihin ja sitä kautta Kiekkoliigan eliittisarjaan Liigaan. Mukaan haluavat joukkueet 
			voivat pyrkiä ennen jokaisen kauden alkua järjestettäviin 4. divarikarsintoihin.</p>
			
			<p>IRC-kanava: #kiekkoliiga @ IRCnet
		</div>
	</div>
	
	<?php foreach($_REQUEST["lastNews"] as $key=>$value){ ?>
	<div class="box">
		<div class="top">
			<div class="padding"><?php echo '<strong><a href="#">'.$value["subject"].'</a></strong> - '.date("j.n.Y", $value["poster_time"]); ?></div>
		</div>
		<div class="content">
			<?php echo bbc($value["body"]); ?>
		</div>
	</div>
	<?php } ?>
	<div class="box">
		<div class="top">
			<div class="padding">Jee</div>
		</div>
		<div class="content">
			<pre>
			<?php //print_r($_REQUEST); ?>
			</pre>
		</div>
	</div>
<?php
include_once (incDir."/footer.php");
?>