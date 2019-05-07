<?php
get_header();
?>

<main>
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
            <h2><u>
                <?php
                the_title();
                ?>
                </u>
            </h2>
            </div>
            <div class=" col-4">
                <?php
                if ( have_posts() ) {
                    // Load posts loop.
                    while (have_posts()) {
                        the_post(); ?>

                        <article class="article">
                            <p class="thumbnail"><?php the_post_thumbnail('medium'); ?></p>

                        </article>

                        <?php
                    }
                }
                ?>
            </div>
            <?php wp_reset_query(); ?>
            <div class=" col-4">
                <?php
                if ( have_posts() ) {
                    // Load posts loop.
                    while (have_posts()) {
                        the_post(); ?>

                        <article class="article">
                            <p ><?php the_content(); ?></p>
                        </article>

                        <?php
                    }
                }
                ?>
            </div>
            <?php wp_reset_query(); ?>
        </div>
        <div class="row">
            <div class="offset-1 col-12">
                <h2>Technologies :</h2>
                <p><?php the_field('technos'); ?></p>

            </div>
        </div>
        <div class="row text-center mb-5">
            <div class="col">
                <a href="https://www.youtube.com"><button>Lien vers Site</button></a>
            </div>
        </div>
        <div class="row">
<!--3 images à ajouter -->
        </div>

</main>

<?php
get_footer();
