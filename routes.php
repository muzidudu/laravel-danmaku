<?php

Route::resource('/danmakuv3', 'MoePlayer\Danmaku\Controllers\DanmakuController')
    ->middleware([
        'throttle',
        'web'
    ]);
