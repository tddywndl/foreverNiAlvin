<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>DASHBOARD</title>

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
	
		<h1 ng-controller="infoCtrl"class="jumbotron " style="text-align:center;">{{info}}Welcome To My App
		<!-- <span style="color:#f00;font-size:50px;">
			<i class="glyphicon glyphicon-heart"></i>
			<i class="glyphicon glyphicon-heart"></i>
			<i class="glyphicon glyphicon-heart"></i>
			<i class="glyphicon glyphicon-heart"></i>
			<i class="glyphicon glyphicon-heart"></i>
		</span> -->
		</h1>
		<div ng-controller="logoutCtrl">
			
		<button type="button" class="btn btn-danger btn-md" ng-click="logout()">LOGOUT</button>

		</div>
</div>

</body>
</html>