<?php

Route::namespace('Zhiyi\\Component\\ZhiyiPlus\\PlusComponentWeb\\Controllers')
    ->prefix('/web')
    ->middleware('web')
    ->group(function () {
        Route::get('/', 'WebController@index')
            ->name('H5');
    });