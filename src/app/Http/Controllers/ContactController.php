<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index() 
    {
        return view('index');
    }

    public function confirm (ContactRequest $request) 
    {
        // formタグから送られてきた値を取り出す
        // 送られてきた値を取り出すためには、Request クラスを利用
        // 入力内容確認ページに入力内容を表示するためには、「フォーム入力画面」で入力された内容を保持する処理が必要
        $contact = $request->only(['name','email',
            'tel','content'
        ]);
         
        // return $contact;
        // 送信ボタンの処理は、値を受け取るだけでは終わりません。入力内容確認ページを呼び出し、そのページで入力情報を表示する必要があります。controller では、view ファイルの呼び出しとそのファイルに渡す値の指定を行います。
        // return view('confirm');
        // view ファイルに渡す値は、view メソッドの第 2 引数に連想配列で指定。view ファイル側で連想配列のキーを指定することで、そのキーに対応した値を表示することができます。
        // 入力情報が入った変数$contactを contact というキーで渡す
        // return view('confirm', ['contact' => $contact]);
        return view('confirm',compact('contact'));
    }
    // error　index.blade.phpのフォームにname値が設定されていなかった

    public function store(ContactRequest $request) 
    {
        $contact = $request->only('name','email','tel','content');
        // 保存処理では Contact モデルを利用
        Contact::create($contact);
        // create で$contact の変数に格納されたデータを作成することができます。
        return view('thanks');
    }
}
