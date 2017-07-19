<?php

$data = \Timber\Timber::get_context();
$data['post'] = new \Timber\Post();
$query = new WP_Query(array(
  'numberposts' => 5,
  'orderby' => 'date',
  'post__not_in' => array($data['post']->id)
));
$data['posts'] = new \Timber\PostQuery($query);
$data['pll__'] = new \Timber\FunctionWrapper('pll__');
$data['pll_the_languages'] = pll_the_languages(array(
  'raw'=>1,
  'hide_if_empty'=>0,
  'force_home'=>1
));
\Timber\Timber::render('single.twig', $data);
