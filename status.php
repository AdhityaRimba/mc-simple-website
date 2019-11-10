<?php 
require 'config.php';
require 'function.php';

include 'header.php';
 ?>
 <div class="container bg-dark mt-3 shadow-lg" style="width: 1300px; height: 500px">
 	<div class="row">
 		<div class="col-md-auto text-uppercase stat-ip">
 			<h1 class="bold"><?= $ip; ?></h1>
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
 	</div>
 </div>