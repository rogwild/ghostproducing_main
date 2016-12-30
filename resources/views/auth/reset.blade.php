@extends('auth.layout')
@section('title', 'Восстановление пароля')
@section('act', 'Восстановить пароль')
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

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="token" value="{{ $token }}">

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
                <div class="form-group">
                        <label for="ConfirmInputPassword">Повторите пароль</label>
                        <input type="password" class="form-control" name="password_confirmation" id="ConfirmInputPassword" placeholder="PASSWORD">
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-default btn-md pull-right">Восстановить пароль</button>
            </div>
    </form>
@endsection                                        