<?php
// oblogatoire pour récuperer variables globales
$context = \Timber\Timber::get_context();

/*$context['test'] = 'bonjour jaime';

\Timber\Timber::render('index.twig', $context);*/


// tableau d'arguments pour modifier la requête en base de de donnée, et venir récuperer uniquement les trois derniers articles
$args_posts = [
    'post_type' => 'post',
    'posts_per_page' => 3,
];

// récupère les articles en fonction du tableau d'arguments $args_posts
$context['posts'] = \Timber\Timber::get_posts($args_posts);

//appelle la vue twig index.twig et lui passe la variable $context qui contient notamment les articiles ici.
\Timber\Timber::render('index.twig', $context);