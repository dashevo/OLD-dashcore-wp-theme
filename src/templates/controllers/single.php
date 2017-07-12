<?php

$data = \Timber\Timber::get_context();
$data['post'] = new \Timber\Post();
$query = new WP_Query(array(
  'numberposts' => 5,
  'orderby' => 'date',
  'post__not_in' => array($data['post']->id)
));
$data['posts'] = new \Timber\PostQuery($query);
\Timber\Timber::render('single.twig', $data);
