<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title> Recyclage</title>
    <!--affiche en mode dev des infos en tête de pag essentiel !!! -->
    <?php wp_head();?>
</head>
<body>

<div class="container-fluid ">

    <div class="row  d-flex align-items-center ">
        <header class="header">
            <nav class="navbar fixed-top navbar-dark bg-dark">
                <div >
                    <?php
                    wp_nav_menu([
                            'theme_location' =>'header_gauche',
                        ]
                    );
                    ?>
                </div>
                <div class="text-center float-left">
                    <h2>RECYCLE</h2>
                    <img src="<?php echo get_template_directory_uri() . '/img/recyclage.jpg'; ?>" class="img-logo"/>
                </div>
                <div >
                    <?php
                    wp_nav_menu([
                            'theme_location' =>'header_droite',
                        ]
                    );
                    ?>
                </div>
            </nav>
        </header>
    </div>





