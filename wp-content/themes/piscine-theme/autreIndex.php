<?php
get_header();
    // attention deuxième version
    $query = new WP_Query([
        'post_type' =>'post',
        'posts_per_page' => 3,
    ]);

    if ($query->have_posts()) {

        while ($query->have_posts()) {
            $query->the_post();
            echo get_the_archive_title();
        }
    }

    // première version
if ( have_posts() ) {

    // Load posts loop.
    while (have_posts()) {
        the_post(); ?>
        <div class="col-6">
            <article>
                <h1><?php the_title(); ?></h1>
                <?php the_post_thumbnail(); ?>
                <!--<img src= ...-->
                <div>
                    <?php the_content(); ?>
                </div>

            </article>
        </div>

        <?php
    }
}
