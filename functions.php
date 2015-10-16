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

function add_custom_meta_boxes() {
    add_meta_box('anthology_tei_attachment', 'TEI File', 'anthology_tei_attachment', 'work', 'normal', 'high');
}

add_action('add_meta_boxes', 'add_custom_meta_boxes');

/**
 * Allow XML uploads.
 */
function anthology_custom_upload_xml($mimes) {
    $mimes = array_merge($mimes, array('xml' => 'application/xml'));
    return $mimes;
}

add_filter('upload_mimes', 'anthology_custom_upload_xml');

/**
 * HTML for TEI file upload field.
 */
function anthology_tei_attachment() {
    wp_nonce_field(plugin_basename(__FILE__), 'anthology_tei_attachment_nonce');
    $html = '<p class="description">';
    $html .= 'Upload your TEI file.';
    $html .= '</p>';
    $html .= '<input type="file" id="anthology_tei_attachment" name="anthology_tei_attachment" value="" size="25">';
    echo $html;
}

add_action('save_post', 'anthology_save_custom_meta_data');

/**
 * Parse data from TEI file upload field and save file to uploads folder.
 */
function anthology_save_custom_meta_data($id) {
    if(!empty($_FILES['anthology_tei_attachment']['name'])) {
        $supported_types = array('application/xml');
        $arr_file_type = wp_check_filetype(basename($_FILES['anthology_tei_attachment']['name']));
        $uploaded_type = $arr_file_type['type'];

        if(in_array($uploaded_type, $supported_types)) {
            $upload = wp_upload_bits($_FILES['anthology_tei_attachment']['name'], null, file_get_contents($_FILES['anthology_tei_attachment']['tmp_name']));
            if(isset($upload['error']) && $upload['error'] != 0) {
                wp_die('There was an error uploading your file. The error is: ' . $upload['error']);
            } else {
                update_post_meta($id, 'anthology_tei_attachment', $upload);
            }
        }
        else {
            wp_die("The file type that you've uploaded is not a PDF.");
        }
    }
}

function anthology_update_edit_form() {
    echo ' enctype="multipart/form-data"';
}

add_action('post_edit_form_tag', 'anthology_update_edit_form');
