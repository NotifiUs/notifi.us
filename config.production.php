<?php

return [
    'production' => true,
    'baseUrl' => 'https://notifi.us',
    'collections' => [],
    'ga' => 'UA-39918528-2',
    'year' => date('Y'),
    'include_nav' => [
        'index',
        'services',
        'contact',
    ],
    'services' => [
        [
            'image' => '/assets/images/coding.jpg',
            'title' => 'Web Development',
            'description' => 'From custom portals and bill pay integrations to REST APIs for customer systems.'
        ],
        [
            'image' => '/assets/images/telecom.jpg',
            'title' => 'Telecom',
            'description' => 'We have experience working with TDM/PRI signalling, SIP/RTP, and popular PBX systems.'
        ],
        [
            'image' => '/assets/images/docs.jpg',
            'title' => 'Documentation',
            'description' => 'Beautiful, searchable documentation available online all the time.'
        ],
        [
            'image' => '/assets/images/apps.jpg',
            'title' => 'Applications',
            'description' => 'Our experience supporting many different applications allows us to get up to speed quickly.'
        ],
        [
            'image' => '/assets/images/cloud.jpg',
            'title' => 'Cloud Migration',
            'description' => 'Our strategic planning process and inventory documentation makes cloud migrations a breeze.'
        ],
        [
            'image' => '/assets/images/scripting.jpg',
            'title' => 'Call Scripting',
            'description' => 'Whether it’s operator or IVR scripting, we can help implement user and voice interfaces.'
        ],
        [
            'image' => '/assets/images/dr.jpg',
            'title' => 'Disaster Recovery',
            'description' => 'Gain confidence by implementing a robust BC/DR plan that you can actually test. '
        ],
        [
            'image' => '/assets/images/games.jpg',
            'title' => 'Gamification ',
            'description' => 'Incentive your employees and clients by adding badges and other awards for interacting with you. '
        ],
    ],
];
