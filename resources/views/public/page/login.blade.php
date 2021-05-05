@extends('public.layouts.master')
@section('content')
<div id="main">
<h2 id="home-title">令和 3 年度<br>文化活動事業費助成対象事業<br>申込みフォーム</h2>

<h5 id="home-description">登録をしてからご利用をお願いいたします。<br>ID とパスワードを入力し、ログインしてください。</h5>

<h4 style="text-align: center;"><a style="text-decoration:none; color: black;" href="{{ url('registration')}}">新規登録はこちら</a></h4>

@if (\Session::has('danger'))
        <div style="text-align: center; color:red; font-weight: bold;">
            {{ \Session::get('danger') }}  
        </div>
        
@endif

<form action="{{ asset ('/login')}}" method="post">
@csrf
    <div class="form-login" >
       <div class="login-form">
            <div class="label">
                <label class="label-id" >ID</label><br/><br/>
                <label>パスワード</label>
            </div>
            <div class="input-box">
                <div> 
                    <input class="input-id" id="id" name="id" type="text">
                </div><br/>
                <div>
                    <input class="input-password"  id="pass" name="pass" type="password">
                </div>
            </div>
        </div>
    </div>
    <div class="btn-login-box" >
            <button class="btn-login" type="submit">
                ログイン 
            </button>
            <button class="btn-cancel"  type="cancel">
                キャンセル 
            </button>
    </div>

</form>

<h4 style="text-align: center;"><a style="text-decoration:none; color: black;" href="">ID・パスワードを忘れた方はこちら</a></h4>

</div>

<p style="text-align: center; font-size: 12px;">Copyright © 公益財団法人　いばらき文化振興財団 All Rights Reserved.</p>
@endsection