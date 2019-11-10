<?php 
require 'config.php';
require 'function.php';

include 'header.php';
 ?>
 <div class="container bg-dark mt-3 rondet shadow-lg" style="width: 1300px; height: 500px">
 	<div class="row stat">
 		<div class="col-md-auto text-uppercase stat-ip">
 			<h1><?= $ip; ?></h1>
 		</div>
 		<div class="w-100"></div>
 		<div class="col-md-auto stat-stat">
 			<?php 
 			if( $online == true ) {
 			 ?>
 			<h3 class="text-success">Online</h3>
 			<?php }else{
			 ?>
			<h3 class="text-danger">Offline</h3>
			<?php } ?>
 		</div>
 		<div class="w-100"></div>
 		<div class="col-md-auto stat-player">
 			<h3 class="text-info"><?= $player; ?>/<?= $playerm; ?> Player</h3>
 		</div>
 		<div class="w-100"></div>
 		<div class="col-md-auto stat-motd">
 			<h4>
 				<?php print_r($motd[0]); ?>
 			</h4>
 		</div>
 		<div class="w-100"></div>
 		<div class="col-md-auto stat-motd1">
 			<h4>
 				<?php print_r($motd[1]); ?>
 			</h4>
 		</div>
 	</div>
 </div>