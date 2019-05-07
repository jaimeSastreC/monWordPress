<?php
    get_header();
?>
    <div class="row ">
        <div class="col-8">
            <main>
                <section class="section">
                    <div class="row">
                        <div class="col-12 ml-3">
                            <header>
                                <h1>les derniers Articles : </h1>
                            </header>
                        </div>
                    </div>

                    <div class="row d-flex flex-row">
                        <div class="col-3 aside">
                            <?php if (is_active_sidebar('gauche')): ?>
                                <aside class="gauche">
                                    <h2>Aside côté gauche</h2>
                                    <?php get_sidebar('gauche');?>
                                </aside>
                            <?php endif; ?>
                        </div>

                        <?php
                        if ( have_posts() ) {
                            // Load posts loop. 
                            while (have_posts()) {
                                the_post(); ?>
                                <div class="col-7 pl-3">
                                    <article class="article">
                                        <h2><a href="<?php the_permalink()?>">
                                            <?php echo get_the_title(); ?>
                                        </a></h2>

                                        <?php /*the_title();*/ ?>

                                        <!--the_post_thumbnail('thumbnail');-->
                                        <p class="thumpnail"><?php the_post_thumbnail('medium'); ?></p>
                                    </article>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </section>
            </main>
        </div>
        <div class="col-3 p-5 aside">
            <?php if (is_active_sidebar('droite')): ?>
            <aside class="droite">
                <h2>Aside côté droit</h2>
                <?php get_sidebar('droite');?>


                <!--fonction Wordpress pour trouver l'image, chemin-->
                <img src="<?php echo get_template_directory_uri() . '/img/flamand.jpeg'; ?>" class="img-fluid"/>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, harum, neque! Harum nesciunt quaerat totam. Ab adipisci, aliquid asperiores, ex exercitationem fugit nemo odio pariatur, quaerat quam similique unde velit.</p>
            </aside>
            <?php endif; ?>
        </div>
    </div>

<?php
get_footer();
