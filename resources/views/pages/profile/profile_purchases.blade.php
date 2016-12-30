@section('title', 'Профиль')
    
@extends('pages.profile.layout')

@section('content')
    
  <body class="center-block mt-20">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="container-fluid">
                    <div class="row">
                        <ul class="nav nav-pills nav-justified uppercase">
                          <li role="presentation"><a href="{{ url('/profile/main/{id}') }}">главная</a></li>
                          <li role="presentation" class="active"><a href="{{ url('/profile/purchases/{id}') }}">покупки</a></li>
                          <li role="presentation"><a href="profile_orders.html">заказы<span class="badge">2</span></a></li>
                          <li role="presentation"><a href="profile_messages.html">сообщения</a></li>
                          <li role="presentation"><a href="profile_add_track.html">добавить трек</a></li>
                          <li role="presentation"><a href="profile_settings.html">настройки</a></li>
                        </ul>
                    </div>
                 </div>
             </div>
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="container-fluid">
                    <div class="row">
                        <h2 class="black">
                            купленные работы
                        </h2>
                     </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <div class="thumbnail p-0 pos-rel">
                             <a href="#"><img class="program-icon" src="img/FL_Studio_11_just_logo.png" alt="..." data-toggle="tooltip" data-placement="top" title="Fruity Loops"></a>
                              <img class="img-responsive img-100per" src="img/14508287.jpg" alt="...">
                              <a href="" data-toggle="tooltip" data-placement="top" title="Купить">
                                  <span class="label label-info price">15000 р</span>
                              </a>
                              <div class="caption pos-rel">
                                <h2 class="m-0">
                                    Bracker
                                </h2>
                                <h4>
                                    <a href="producer.html">Quintino</a>
                                </h4>
                                <h5>
                                    <a href="house.html">house</a>
                                    128bpm
                                </h5>
                                <h6>
                                    03.11.2016
                                </h6>
                              </div>
                            </div>
                        </div>
                    </div>
                 </div>
             </div>
         </div>
     </div>
      
        
    
  </body>
    

@endsection