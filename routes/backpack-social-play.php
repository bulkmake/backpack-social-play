<?php

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'Bulkmake\BackpackSocialPlay\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('social-post', 'SocialPostCrudController');
});