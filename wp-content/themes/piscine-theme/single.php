<!--hello post
ressource unique-->
<?php
get_header();
?>

<!--essentiel template pour affichage articles, récupère l'ensemble des articles avec lien. WP ira chercher ici
en premier l'info avant d'aller sur INDEX SI IL NE TROUVE PAS-->
<main>
    <?php
    if ( have_posts() ) {
        // Load posts loop.
        while (have_posts()) {
            the_post(); ?>
            <div class="col-6 pl-3">
                <article class="article">
                    <a href="">
                        <h2><?php the_title(); ?></h2>

                        <!--the_post_thumbnail('thumbnail');-->
                        <p ><?php the_content(); ?></p>
                        <p class="thumpnail"><?php the_post_thumbnail('medium'); ?></p>
                        <p><?php the_field('sous-titre'); ?></p>
                    </a>
                </article>
            </div>
            <?php
        }
    }
    ?>
</main>

<?php
get_footer();
