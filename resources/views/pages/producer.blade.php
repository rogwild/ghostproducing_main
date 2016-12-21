@extends('layout')

@section('content')

<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8">
                        <h2 class="black">
                            {{ $producer->producer_name }}
                        </h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4">
                       <h2 class="black pull-right">
                        <a href="profile_make_order_producer.html">заказать трек</a>
                       </h2>
                    </div>
                </div>
         </div>
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                 <div class="container-fluid">
                    <div class="row">
                        <div class="jumbotron p-0">
                         <img class="img-responsive  img-100per" src="img/DDD.jpg" alt="...">
                          <!--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          </ol>

                          Wrapper for slides 
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
                            </div>
                            
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                  <img class="img-responsive" src="img/DDD.jpg" alt="Chania">
                                </div>
                            </div>

                           Controls
                          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                          </a>
                        </div>-->
                        </div>
                    </div>
                 </div>
             </div>
             <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                 <div class="container-fluid">
                    <div class="row">
                        <div class="jumbotron">
                         <span class="label like">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Мне нравится"><span class="glyphicon glyphicon-fire"></span></a>
                         </span>
                          <div class="container-fluid">
                            <h2 class="m-0">
                                информация
                            </h2>
                            <ul class="list-unstyled">
                              <li>
                                  <h5>trap/twerk/dubstep</h5>
                              </li>
                              <li>
                                  <h5>треки/миксы/мэшапы</h5>
                              </li>
                              <li>
                                  <h5>ableton live/logic pro</h5>
                              </li>
                              <li>
                                  <h5><a href="https://www.djhardwell.com/">web-сайт</a></h5>
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
                            <p>
                                Меня зовут Коля. <br>
                                Я из Ижевска. <br>
                                Люблю писать ТРАП и ТВЕРК.<br>
                                Мои треки играли такие именитые диджеи как ВазКинг и Космо-Из-Сыробогатов.<br>
                                Пишу много треков.<br>
                                Могу за 1 день сделать ХИТ сезона.<br>
                            </p>
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
          <div class="jumbotron">
          <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8">
                    <h3 class="m-0">
                        промо-работа
                    </h3>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4">
                   <h5 class="pull-right m-0">
                   <a href="profile_add_track.html" data-toggle="tooltip" data-placement="top" title="Добавить материал"><span class="glyphicon glyphicon-plus ads"></span></a>
                    <a href="profile_make_order_producer.html" data-toggle="tooltip" data-placement="top" title="Редактировать"><span class="glyphicon glyphicon-pencil ads"></span></a>
                   </h5>
                </div>
            </div>
           <table class="table table-hover m-0 mb-10">
                <tbody>
                   <!--<thead>
                    <tr>
                        <th></th>
                         <th>
                            название
                         </th>
                         <th>
                             плагин
                         </th>
                         <th>
                             дата добавления
                         </th>
                         <th class="pull-right">
                             цена
                         </th>
                    </tr>
                   </thead>-->
                   <tr>
                     <td>
                          <h5 class="m-0">
                             <a href="">
                                 <span class="glyphicon glyphicon-play-circle ads"></span>
                             </a>
                          </h5>
                      </td>
                      <td>
                          <h5 class="m-0">marmellaster f*ckin jump</h5>
                      </td>
                      <td>
                          <h5 class="m-0">logic pro</h5>
                      </td>
                      <td>
                          <h5 class="m-0">08.11.2016</h5>
                      </td>
                      <td>
                      </td>
                    </tr>
                </tbody>
             </table>
           <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="m-0">
                        пресеты
                    </h3>
                </div>
            </div>
           <table class="table table-hover m-0 mb-10">
                <tbody>
                   <!--<thead>
                    <tr>
                        <th></th>
                         <th>
                            название
                         </th>
                         <th>
                             плагин
                         </th>
                         <th>
                             дата добавления
                         </th>
                         <th class="pull-right">
                             цена
                         </th>
                    </tr>
                   </thead>-->
                   <tr>
                     <td>
                          <h5 class="m-0">
                             <a href="">
                                 <span class="glyphicon glyphicon-th-list ads"></span>
                             </a>
                          </h5>
                      </td>
                      <td>
                          <h5 class="m-0">bass boosted bass</h5>
                      </td>
                      <td>
                          <h5 class="m-0">sylenth</h5>
                      </td>
                      <td>
                          <h5 class="m-0">08.11.2016</h5>
                      </td>
                      <td>
                          <button type="button" class="btn btn-default btn-md pull-right" data-toggle="tooltip" data-placement="top" title="купить">500 р</button>
                      </td>
                    </tr>
                    <tr>
                     <td>
                          <h5 class="m-0">
                             <a href="">
                                 <span class="glyphicon glyphicon-th-list ads"></span>
                             </a>
                          </h5>
                      </td>
                      <td>
                          <h5 class="m-0">bass boosted lead</h5>
                      </td>
                      <td>
                          <h5 class="m-0">nexus</h5>
                      </td>
                      <td>
                          <h5 class="m-0">08.11.2016</h5>
                      </td>
                      <td>
                          <button type="button" class="btn btn-default btn-md pull-right" data-toggle="tooltip" data-placement="top" title="купить">700 р</button>
                      </td>
                    </tr>
                </tbody>
             </table>
             <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="m-0">
                        сэмплы/вокалы
                    </h3>
                </div>
            </div>
             <table class="table table-hover m-0 mb-10">
                <tbody>
                   <!--<thead>
                         <th></th>
                         <th>
                            название
                         </th>
                         <th>
                             продолжительность
                         </th>
                         <th>
                             дата добавления
                         </th>
                         <th class="pull-right">
                             цена
                         </th>
                   </thead>-->
                   <tr>
                     <td>
                          <h5 class="m-0">
                             <a href="">
                                 <span class="glyphicon glyphicon-music ads"></span>
                             </a>
                          </h5>
                      </td>
                      <td>
                          <h5 class="m-0">bass line</h5>
                      </td>
                      <td>
                          <h5 class="m-0">16 beats</h5>
                      </td>
                      <td>
                          <h5 class="m-0">07.11.2016</h5>
                      </td>
                      <td>
                          <button type="button" class="btn btn-default btn-md pull-right" data-toggle="tooltip" data-placement="top" title="купить">200 р</button>
                      </td>
                    </tr>
                </tbody>
             </table>
             <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="m-0">
                        midi
                    </h3>
                </div>
            </div>
             <table class="table table-hover m-0 mb-10">
                <tbody>
                   <!--<thead>
                         <th></th>
                         <th>
                            название
                         </th>
                         <th>
                             продолжительность
                         </th>
                         <th>
                             дата добавления
                         </th>
                         <th class="pull-right">
                             цена
                         </th>
                   </thead>-->
                   <tr>
                     <td>
                          <h5 class="m-0">
                             <a href="">
                                 <span class="glyphicon glyphicon-barcode ads"></span>
                             </a>
                          </h5>
                      </td>
                      <td>
                          <h5 class="m-0">echo melody</h5>
                      </td>
                      <td>
                          <h5 class="m-0">32 beats</h5>
                      </td>
                      <td>
                          <h5 class="m-0">07.11.2016</h5>
                      </td>
                      <td>
                          <button type="button" class="btn btn-default btn-md pull-right" data-toggle="tooltip" data-placement="top" title="скачать">бесплатно</button>
                      </td>
                    </tr>
                </tbody>
             </table>
             <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h3>
                     работы дизайнера
                  </h3>
                 </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <a href="img/14499424.jpg" title="Обложка для 'Defenition of sound'" data-gallery=""><img src="img/14499424.jpg" style="width:auto;height:100px;"></a>
                 <a href="img/14598517.jpg" title="Обложка для 'Defenition of sound'" data-gallery=""><img src="img/14598517.jpg" style="width:auto;height:100px;"></a>
                 <a href="img/14337834.jpg" title="Обложка для 'Defenition of sound'" data-gallery=""><img src="img/14337834.jpg" style="width:auto;height:100px;"></a>
                 <a href="img/14508287.jpg" title="Обложка для 'Defenition of sound'" data-gallery=""><img src="img/14508287.jpg" style="width:auto;height:100px;"></a>
                 <a href="img/14512594.jpg" title="Обложка для 'Defenition of sound'" data-gallery=""><img src="img/14512594.jpg" style="width:auto;height:100px;"></a>
                 <a href="img/14593004.jpg" title="Обложка для 'Defenition of sound'" data-gallery=""><img src="img/14593004.jpg" style="width:auto;height:100px;"></a>
                 <a href="img/14669879.jpg" title="Обложка для 'Defenition of sound'" data-gallery=""><img src="img/14669879.jpg" style="width:auto;height:100px;"></a>
                 <a href="img/14682460.jpg" title="Обложка для 'Defenition of sound'" data-gallery=""><img src="img/14682460.jpg" style="width:auto;height:100px;"></a>
                 <a href="img/14687852.jpg" title="Обложка для 'Defenition of sound'" data-gallery=""><img src="img/14687852.jpg" style="width:auto;height:100px;"></a>
                  <div id="blueimp-gallery" class="blueimp-gallery">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                  </div>
                 </div>
             </div>
           </div>
         </div>
       </div>
        <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <h2 class="black">
                    доступные треки
             </h2>
             <div class="row">
                 @foreach ($producer->tracks as $track)
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <div class="thumbnail p-0 pos-rel">
                          <a href="#"><img class="program-icon" src="img/ableton_live__flat__icns_ios_7_for_osx_dock_by_gianmarcozappala-d6pl22g.png" alt="..." data-toggle="tooltip" data-placement="top" title="Ableton Live"></a>
                          <img class="img-responsive  img-100per" src="img/14499424.jpg" alt="...">
                          <a href="" data-toggle="tooltip" data-placement="top" title="Купить">
                              <span class="label label-info price">{{ $track->price }}</span>
                          </a>
                          <span class="label label-warning play">
                                 <a href="#">
                                     <span class="glyphicon glyphicon-play-circle"></span>
                                 </a>
                          </span>
                          <div class="caption pos-rel">
                            <h2 class="m-0">
                                {{ $track->name }}
                            </h2>
                            <h4>
                                <a href="/producers/{producer}">{{ $producer->producer_name }}</a>
                            </h4>
                            <h5>
                                <a href="#">{{ $track->genre }}</a>
                                {{ $track->bpm }}
                            </h5>
                            <h6>
                                {{ $track->created_at }}
                            </h6>
                          </div>
                        </div>
                    </div>
                 @endforeach
                 
             </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <h2 class="black">
                    проданные треки
             </h2>
             <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <div class="thumbnail p-0" style="position:relative;">
                        <img class="img-responsive" src="/public/img/14337834.jpg" alt="..." style="width:100%">
                      
                          <span class="label label-info price">16000 р</span>
                      
                      <div class="caption" style="position:relative;">
                        <h3 class="m-0">
                            nice
                        </h3>
                        <h5>
                            Hardwell
                        </h5>
                      </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <div class="thumbnail p-0" style="position:relative;">
                      <img class="img-responsive" src="img/14682460.jpg" alt="..." style="width:100%">
                      
                          <span class="label label-info price">7500 р</span>
                      
                      <div class="caption" style="position:relative;">
                        <h3 class="m-0">
                            nnado
                        </h3>
                        <h5>
                            Hardwell
                        </h5>
                      </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <div class="thumbnail p-0" style="position:relative;">
                      <img class="img-responsive" src="img/14512594.jpg" alt="..." style="width:100%">
                          <span class="label label-info price">9900 р</span>
                      <div class="caption" style="position:relative;">
                        <h3 class="m-0">
                            jogovo
                        </h3>
                        <h5>
                            Hardwell
                        </h5>
                      </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <div class="thumbnail p-0" style="position:relative;">
                        <img class="img-responsive" src="public/img/14593004.jpg" alt="..." style="width:100%">
                      
                          <span class="label label-info price">11000 р</span>
                      
                      <div class="caption" style="position:relative;">
                        <h3 class="m-0">
                            dropchik
                        </h3>
                        <h5>
                            Hardwell
                        </h5>
                      </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <div class="thumbnail p-0" style="position:relative;">
                      <img class="img-responsive" src="img/14583910.jpg" alt="..." style="width:100%">
                      
                          <span class="label label-info price">17000 р</span>
                      
                      <div class="caption" style="position:relative;">
                        <h3 class="m-0">
                            baunti
                        </h3>
                        <h5>
                            Hardwell
                        </h5>
                      </div>
                    </div>
                </div>
             </div>
            </div>
         </div>
     </div>
@endsection 