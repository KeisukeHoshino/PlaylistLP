<?php

use App\Http\Controllers\EntryValidate;
use App\Http\Controllers\SendMail;
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
Route::post('/entry_check', [EntryValidate::class, 'entryValidate']);
// エントリー完了画面
Route::post('entry_complete', [SendMail::class, 'sendEmail']);
