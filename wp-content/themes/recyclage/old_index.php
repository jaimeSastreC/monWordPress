<?php
get_header();

// attention deuxième version requete query
//category_name permet de trier par filtre catégorie!
$category_name = 'recyclage';
$query = new WP_Query([
    'post_type' =>'post',
    'posts_per_page' => 6,
    'category_name' =>'recyclage',
]);

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
                        <?php

                        if ( $query->have_posts() ) {
                            // Load posts loop.
                            while ($query->have_posts()) {
                                $query->the_post(); ?>
                                <div class="col-6 pl-3">
                                    <article class="article">
                                        <h2><a href="<?php the_permalink()?>">
                                                <?php echo get_the_title(); ?>
                                            </a></h2>

                                        <?php /*the_title();*/ ?>

                                        <!--the_post_thumbnail('thumbnail');-->
                                        <p class="thumbnail"><?php the_post_thumbnail('medium'); ?></p>
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
        <div class="col-4 p-5 aside">
            <aside class="text-center">
                <h2>Planète verte</h2>
                <!--fonction Wordpress pour trouver l'image, chemin-->
                <img src="<?php echo get_template_directory_uri() . '/img/index_droite.jpg'; ?>" class="img-fluid"/>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, harum, neque! Harum nesciunt quaerat totam. Ab adipisci, aliquid asperiores, ex exercitationem fugit nemo odio pariatur, quaerat quam similique unde velit.</p>
            </aside>
        </div>
    </div>

<?php
get_footer();