    <footer>
        <div class="footer-content">
            <div class="left-side">
                <img src="<?php bloginfo("template_url"); ?>/erb_remove.png" alt="Erb Schwarzenbergů - původní donátoři ŘKF">
                <div class="footer-title">
                    <h3><?php bloginfo("name"); ?></h3>
                </div>

            </div>
            <div class="right-side">
                <?php wp_nav_menu(["theme_location"=>"SecondMenu", "depth"=>"1"]); ?>
            </div>
        </div>
        <div class="footer-logos">
            <img src="<?php bloginfo("template_url"); ?>/litomerice_remove.png" alt="Litoměřice">
            <img src="<?php bloginfo("template_url"); ?>/denik_remove.png" alt="Katolický týdeník">
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>