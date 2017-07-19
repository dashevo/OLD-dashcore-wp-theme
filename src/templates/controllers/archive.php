<?php

$data = \Timber\Timber::get_context();
$data['title'] = single_cat_title('', false);
$data['posts'] = \Timber\Timber::get_posts();
$data['pll__'] = new \Timber\FunctionWrapper('pll__');
$data['pll_the_languages'] = pll_the_languages(array(
  'raw'=>1,
  'hide_if_empty'=>0,
  'force_home'=>1
));
\Timber\Timber::render('archive.twig', $data);
