<?php

register_nav_menus(["primary" => 'Primární']);
add_theme_support('post-thumbnails');
function add_citatdetail(){
    add_meta_box("citat_details", "Vlastnosti citatu", "citat_options");
} 
add_action("add_meta_boxes", "add_citatdetail");

function citat_options(){
    global $post;
    $custom = get_post_custom($post->ID);
    $autor= $custom["_autor"][0];
    echo '<input type="text" name="autor" value="'.$autor.'" />';
}

function update_citat(){
    global $post;
    update_post_meta($post->ID, "_autor", $_POST["autor"]);
}
add_action("save_post", "update_citat");

?>