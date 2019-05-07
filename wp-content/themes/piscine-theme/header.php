<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title> Ma Première Page </title>
        <!--affiche en mode dev des infos en tête de page-->
        <?php wp_head();?>
    </head>
    <body>

    <div class="container-fluid ">

        <div class="row  d-flex align-items-center">
            <header class="header">
                <nav class="navbar fixed-top navbar-dark bg-dark">
                        <div>
                            <a class="navbar-brand" id="home">Mon Site menu</a>
                        </div>
                        <div>
                            <?php
                            wp_nav_menu([
                                    'theme_location' =>'header',
                                    /*'theme_location' =>'mon-menu',*/
                                ]
                            );
                            ?>
                        </div>
                </nav>
            </header>
        </div>
        <div class="row  d-flex align-items-center">
            <div class="col-12">
                <?php if (has_nav_menu('secondaire') ): ?>

                    <nav id="secondaire" >
                        <?php wp_nav_menu([
                                'theme_location' => 'secondaire',
                            ]
                        );
                        ?>
                    </nav>
                <?php endif;?>
            </div>
        </div>





