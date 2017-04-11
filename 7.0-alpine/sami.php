<?php

use Sami\Sami;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->in(__DIR__.'/src');

return new Sami(
    $iterator,
    [
        'build_dir' => __DIR__.'/sami',
        'cache_dir' => '/tmp/sami_cache',
    ]
);
