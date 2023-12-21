<?php

declare(strict_types=1);

use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Docs Starter Template',
    'siteDescription' => 'Beautiful docs powered by Jigsaw',

    // Algolia DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),

    // navigation menu
    'navigation' => require_once(__DIR__ . '/navigation.php'),

    // helpers
    'isActive' => fn($page, $path) => Str::endsWith(trimPath($page->getPath()), trimPath($path)),
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(fn($child): bool => trimPath($page->getPath()) == trimPath($child));
        }
    },
    'url' => fn($page, $path) => Str::startsWith($path, 'http') ? $path : '/' . trimPath($path),
];
