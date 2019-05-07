<?php
// obligatoire pour récuperer variables globales
$context = \Timber\Timber::get_context();

$context['test'] = 'bonjour jaime';


//appelle la vue twig index.twig et lui passe la variable $context qui contient notamment les articiles ici.
\Timber\Timber::render('index.twig', $context);