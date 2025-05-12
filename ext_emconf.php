<?php
$EM_CONF['yoast_news'] = [
    'title' => 'Yoast SEO for TYPO3 - EXT:news',
    'description' => 'Integrate Yoast SEO for TYPO3 in EXT:news',
    'category' => 'fe',
    'state' => 'stable',
    'author' => 'Richard Haeser',
    'author_email' => 'richard@richardhaeser.com',
    'version' => '2.1.2',
    'constraints' => [
        'depends' => [
            'news' => '11.0.0-12.99.99',
            'typo3' => '12.4.0-13.4.99',
            'yoast_seo' => '10.0.0-11.99.99',
        ],
        'conflicts' => [],
        'suggests' => []
    ],
];
