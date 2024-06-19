<?php get_header();?>

<?php 
    if(have_posts()){
            the_post();
?>
    <article class="quote">
        <div class="text">
             <?php the_content(); ?>
        </div>
      </article>
<?php
     
    }
    else{
        echo 'Něco je špatně';
    }
?>

<?php get_footer();?>