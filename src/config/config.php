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
        'icon' => '?w=80&h=80&fit=crop&q=75',
        'thumbs' => '?w=200&h=200&fit=crop&q=75',
        'small' => '?w=460&h=360&fit=crop&q=75',
        'medium' => '?w=600&h=600&fit=crop&q=75',
        'large' => '?w=1400&h=800&fit=crop&q=75',
        'cover' => '?w=1800&h=1200&fit=crop&q=75',
    ]

];
