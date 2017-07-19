<?php

$data = \Timber\Timber::get_context();
$data['pll__'] = new \Timber\FunctionWrapper('pll__');
$data['pll_the_languages'] = pll_the_languages(array(
  'raw'=>1,
  'hide_if_empty'=>0,
  'force_home'=>1
));
\Timber\Timber::render('404.twig', $data);
