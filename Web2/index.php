<?php get_header(); ?>
    <div class="wrapper-content">  
        <?php 
            while(have_posts()){
                the_post();
                ?>
                <div class="content">
                    <div class="title-castle"> //přejmenovat class
                        <h2><?php the_title?></h2>
                        <div class="postinfo"><?php the_time(get_option('date_format')); ?></div>
                        <?php 
                            if(has_post_thumbnail()){
                                the_post_thumbnail();
                            }
                            else{
                                $thumb_img = wp_get_attachment_image_src($thumb_id);?>
                                <img src="'.$thumb_img[0].'" alt="ŘKF Postoloprty" class="thumbnail">
                                <?php
                            }
                        ?>
                    </div>
                    
                    <?php the_excerpt(); ?>
                </div>
        <?php       } ?>
    </div>
<?php get_footer(); ?>