<?php

Kirby::plugin('kcaden20/titlecase', [
    'fieldMethods' => [
        'titlecase' => function ($field) {
                return ucfirst(str_replace("-", " ", $field->value)) ;
        }
    ]
]);