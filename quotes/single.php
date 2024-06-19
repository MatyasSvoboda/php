<?php get_header();?>

<?php 
    if(have_posts()){
            the_post();
?>
    <article class="quote">
        <div class="text">
          <a href=""<?php get_the_permalink() ?>>
             <?php the_excerpt(); ?>
          </a>
        </div>
        <div class="author">
            <?php 
                $custom = get_post_custom($post->ID);
                $autor= $custom["_autor"][0];
                echo $autor;
            ?>
        </div>
        <div class="cats">
            <?php the_category(); ?>
        </div>
      </article>
<?php
     
    }
    else{
        echo 'Něco je špatně';
    }
?>

<?php get_footer();?>