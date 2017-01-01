    @section('title', 'Главная')
    
    @extends('layout')

    @section('content')
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                 <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8 p-0">
                            <h2 class="black">
                                самые новые треки
                            </h2>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4 p-0">
                           <h2 class="black pull-right">
                            <a href="tracks.html">все</a>
                           </h2>
                         </div>
                    </div>
                    <div class="row">
                        <div class="jumbotron p-0">
                          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                          </ol>

                          <!-- Wrapper for slides 
                          <div class="carousel-inner">
                            <div class="item active">
                              <img class="img-responsive" src="14598517.jpg" alt="...">
                              <div class="carousel-caption">
                                <h3>Mother</h3>
                                <p>Care</p>
                              </div>
                            </div>
                          </div>
                           <div class="item">
                              <img src="14669879.jpg" alt="Chania">
                              <div class="carousel-caption">
                                <h3>Chania</h3>
                                <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                              </div>
                            </div>-->
                            
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                  <img class="img-responsive" src="img/14598517.jpg" alt="Chania">
                                </div>

                                <div class="item">
                                  <img class="img-responsive" src="img/14669879.jpg" alt="Chania">
                                </div>

                                <div class="item">
                                  <img class="img-responsive" src="img/14687891.jpg" alt="Flower">
                                </div>
                            </div>

                          <!-- Controls -->
                          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                          </a>
                        </div>
                        </div>
                    </div>
                 </div>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                 <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8 p-0">
                            <h2 class="black">
                                топовые продюсеры
                            </h2>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4 p-0">
                           <h2 class="black pull-right">
                            <a href="producers.html">все</a>
                           </h2>
                         </div>
                    </div>
                    <div class="row">
                        <div class="jumbotron" style="padding:0;">
                          <div class="container-fluid" style="padding:0;">
                            <!--<div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4" style="padding:0;">
                                    <img src="14499424.jpg" alt="..." class="img-responsive">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4">
                                    <h3>belong</h3>
                                    <h5>Axwell&Ingrosso</h5>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-2 col-xs-2">
                                    <h4 style="margin-top:20%;">25000 р</h4>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                    <span class="glyphicon glyphicon-shopping-cart"></span>
                                </div>
                            </div>-->
                            <div class="table-responsive m-0">
                              <table class="table table-hover m-0">
                                <tbody>
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
                                                 <h5><a href="/producers/{{$track->user_id}}">
                                                         {{ $track->user->name }}
                                                     </a></h5>
                                             </td>
                                             <td class="hidden-xs">
                                                 <h5>{{ $track->created_at->format('Y-m-d') }}</h5>
                                             </td>
                                             <td >
                                                 <h5 class="m-0 dark"><a href="/{{ $track->genre }}">{{ $track->genre }}</a></h5>
                                             </td>
                                             <td >
                                                 <h5 class="m-0">{{ $track->price }}</h5>
                                             </td>
                                             <td >
                                                 <h5 class="m-0">
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Купить">
                                                        <span class="glyphicon glyphicon-shopping-cart cart"></span>
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
                        свежее
                    </h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4 p-0">
                   <h2 class="black pull-right">
                    <a href="tracks.html">все</a>
                   </h2>
                 </div>
            </div>
        </div>
         <div class="row">
            @foreach ($tracks as $track)
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <div class="thumbnail p-0 pos-rel">
                      <!-- <a href="#"><img class="program-icon" src="img/ableton_live__flat__icns_ios_7_for_osx_dock_by_gianmarcozappala-d6pl22g.png" alt="..." data-toggle="tooltip" data-placement="top" title="Ableton Live"></a> -->
                      <img class="img-responsive  img-100per" src="{{ route('cover.image',['coverfilename' => $track->name.'.jpg']) }}" alt="...">
                      <a href="" data-toggle="tooltip" data-placement="top" title="Купить">
                          <span class="label label-info price">{{ $track->price }}</span>
                      </a>
                      <span class="label label-warning play">
                             <a href="javascript:void(0)" onclick="aud_play_pause(this)">
                                <i class="glyphicon glyphicon-play-circle control icon-play"></i>
                                <audio class="xnine-player" src="{{ route('audio.track',['trackname' => $track->name.'.mp3']) }}" preload="auto"></audio>
                            </a>
                      </span>
                      <div class="caption pos-rel">
                        <h2 class="m-0">
                            {{ $track->name }}
                        </h2>
                        <h4>
                            <a href="/producers/{{$track->user_id}}">{{ $track->user->name }}</a>
                        </h4>
                        <h5>
                            <a href="/{{ $track->genre }}">{{ $track->genre }}</a>
                            {{ $track->bpm }} BPM
                        </h5>
                        <h6>
                            {{ $track->created_at->format('Y-m-d') }}
                        </h6>
                        <h6>
                            {{ $track->sequencer }}
                        </h6>
                      </div>
                    </div>
                </div>
            @endforeach
         </div>
     </div>
     <div class="container-fluid">
      <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8 p-0">
                    <h2 class="black">
                        объявления
                    </h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4 p-0">
                   <h2 class="black pull-right">
                    <a href="ads.html">все</a>
                   </h2>
                 </div>
            </div>
        </div>
         <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                 <div class="jumbotron p-0  mt-15 mb-15">
                   <span class="label label-default">07.11.2016</span>
                    <div class="row p-10">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <table class="table m-0">
                                <tbody>
                                    <tr>
                                     <td style="vertical-align:middle;">
                                       <a href="">
                                        <h2>
                                            trance
                                        </h2>
                                       </a>
                                      </td>
                                      <td style="vertical-align:middle;">
                                            <h5 class="m-0 text-right">138 bpm</h5>
                                            <h5 class="m-0 text-right">Cm</h5>
                                            <h5 class="m-0 text-right">5.00-6.00 минут</h5>
                                      </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <table class="table table-hover m-0 mb-10">
                            <tbody>
                                <tr>
                                 <td style="vertical-align:middle;">
                                      <h4 class="m-0">
                                         <a href="">
                                             <span class="glyphicon glyphicon-music ads"></span>
                                         </a>
                                      </h4>
                                  </td>
                                  <td style="vertical-align:middle;">
                                      <h4 class="m-0">Armin Van Burren - Dominator (Extended mix)</h4>
                                  </td>
                                </tr>
                                <tr>
                                 <td style="vertical-align:middle;">
                                      <h4 class="m-0">
                                         <a href="">
                                             <span class="glyphicon glyphicon-music ads"></span>
                                         </a>
                                      </h4>
                                  </td>
                                  <td style="vertical-align:middle;">
                                      <h4 class="m-0">Gaia - Inyathi (Extended mix)</h4>
                                  </td>
                                </tr>
                                <tr>
                                 <td style="vertical-align:middle;">
                                      <h4 class="m-0">
                                         <a href="">
                                             <span class="glyphicon glyphicon-volume-up ads"></span>
                                         </a>
                                      </h4>
                                  </td>
                                  <td style="vertical-align:middle;">
                                      <h4 class="m-0">Sample</h4>
                                  </td>
                                </tr>
                                <tr>
                                 <td style="vertical-align:middle;">
                                      <h4 class="m-0">
                                         <a href="">
                                             <span class="glyphicon glyphicon-th-list ads"></span>
                                         </a>
                                      </h4>
                                  </td>
                                  <td style="vertical-align:middle;">
                                      <h4 class="m-0">Preset</h4>
                                  </td>
                                </tr>
                                <tr>
                                 <td style="vertical-align:middle;">
                                      <h4 class="m-0">
                                         
                                             <span class="glyphicon glyphicon-time ads"></span>
                                         
                                      </h4>
                                  </td>
                                  <td style="vertical-align:middle;">
                                      <h4 class="m-0">15-20 дней</h4>
                                  </td>
                                </tr>
                            </tbody>
                            </table>
                            <button type="button" class="btn btn-default btn-lg pull-right"  data-toggle="tooltip" data-placement="top" title="Выполнить">15000 р</button>
                        </div>
                    </div>
                 </div>
             </div>
             
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                 <div class="jumbotron p-0  mt-15 mb-15">
                   <span class="label label-default">07.11.2016</span>
                    <div class="row p-10">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <table class="table m-0">
                                <tbody>
                                    <tr>
                                     <td style="vertical-align:middle;">
                                       <a href="">
                                        <h2>
                                            trance
                                        </h2>
                                       </a>
                                      </td>
                                      <td style="vertical-align:middle;">
                                                 <h5 class="m-0 text-right">138 bpm</h5>
                                                 <h5 class="m-0 text-right">Cm</h5>
                                                 <h5 class="m-0 text-right">5.00-6.00 минут</h5>
                                      </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <table class="table table-hover m-0 mb-10">
                            <tbody>
                                <tr>
                                 <td style="vertical-align:middle;">
                                      <h4 class="m-0">
                                         <a href="">
                                             <span class="glyphicon glyphicon-music ads"></span>
                                         </a>
                                      </h4>
                                  </td>
                                  <td style="vertical-align:middle;">
                                      <h4 class="m-0">Armin Van Burren - Dominator (Extended mix)</h4>
                                  </td>
                                </tr>
                                <tr>
                                 <td style="vertical-align:middle;">
                                      <h4 class="m-0">
                                         <a href="">
                                             <span class="glyphicon glyphicon-music ads"></span>
                                         </a>
                                      </h4>
                                  </td>
                                  <td style="vertical-align:middle;">
                                      <h4 class="m-0">Gaia - Inyathi (Extended mix)</h4>
                                  </td>
                                </tr>
                                <tr>
                                 <td style="vertical-align:middle;">
                                      <h4 class="m-0">
                                         <a href="">
                                             <span class="glyphicon glyphicon-volume-up ads"></span>
                                         </a>
                                      </h4>
                                  </td>
                                  <td style="vertical-align:middle;">
                                      <h4 class="m-0">Sample</h4>
                                  </td>
                                </tr>
                                <tr>
                                 <td style="vertical-align:middle;">
                                      <h4 class="m-0">
                                         <a href="">
                                             <span class="glyphicon glyphicon-th-list ads"></span>
                                         </a>
                                      </h4>
                                  </td>
                                  <td style="vertical-align:middle;">
                                      <h4 class="m-0">Preset</h4>
                                  </td>
                                </tr>
                                <tr>
                                 <td style="vertical-align:middle;">
                                      <h4 class="m-0">
                                         
                                             <span class="glyphicon glyphicon-time ads"></span>
                                         
                                      </h4>
                                  </td>
                                  <td style="vertical-align:middle;">
                                      <h4 class="m-0">15-20 дней</h4>
                                  </td>
                                </tr>
                            </tbody>
                            </table>
                            <button type="button" class="btn btn-default btn-lg pull-right"  data-toggle="tooltip" data-placement="top" title="Выполнить">15000 р</button>
                        </div>
                    </div>
                 </div>
             </div>
         </div>
     </div>
@endsection       
    
