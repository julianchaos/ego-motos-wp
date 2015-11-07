<?php
function register_my_menu() {
  register_nav_menu( 'primary', 'Menu do cabeçalho' );
}
add_action( 'after_setup_theme', 'register_my_menu' );
