<?php get_header(); ?>
<div class="wrapper-header" id="wrapperHeader">
            <div class="container-header">
                <div class="content-header">
                    <img src="<?php bloginfo("template_url"); ?>/erb_remove.png" alt="">
                    <div class="title">
                        <h1><?php bloginfo("name"); ?></h1>
                    </div>
                </div>
            </div>
            <div class="buttons">
                <div class="button1">
                    <a href="#Postoloprty">Postoloprty</a>
                </div>
                <div class="button2">
                    <a href="#Lenesice">Lenešice</a>
                </div>  
            </div>
        </div>
    </section>
    <div class="wrapper-content" id="Postoloprty">
        <div class="content">
            <div class="title-castle">
                <h2>kostel Nanebevzetí Panny Marie</h2>
            </div>
            <div class="content-articles">
                <div class="left">
                    <div class="articles">
                        <div class="inside">
                            <h3>nejnovější články</h3>
                            <div class="inside-table-articles">
                                <?php 
                                    $q = new WP_Query(["cat"=>"4","posts_per_page"=>"3"]);
                                    while($q->have_posts()){
                                        $q->the_post();
                                ?>
                                <div class="table-article">
                                    <div class="article-inside">
                                        <h3><?php the_title(); ?></h3>
                                        <?php 
                                            if (has_post_thumbnail()){
                                                the_post_thumbnail(); 
                                            }
                                            else{
                                                echo '<img src="'.get_bloginfo("template_url").'/postoloprty.png" alt="ŘKF Postoloprty" width="120">';
                                            }
                                        ?>
                                        <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo("template_url"); ?>/icons8-chevron-right-24.png"></a>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="buttons">
                                <div class="button">
                                    <a href="<?php bloginfo("url"); ?>/clanky-a-fotogalerie/">všechny články</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="info">
                        <?php 
                            $q = new WP_Query(["page_id"=>"7688"]);
                            while($q->have_posts()){
                                $q->the_post();
                                the_content();
                            }    
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper-content-second" id="Lenesice">
        <div class="content">
            <div class="title-castle">
                <h2>kostel sv. Šimona a Judy</h2>
            </div>
            <div class="content-articles">
                <div class="left">
                    <div class="articles">
                        <div class="inside">
                            <h3>nejnovější články</h3>
                            <div class="inside-table-articles">
                                <?php 
                                    $q = new WP_Query(["cat"=>"5","posts_per_page"=>"3"]);
                                    while($q->have_posts()){
                                        $q->the_post();
                                ?>
                                <div class="table-article">
                                    <div class="article-inside">
                                        <h3><?php the_title(); ?></h3>
                                        <?php 
                                            if (has_post_thumbnail()){
                                                the_post_thumbnail(); 
                                            }
                                            else{
                                                echo '<img src="'.get_bloginfo("template_url").'/image 1.png" alt="ŘKF Lenesice" width="120">';
                                            }
                                        ?>
                                        <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo("template_url"); ?>/icons8-chevron-right-24.png"></a>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="buttons">
                                <div class="button">
                                    <a href="">všechny články</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="info">
                        <?php 
                            $q = new WP_Query(["page_id"=>"7690"]);
                            while($q->have_posts()){
                                $q->the_post();
                                the_content();
                            }    
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper-activity">
        <div class="activity-content">
            <div class="activity-title">
                <h1>Aktivity farnosti</h1>
            </div>
            <div class="activity-tables">
                <?php 
                    $q = new WP_Query(["page_id"=>"7697"]);
                    while($q->have_posts()){
                        $q->the_post();
                        the_content();
                    }    
                ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>