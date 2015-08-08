<?php

/*
 * custom post types
 */
 
 function anthology_set_post_types () {
 	  register_post_type(
        'work',
        array(
            'labels' => array(
                'name'          => __( 'Works'),
                'singular_name' => __( 'Work'),
                'all_items'     => __( 'All works'),
                'add_new_item'  => __( 'Add new work' ),
                'view_item'     => __( 'View work'),
                'edit_item'     => __( 'Edit work')
            ),
            'public'      => true,
            'has_archive' => false
        )
    ); 
    
   /* 
    * should have sections
    *
    * section name (chapter, section, roman numerals, etc.)
    *
    */
 
 
 
 
 }
 
 add_action( 'init', 'anthology_set_post_types' );