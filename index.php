<?php
/*
Plugin Name: Test2
Plugin URI: #	#
Description: _#_
Author: SocialWebGroup SWG AB
Version: 0.1
Author URI: http://socialwebgroup.se
*/




error_reporting(E_ALL);
ini_set('display_errors', 1);

if(!class_exists('WPFW'))
	include_once(dirname(__FILE__).'/libraries/WPFW/WPFW.php');


class Test2 extends WPFW{
	
	public function __construct($data){
	
		parent::__construct($data);
		
		$this->addMenuPage(array(
			array
			(
				'label'			=>'Test Plugin 2',
				'controller'	=>'startController3',
				'order'			=>41,
				'badge'			=>2
			),
			array
			(
				'label'			=>'Test Controller',
				'controller'	=>'testCtrl',
				'order'			=>42
			)
		));
		
		// Add the pages
		
		$this->createMenu();
	}
	
	public function runMenu(){
		echo 'assad';
		
	}
	
}

$config = array
			(
				'plugin_url'	=> plugins_url('',__FILE__),
				'base_url'		=> dirname(__FILE__),
			);

$test2 = new Test2($config);


//$bm->marker('shotdown');
//echo 'Benchmark '.$bm->elapsed_time('init','shotdown');