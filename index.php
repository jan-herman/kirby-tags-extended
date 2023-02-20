<?php

use Kirby\Cms\App as Kirby;

Kirby::plugin('jan-herman/kirby-tags-extended', [
    'options' => [
        'tags' => []
    ],
    'tags' => option('jan-herman.kirby-tags-extended.tags')
]);
