<?php

$data = \Timber\Timber::get_context();
$data['post'] = new \Timber\Post();
$data['pll__'] = new \Timber\FunctionWrapper('pll__');
$data['pll_the_languages'] = pll_the_languages(array(
  'raw'=>1,
  'hide_if_empty'=>0,
  'force_home'=>1
));
\Timber\Timber::render('page.twig', $data);
