
<?php
get_header();
?>
<!-- page projets -->
<main>
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class=" col">
                <?php
                $query = new WP_Query([
                    'post_type' =>'projet',
                    'posts_per_page' => 3,
                ]);

                if ($query->have_posts() ) {
                    // Load posts loop.
                    while ($query->have_posts()) {
                        $query->the_post(); ?>
                            <article class="article">
                                <a href="<?php the_permalink()?>"><h2><?php the_title(); ?></h2></a>

                                    <p ><?php the_content(); ?></p>
                                    <p class="thumbnail"><?php the_post_thumbnail('medium'); ?></p>
                            </article>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
