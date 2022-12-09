@extends('layout.base')

@section("title","Đăng nhập")

@section('content')
    <div class="my-login">
        <form role="form" action="/login" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <h3>Đăng nhập</h3>
            <span>Tên đăng nhập</span>
            <input type="email" name="" class="box" placeholder="Nhập email của bạn">
            <span>Mật khẩu</span>
            <input type="password" name="" class="box" placeholder="Nhập mật khẩu">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">Ghi nhớ tài khoản</label>
            </div>
            <button type="submit" class="btn">Đăng nhập</button>
            <p>Quên mật khẩu ? <a href="#">Ấn tại đây</a></p>
            <p>Bạn chưa có tài khoản ? <a href="{{url('/signup')}}">Tạo tài khoản</a></p>
        </form>
    </div>
@endsection
