<?php

require_once __DIR__ . '/../config/twig.php';

$products = ['guitare', 'basse', 'banjo', 'cithare', 'lyre', 'harpe'];

echo $twig->render('products.html.twig', ['products' => $products]);