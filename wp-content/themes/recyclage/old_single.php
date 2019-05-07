
<?php
get_header();
?>

<main>
    <div class="container">
        <div class="row text-center">
            <div class="offset-2 col-8">

                <?php
                if ( have_posts() ) {
                    // Load posts loop.
                    while (have_posts()) {
                        the_post(); ?>

                            <article class="article">
                                <p class="thumbnail"><?php the_post_thumbnail('medium'); ?></p>
                                <h2>
                                    <?php
                                    the_title();
                                    ?>
                                </h2>
                                <p ><?php the_content(); ?></p>

                                <img src="<?php the_field('image_titre_recyclage') ?>" alt="" class="img-fluid">

                                <a href="">
                                    <p><i><?php the_field('texte_recyclage'); ?></i></p>
                                </a>
                            </article>

                        <?php
                    }
                }
                ?>
                <!-- Google maps -->
                <div style="width: 100%"><iframe frameborder="0" scrolling="no" width="100%" height="200" src="https://maps.google.com/maps?q=<?php the_field('latitude') ?>,<?php the_field('longitude') ?>&hl=es;z=14&amp;output=embed"></iframe></div>
            </div>
            <?php wp_reset_query(); ?>
        </div>
        <div class="row">




            
        </div>
    </div>
</main>

<?php
get_footer();
