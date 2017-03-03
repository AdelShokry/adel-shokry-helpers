<?php 
return [
	/* 
	| You Can Add Costom Definds And View Variables
	|
	*/
	// System Defines 
	'defines' => [
		'cp' => 'adminpanel/',
		'cpanel' => 'adminpanel',
		'upload_path' => public_path('upload').'/',
		'IMG' => url('public/assets/cpanel/img').'/',
		'upload_url' => url('public/upload').'/',
		'flugs_url' => url('public/assets/cpanel/img/settings/flags').'/',
		'flugs_path' => public_path('assets/cpanel/img/settings/flags').'/',

	],

	// View Variables
	'viewShareVariables' => [
		'cpanel' => url('public/assets/cpanel').'/',
		'logo' => url('public/assets/cpanel/img/logo.png'),
		'icon' => url('public/assets/cpanel/img/favicon.png'),
	],


];