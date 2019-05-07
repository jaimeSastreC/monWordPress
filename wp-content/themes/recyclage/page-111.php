<?php
get_header();
?>
    <main>
        <section>
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h2>
                            <?php
                            the_title();
                            ?>
                        </h2>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-6">
                        <?php
                        $query = new WP_Query([
                            'post_type' =>'post',
                            'posts_per_page' => 2,
                        ]);

                        if ( have_posts() ) {
                            // Load posts loop.
                            while (have_posts()) {
                                the_post(); ?>
                                <div class="col-6">
                                    <article class="article">
                                        <a href="">
                                            <h2><?php the_title(); ?></h2>

                                            <!--the_post_thumbnail('thumbnail');-->
                                            <p ><?php the_content(); ?></p>
                                            <p class="thumbnail"><?php the_post_thumbnail('medium'); ?></p>
                                            <p><?php the_field('texte_recyclage'); ?></p>
                                        </a>
                                    </article>
                                </div>
                                <?php
                            }
                        }
                        ?>
                        <!--//bien séparer boucles avec cette fonction-->
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
