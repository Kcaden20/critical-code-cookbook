<?php

$originalTag = Kirby\Text\KirbyTag::$types['image'];
Kirby::plugin('your/plugin', [
    'tags' => [
        'image' => [
            'attr' => array_merge(
                $originalTag['attr'],
                [
                    'data-lightbox',
                ]),

            'html' => function($tag) use ($originalTag)  {

                $file = $tag->file($tag->value());
                $result = $originalTag['html']($tag);

                if (! $file === true) {
                    return $result;
                }

                $pattern = '/<img.*?>/i';

                // build a new image tag with the srcset
                $image = Html::a($tag->src(), [
                    Html::img($tag->src, [
                    'alt'    => $tag->alt ?? ' '
                ]) ], [
                    'data-lightbox' => $tag->src()
                ]);

                // replace the old image tag
                $result = preg_replace($pattern, $image , $result);

                return $result;
            }
        ],

        'callout' => [
            'attr' => [
                'class'
            ],
            'html' => function ($tag) {
                return Html::p($tag->value, [
                    'class' => 'callout'   
                ]);
            }
        ]
    ]
]);