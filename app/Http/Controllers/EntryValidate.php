<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryValidate extends Controller
{
    //
    function entryValidate(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:20'],
            'furigana' => ['required', 'string', 'max:40'],
            'email' => ['required', 'string'],
            // 行頭0で始まる
            // 数字[0-9]4桁または数字([0-9]2個が3桁または数字[0-9]3個が2桁または数字[0-9]4個が1桁または0と数字4桁
            // 行末数字4桁
            'tel' => ['required', 'regex:/^0(\d-?\d{4}|\d{2}-?\d{3}|\d{3}-?\d{2}|\d{4}-?\d|\d0-?\d{4})-?\d{4}$/'],
            'pdf' => ['required'],
            'url1' => ['nullable'],
            'url2' => ['nullable'],
            'url3' => ['nullable'],
            'message' => ['nullable', 'string', 'max:3000'],
        ]);

        // これ以降の行は入力エラーがなかった場合のみ実行

        // エントリー確認画面
        return view('entry/entry_check', [
            'name' => $request->name,
            'furigana' => $request->furigana,
            'email' => $request->email,
            'tel' => $request->tel,
            'pdf' => $request->pdf,
            'url1' => $request->url1,
            'url2' => $request->url2,
            'url3' => $request->url3,
            'message' => $request->message
        ]);
    }
}
