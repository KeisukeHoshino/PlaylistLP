<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EntryAdminMail;
use App\Mail\EntryMail;
use Illuminate\Support\Facades\Storage;


class SendMail extends Controller
{
    public function sendEmail(Request $request){
        $arr = [
            'name' => $request->name,
            'furigana' => $request->furigana,
            'email' => $request->email,
            'tel' => $request->tel,
            'pdf' => $request->pdf,
            'url1' => $request->url1,
            'url2' => $request->url2,
            'url3' => $request->url3,
            'message' => $request->message,
        ];

        // Playlistに送信
        Mail::to('pl.info@playlist.co.jp')->send(new EntryAdminMail($arr));
        // 送信者用に送信
        Mail::to($request['email'])->send(new EntryMail($arr));
        // エントリー完了画面
        return view('entry/entry_complete');
    }
}
