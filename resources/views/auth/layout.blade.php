<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Чтобы обеспечить надлежащий рендеринг и изменение размера касанием -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!-- ограничить возможности приближения на мобильных устройствах -->
    <title>Ghostinger @yield('title')</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  </head>
    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <a class="navbar-brand" href="{{ url('/') }}">Ghostinger</a>
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
                            @yield('act')
                        </h2>
                     </div>
                     <div class="row">
                         <div class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="container-fluid">
                                <div class="row">
                                    <div class="jumbotron">
                                      <div class="container-fluid">
                                       
                                        <div class="row">
                                            @yield('content')
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

