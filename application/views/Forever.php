<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<!-- css -->
	 <?php foreach ($style as $styles):?>
		<link rel="stylesheet" type="text/css" href="<?=base_url($styles);?>">
     <?php endforeach;?>
	
	<!-- js -->
	<?php foreach ($js as $theJS): ?>
		<script src="<?=base_url($theJS);?>"></script>
	<?php endforeach ?>
</head>
<body ng-app="app.module">

<div class="container">
	
		<h1 class="jumbotron " style="text-align:center;"><b>Raffle Promo</b>
	<!-- 	<span style="color:#f00;font-size:50px;">
			<i class="glyphicon glyphicon-heart"></i>
			<i class="glyphicon glyphicon-heart"></i>
			<i class="glyphicon glyphicon-heart"></i>
			<i class="glyphicon glyphicon-heart"></i>
			<i class="glyphicon glyphicon-heart"></i>
		</span> -->
		</h1>
	
	<div class="row">
	<div class="col-md-7" ng-controller="logCtrl">
		<form ng-submit="login()">
			<div class="input-group input-group-sm">
			  <span class="input-group-addon" id="basic-addon1">Username</span>
			  <input type="text" class="form-control" ng-model="ldata.username" placeholder="Username" aria-describedby="basic-addon1" required="required">
			</div>
			<br>
			<div class="input-group input-group-sm">
			  <span class="input-group-addon" id="basic-addon1">Password</span>
			  <input type="password" class="form-control" ng-model="ldata.password" placeholder="Password" aria-describedby="basic-addon1" required="required">
			</div>
			<br>
			<button type="submit" class="btn btn-primary btn-sm" >Login</button>
		</form>
	</div>
	<br>
	<div class="col-md-5" ng-controller="regCtrl">
		<form ng-submit="register()">
			<div class="input-group input-group-sm" >
			  <span class="input-group-addon" id="basic-addon1">Username</span>
			  <input type="text" class="form-control" ng-model="rdata.username" placeholder="Username" aria-describedby="basic-addon1" required="required">
			</div>
			<br>
			<div class="input-group input-group-sm" >
			  <span class="input-group-addon" id="basic-addon1">Password</span>
			  <input type="password" class="form-control" ng-model="rdata.password" placeholder="Password" aria-describedby="basic-addon1" required="required">
			</div>
			<br>
			<div class="input-group input-group-sm">
			  <span class="input-group-addon" id="basic-addon1">Email</span>
			  <input type="email" class="form-control" ng-model="rdata.email" placeholder="Email" aria-describedby="basic-addon1" required="required">
			</div>
			<br>
			<button type="submit" class="btn btn-primary btn-sm" >Register</button>
		</form>
	</div>
	</div>

</div>

</body>
</html>