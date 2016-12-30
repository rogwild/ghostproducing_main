@extends('auth.layout')
@section('title', 'Восстановление пароля')
@section('act', 'Восстановить пароль')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
                {{ session('status') }}
        </div>
    @endif

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

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label for="InputEmail">Электронная почта</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="InputEmail" placeholder="EMAIL">
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-default btn-md pull-right">Отправить ссылку для восстановления пароля</button>
            </div>
    </form>
@endsection                                        