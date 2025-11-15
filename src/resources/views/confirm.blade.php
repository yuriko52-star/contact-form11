@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
    <div class="wrapper">
        
        <!--、controller から渡された値を、「$キー名」という形で利用することができます。  confirm.blade.php を呼ぶ際に、キーを contact として入力情報を渡しています。-->
        <form action="/contacts" method="post">
            @csrf
            <h2 class="section-title">お問い合わせ内容確認</h2>
            <table>
                <tr>
                    <th>お名前</th>
                    <td><input type="text" class="name" name="name" value="{{$contact['name'] }}"readonly></td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td><input type="email" class="email" name="email" value="{{$contact['email'] }}"readonly></td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td><input type="tel" name="tel" value="{{$contact['tel'] }} "class="tel" readonly></td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td>
                        <input type="text" class="content" name="content" value="{{$contact['content'] }}"readonly>
                    </td>
                </tr>
            </table>
                <div class="btn">
                    <button type="submit">送信</button>
            </div>
        </form>
    </div>
@endsection