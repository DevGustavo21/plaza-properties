<?php

function register_my_menus() {
	register_nav_menus(
	  array(
		'header-menu' => __( 'HeaderMenu' ),
	  )
	);
  }
  add_action( 'init', 'register_my_menus' );