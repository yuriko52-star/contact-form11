@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="wrapper">
        
        <form action="/contacts/confirm" method="post">
        @csrf
            <h2 class="section-title">お問い合わせ</h2>
            <div class="grid">
            <div class="title">
                <label for="name" class="label">お名前</label>
                <span>必須</span>
            </div>
            <input type="text" name="name" class="input" placeholder="テスト太郎"   value="{{ old('name') }}">
                <div class="error">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>

            <div class="title">
                <label for="email" class="label">メールアドレス</label>
                <span>必須</span>
            </div>
            <input type="mail" id="email" name="email" class="input" placeholder="test1234.com" value="{{ old('email') }}">
                <div class="error">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>

            <div class="title">
                <label for="tel" class="label">電話番号</label>
                <span>必須</span>
            </div>
            <input type="tel" id="tel" name="tel" class="input" placeholder="0123456789" value="{{ old('tel') }}">
                <div class="error">
                    @error('tel')
                    {{$message}}
                    @enderror
                </div>

            <div class="title">
                <label for="content" class="label">お問い合わせ内容</label>
            </div>
            <textarea name="content" id="content" placeholder="資料を頂きたいです"></textarea>

            
        
                <div class="btn">
                    <button type="submit">送信</button>
                </div>
            </div>
        </form>
    </div>
@endsection