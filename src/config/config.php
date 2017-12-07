<?php

return [
    'form_class' => ['input'],

    'story_types' => [
    'post' => 'Post',
    'article' => 'Article',
    'podcast' => 'Podcast'
    ],

    'story_status' => [
    'DRAFT' => 'DRAFT',
    'PUBLISHED' => 'PUBLISHED',
    'REVIEW' => 'PENDING REVIEW',
    'ARCHIVED' => 'ARCHIVED'
    ],

    'stories' => [
    'create_url' => '/create-story/',
    'update_url' => '/update-story/',
    ],
    'categories' => [],
    'img' => [
        'icon' => '?w=80&h=80&fit=crop',
        'thumbs' => '?w=200&h=200&fit=crop',
        'small' => '?w=460&h=360&fit=crop',
        'medium' => '?w=600&h=600&fit=crop',
        'large' => '?w=1200&h=800&fit=crop',
        'cover' => '?w=1600&h=1200&fit=crop',
    ]

];
