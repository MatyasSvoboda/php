<?php 
    register_nav_menus(["primary"=>'Primární',"SecondMenu"=>'Menu v patičce']);
    add_theme_support('thumbnails');

    /* Shortcode [catout cat="1"] */
    add_shortcode("catout","catout");
    function catout($atts) {
    extract(shortcode_atts(array('cat' => '', ), $atts));
    if ($cat){
    
        $output = '<div class="catout">';
        $i = 0;   
        $my_query = new WP_Query("cat=$cat&showposts=100");         
        while ($my_query->have_posts()): 
            $my_query->the_post(); 
            $i++; 
            $rok = get_the_time("Y");
            if ($i==1) $rok_posl = $rok;
            if (($rok_posl != $rok) || ($i==6)):
            $output .= "<h2>$rok</h2>";
            endif;
            $rok_posl = $rok; 
            if ($i<6): 
            $output .= '<div class="post clearfix" id="post-'.get_the_ID().'">'; 
            $output .= '<h2 class="post_title"><a href="'.get_permalink(get_the_ID()).'" rel="bookmark" title="Odkaz na '.get_the_title().'">'.get_the_title().'</a></h2>';
            $output .= '<small>'.get_the_time('j. m. Y').'</small>';
            $output .= '<div class="entry">';
            $output .= get_the_excerpt(); 
            $output .= '<br /><a href="'.get_permalink(get_the_ID()).'">zobrazit celý článek &raquo;</a>';
            $output .= '</div><!-- //entry -->'; 
            $output .= '</div><!-- //post '.get_the_ID().' ?> -->';
            else:
            $output .= '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title().'</a><br />';
        endif; 
        endwhile;  
        $output .= "</div>\n";
    
    }
    else $output = "<!-- no cat -->";
    return $output;
    }

?>