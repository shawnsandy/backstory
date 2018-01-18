<?php

return [
    'form_class' => ['input'],
    'story_types' => [
    'post' => 'Post',
    'article' => 'Article',
    'podcast' => 'Podcast'
    ],
    'stories_per_page' => 5,
    'story_status' => [
    'DRAFT' => 'DRAFT',
    'PUBLISHED' => 'PUBLISHED',
    'REVIEW' => 'PENDING REVIEW',
    'ARCHIVED' => 'ARCHIVED'
    ],
    'stories' => [
    'create_url' => '/backstory/create/',
    'update_url' => '/backstory/',
    ],
    'categories' => [],
    'img' => [
        'icon' => '?w=80&h=80&fit=crop&q=75',
        'thumbs' => '?w=200&h=200&fit=crop-top&q=75',
        'cover' => '?w=1400&h=600&fit=crop-top&q=75',
        'small' => '?w=460&h=360&fit=crop&q=75',
        'medium' => '?w=600&h=600&fit=crop&q=75',
        'large' => '?w=1200&h=600&fit=crop&q=75',
        'full' => '?w=1800&h=1200&fit=crop&q=75',
    ]

];
