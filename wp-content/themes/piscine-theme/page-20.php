<?php
get_header();
?>
    <main>
        <section>
            <h2>
                <?php
                    the_title();
                ?>
            </h2>
            <?php
            $query = new WP_Query([
                'post_type' =>'post',
                'posts_per_page' => 3,
            ]);

            if ($query->have_posts()) {

                while ($query->have_posts()) {
                    $query->the_post(); ?>
                    <article>
                        <!--lien link !!!-->
                        <a href="<?php the_permalink()?>">
                            <?php echo get_the_title(); ?>
                        </a>
                    </article>
                    <?php
                            the_post_thumbnail('medium');
                            the_content();
                }
            }
            ?>
            <!--//bien séparer boucles avec cette fonction-->
            <?php wp_reset_query(); ?>

        </section>
    </main>

<?php
get_footer();
