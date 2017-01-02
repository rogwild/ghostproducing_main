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
                          <li role="presentation" class="active"><a href="{{ url('/profile/main/{id}') }}">главная</a></li>
                          <li role="presentation"><a href="{{ url('/profile/purchases/{id}') }}">покупки</a></li>
                          <li role="presentation"><a href="profile_orders.html">заказы<span class="badge">2</span></a></li>
                          <li role="presentation"><a href="profile_messages.html">сообщения</a></li>
                          <li role="presentation"><a href="{{ url('/profile/add_track/{id}') }}">добавить</a></li>
                          <li role="presentation"><a href="profile_settings.html">настройки</a></li>
                        </ul>
                    </div>
                 </div>
             </div>
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="container-fluid">
                    <div class="row">
                       <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8 p-0">
                        <h2 class="black">
                            мои работы
                        </h2>
                       </div>
                       <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4 p-0">
                        
                           <h2 class="black pull-right">
                            <a href="#">все</a>
                           </h2>
                        
                       </div>
                     </div>
                    <div class="row">
                        <div class="jumbotron p-0">
                          <div class="container-fluid p-0">
                            <div class="table-responsive m-0">
                              <table class="table table-hover m-0">
                               <thead>
                                  <tr>
                                      <th></th>
                                      <th class="hidden-xs"></th>
                                      <th>
                                          название
                                      </th>
                                      <th>
                                          продюсер
                                      </th>
                                      <th>
                                          жанр
                                      </th>
                                      <th class="dropdown">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">секвенсор<b class="caret"></b></a>
                                          <ul class="dropdown-menu">
                                           <li class="checkbox">
                                              <a href="#">
                                                <label>
                                                  <input type="checkbox" name="programCheck" id="abletonlive" value="abletonlive">
                                                  Ableton
                                                </label>
                                              </a>
                                            </li>
                                            <li class="checkbox">
                                              <a href="#">
                                                <label>
                                                  <input type="checkbox" name="programCheck" id="fruityloops" value="fruityloops">
                                                  Fruity Loops
                                                </label>
                                              </a>
                                            </li>
                                            <li class="checkbox">
                                              <a href="#">
                                                <label>
                                                  <input type="checkbox" name="programCheck" id="logicpro" value="logicpro">
                                                  logic pro
                                                </label>
                                              </a>
                                            </li>
                                          </ul>
                                      </th>
                                      <th>
                                          <a href="" data-toggle="tooltip" data-placement="top" title="Сортировать">тональность</a>
                                          <span  class="glyphicon glyphicon-chevron-up ml-3"></span>
                                      </th>
                                      <th>
                                          <a href="" data-toggle="tooltip" data-placement="top" title="Сортировать">скорость</a>
                                          <span  class="glyphicon glyphicon-chevron-down ml-3"></span>
                                      </th>
                                      <th>
                                          <a href="" data-toggle="tooltip" data-placement="top" title="Сортировать">дата</a>
                                          <span  class="glyphicon glyphicon-chevron-up ml-3"></span>
                                      </th>
                                      <th>
                                          <a href="" data-toggle="tooltip" data-placement="top" title="Сортировать">цена</a>
                                          <span  class="glyphicon glyphicon-chevron-down ml-3"></span>
                                      </th>
                                      <th></th>
                                      <th></th>
                                    </tr>
                                  </thead>
                                <tbody class="middle">
                                   @foreach ($tracks as $track)
                                    <tr>
                                        <td>
                                            <h5 class="text-center">
                                                <a href="javascript:void(0)" onclick="aud_play_pause(this)">
                                                    <i class="glyphicon glyphicon-play-circle control icon-play"></i>
                                                    <audio class="xnine-player" src="{{ route('audio.track',['trackname' => $track->name.'.mp3']) }}" preload="auto"></audio>
                                                </a>
                                            </h5>
                                        </td>
                                        <td class="p-0 hidden-xs">
                                            <img src="{{ route('cover.image',['coverfilename' => $track->name.'.jpg']) }}" alt="..." class="img-responsive img-74">
                                        </td>
                                      
                                        <td >
                                            <h4 class="m-0">{{ $track->name }}</h4>
                                            
                                        </td>
                                      <td>
                                        <h5>
                                            <a href="/producers/{{$track->user_id}}">
                                                {{ $track->user->name }}
                                            </a>
                                        </h5>
                                      </td>
                                      <td>
                                          <h5 class="m-0 dark"><a href="/{{ $track->genre }}">{{ $track->genre }}</a></h5>
                                      </td>
                                      <td>
                                         <h5 class="m-0 dark"><a href="/{{ $track->sequencer }}">{{ $track->sequencer }}</a></h5>
                                      </td>
                                      <td class="tx-tr-n">
                                          <h5>{{ $track->key }}</h5>
                                     </td>
                                     <td class="tx-tr-n">
                                          <h5>{{ $track->bpm }} BPM</h5>
                                     </td>
                                      <td class="hidden-xs">
                                          <h5>{{ $track->created_at->format('Y-m-d') }}</h5>
                                      </td>
                                      <td >
                                          <h5 class="m-0">{{ $track->price }}</h5>
                                      </td>
                                      <td >
                                          <h5 class="m-0">
                                             <a href="/profile/{{$track->id}}/edit">
                                                 <span class="glyphicon glyphicon-pencil cart"></span>
                                             </a>
                                          </h5>
                                      </td>
                                      <td >
                                          <h5 class="m-0">
                                             <a href="/profile/{{$track->id}}/delete">
                                                 <span class="glyphicon glyphicon-remove cart"></span>
                                             </a>
                                          </h5>
                                      </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                    </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="container-fluid">
        <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8 p-0">
                    <h2 class="black">
                        понравившиеся продюсеры
                    </h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4 p-0">
                   <h2 class="black pull-right">
                    <a href="#">все</a>
                   </h2>
                 </div>
            </div>
        </div>
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                 <div class="jumbotron p-0 mt-15 mb-15">
                   <span class="label like">
                            <a href="#" class="active" data-toggle="tooltip" data-placement="top" title="Мне нравится"><span class="glyphicon glyphicon-fire"></span></a>
                   </span>
                    <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                         <img class="img-responsive  img-100per" src="img/COCK.jpg" alt="...">
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                             <div class="container-fluid">
                               <div class="row p-10">
                                <a href="producer.html">
                                    <h2>
                                        cockmachine
                                    </h2>
                                </a>
                                <ul class="list-unstyled">
                                  <li>
                                      <h5>techno/trance</h5>
                                  </li>
                                  <li>
                                      <h5>треки/миксы/мэшапы</h5>
                                  </li>
                                  <li>
                                      <h5>средняя цена: 250000р</h5>
                                  </li>
                                  <li>
                                      <h5>рейтинг: 4,5/5</h5>
                                  </li>
                                  <li>
                                      <h5>средняя продолжительность написания трека: 22 дня</h5>
                                  </li>
                                  <li>
                                      <h5>продано треков: 14</h5>
                                  </li>
                                </ul>
                                </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                 <div class="jumbotron p-0 mt-15 mb-15">
                   <span class="label like">
                            <a href="#" class="active" data-toggle="tooltip" data-placement="top" title="Мне нравится"><span class="glyphicon glyphicon-fire"></span></a>
                   </span>
                    <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                         <img class="img-responsive img-100per" src="img/14337834.jpg" alt="...">
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                             <div class="container-fluid">
                               <div class="row p-10">
                                <a href="producer.html">
                                    <h2 class="m-0">
                                        tiesto
                                    </h2>
                                </a>
                                <ul class="list-unstyled">
                                  <li>
                                      <h5>trap/twerk/dubstep</h5>
                                  </li>
                                  <li>
                                      <h5>треки/миксы/мэшапы</h5>
                                  </li>
                                  <li>
                                      <h5>средняя цена: 10000р</h5>
                                  </li>
                                  <li>
                                      <h5>рейтинг: 4,5/5</h5>
                                  </li>
                                  <li>
                                      <h5>средняя продолжительность написания трека: 22 дня</h5>
                                  </li>
                                  <li>
                                      <h5>продано треков: 14</h5>
                                  </li>
                                </ul>
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