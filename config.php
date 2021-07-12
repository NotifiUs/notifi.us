<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000',
    'collections' => [],
    'year' => date('Y'),
    'privacy_policy_updated_at' => date('r'),
    'include_nav' => [
        'index',
        'services',
        'about',
        'contact',

    ],
    'services' => [
        [
            'image' => '/assets/images/coding.jpg',
            'title' => 'Web Development',
            'description' => 'Custom portals for internal and client-facing workflows'
        ],
        [
            'image' => '/assets/images/telecom.jpg',
            'title' => 'Telecom',
            'description' => 'TDM/PRI signalling, SIP/RTP, Asterisk, and Amtelco Genesis'
        ],
        [
            'image' => '/assets/images/docs.jpg',
            'title' => 'Documentation',
            'description' => 'Beautiful, searchable documentation available online all the time'
        ],
        [
            'image' => '/assets/images/apps.jpg',
            'title' => 'Applications',
            'description' => 'Familiar with the applications and services you use every day'
        ],
        [
            'image' => '/assets/images/cloud.jpg',
            'title' => 'Cloud Migration',
            'description' => 'Prepare, implement, and move your environment to AWS or Azure'
        ],
        [
            'image' => '/assets/images/scripting.jpg',
            'title' => 'Call Scripting',
            'description' => 'Expert-level Intelligent Series scripting experience'
        ],
        [
            'image' => '/assets/images/dr.jpg',
            'title' => 'Disaster Recovery',
            'description' => 'Implement a robust BC/DR plan that you can actually test'
        ],
        [
            'image' => '/assets/images/games.jpg',
            'title' => 'Gamification ',
            'description' => 'Motivate your employees and clients through everyday usage'
        ],
    ],
];
