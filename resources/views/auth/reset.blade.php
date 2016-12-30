<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Чтобы обеспечить надлежащий рендеринг и изменение размера касанием -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!-- ограничить возможности приближения на мобильных устройствах -->
    <title>Ghostinger | Вход</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  </head>
    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <a class="navbar-brand" href="main.html">Ghostinger</a>
            </div>
          </div><!-- /.container-fluid -->
        </nav>
    </header>
    
  <body class="center-block mt-20">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="container-fluid">
                    <div class="row">
                        <h2 class="black text-center">
                            Восстановить пароль
                        </h2>
                     </div>
                     <div class="row">
                         <div class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="container-fluid">
                                <div class="row">
                                    <div class="jumbotron">
                                      <div class="container-fluid">
                                       
                                        <div class="row">
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
                                        </div>
                                      </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
      
        
    <script src="../jquery/dist/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>