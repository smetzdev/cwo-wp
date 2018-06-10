<?php
/*
 * Template Name: Galerien Übersicht
 */
// Redirect temporarly
header('Location: ' . home_url(), true, 302);

/** HTML Begin **/
get_template_part( 'modules/html_begin' );

/*** Navbar ***/
get_template_part( 'modules/navbar' );

/** Header **/
get_template_part('partials/page-bilder/page-bilder_header');

/** Content ***/
get_template_part( 'partials/page-bilder/page-bilder_content' );

/** Footer **/
get_template_part('modules/cwo_footer');


/** HTML End **/
get_template_part( 'modules/html_end' );