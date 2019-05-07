<?php
/*
Template Name: infos
*/
?>
<?php
get_header();
?>

    <main>
        <div class="container d-flex">
            <div class="row">

                <?php
                if ( have_posts() ) {
                    // Load posts loop.
                    while (have_posts()) {
                        the_post(); ?>
                        <div class="col-6 border-right">
                            <section>
                                <h2>
                                    <?php
                                    the_title();
                                    ?>
                                </h2>
                                <p>
                                    <?php
                                    the_content();
                                    ?>
                                </p>
                            </section>
                        </div>
                        <?php
                    }
                }

                wp_reset_query();
                ?>
            </div>
        </div>
    </main>
<?php
get_footer();
