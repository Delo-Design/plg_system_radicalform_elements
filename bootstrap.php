<?php

use YOOtheme\Builder;
use YOOtheme\Path;

return [

    // Add builder elements
    'extend' => [

        Builder::class => function (Builder $builder) {
            $builder->addTypePath(Path::get(__DIR__ . '/elements/*/element.json'));
        }

    ]

];