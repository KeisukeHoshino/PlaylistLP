<?php

use Illuminate\Support\Facades\Route;

// トップページ
Route::get('/', function () {
    return view('index');
});

// メンバーページ
Route::get('/member', function () {
    return view('member');
});

// 募集要項ページ
Route::get('/requirements', function () {
    return view('requirements');
});


// エントリー画面
Route::get('/entry', function () {
    return view('entry/entry');
});
// エントリー確認画面
Route::get('/entry_check', function () {
    return view('entry/entry_check');
});
// エントリー完了画面
Route::get('/entry_complete', function () {
    return view('entry/entry_complete');
});
