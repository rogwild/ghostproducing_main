@extends('auth.layout')
@section('title', 'Войти')
@section('act', 'Вход')
@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                        @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                        @endforeach
                </ul>
        </div>
    @endif

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label for="InputEmail">Электронная почта</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="InputEmail" placeholder="EMAIL">
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label for="InputPassword">Пароль</label>
                    <input type="password" class="form-control" name="password" id="InputPassword" placeholder="PASSWORD">
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="checkbox">
                    <label>
                            <input type="checkbox" name="remember"> Запомнить меня
                    </label>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-default btn-md pull-right">Войти</button>

                <a class="btn btn-link" href="{{ url('/password/email') }}">Забыли пароль?</a>
                <a class="btn btn-link" href="{{ url('auth/register') }}">Регистрация</a>
            </div>
    </form>
@endsection                                        