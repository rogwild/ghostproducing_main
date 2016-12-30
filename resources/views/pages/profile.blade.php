<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Чтобы обеспечить надлежащий рендеринг и изменение размера касанием -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!-- ограничить возможности приближения на мобильных устройствах -->
    <title>Ghostinger</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  </head>
    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
              <a class="navbar-brand" href="main.html">Ghostinger</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle uppercase" data-toggle="dropdown">hardwell</a>
                  <ul class="dropdown-menu">
                    <li><a href="profile_main.html">профиль</a></li>
                    <li><a href="profile_orders.html">заказы<span class="badge">2</span></a></li>
                    <li><a href="#">сообщения</a></li>
                    <li><a href="#">выйти</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </header>
    
  <body class="center-block mt-20">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="container-fluid">
                    <div class="row">
                        <ul class="nav nav-pills nav-justified uppercase">
                          <li role="presentation" class="active"><a href="profile_main.html">главная</a></li>
                          <li role="presentation"><a href="profile_purchases.html">покупки</a></li>
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
                       <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8 p-0">
                        <h2 class="black">
                            прослушанные работы
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
                                    </tr>
                                  </thead>
                                <tbody class="middle">
                                   <tr>
                                     <td>
                                          <h5 class="text-center">
                                             <a href="">
                                                 <span class="glyphicon glyphicon-play-circle"></span>
                                             </a>
                                          </h5>
                                      </td>
                                      <td class="p-0 hidden-xs">
                                          <img src="img/14337834.jpg" alt="..." class="img-responsive img-74">
                                      </td>
                                      
                                      <td >
                                          <h5 class="m-0">Twerk it</h5>
                                      </td>
                                      <td>
                                          <h5><a href="producer.html">Tiesto</a></h5>
                                      </td>
                                      <td>
                                          <h5 class="m-0 dark"><a href="#">trap</a></h5>
                                      </td>
                                      <td>
                                         <h5 class="m-0 dark"><a href="#">logic pro</a></h5>
                                      </td>
                                      <td class="tx-tr-n">
                                          <h5>Bm</h5>
                                     </td>
                                     <td class="tx-tr-n">
                                          <h5>145bpm</h5>
                                     </td>
                                      <td class="hidden-xs">
                                          <h5>01.11.2016</h5>
                                      </td>
                                      <td >
                                          <h5 class="m-0">700 р</h5>
                                      </td>
                                      <td >
                                          <h5 class="m-0">
                                             <a href="">
                                                 <span class="glyphicon glyphicon-shopping-cart cart"></span>
                                             </a>
                                          </h5>
                                      </td>
                                    </tr>
                                    <tr>
                                     <td>
                                          <h5 class="text-center">
                                             <a href="">
                                                 <span class="glyphicon glyphicon-play-circle"></span>
                                             </a>
                                          </h5>
                                      </td>
                                      <td class="p-0 hidden-xs">
                                          <img src="img/14499424.jpg" alt="..." class="img-responsive img-74">
                                      </td>
                                      <td >
                                          <h5 class="m-0">belong</h5>
                                          
                                      </td>
                                      <td>
                                          <h5>Axwell&Ingrosso</h5>
                                      </td>
                                      <td >
                                          <h5 class="m-0 dark"><a href="#">housik</a></h5>
                                      </td>
                                      <td>
                                         <h5 class="m-0 dark"><a href="#">fruity loops</a></h5>
                                      </td>
                                      <td class="tx-tr-n">
                                          <h5>C</h5>
                                     </td>
                                     <td class="tx-tr-n">
                                          <h5>126bpm</h5>
                                     </td>
                                     <td class="hidden-xs">
                                          <h5>29.10.2016</h5>
                                      </td>
                                      <td >
                                          <h5 class="m-0">25000 р</h5>
                                      </td>
                                      <td >
                                          <h5 class="m-0">
                                             <a href="">
                                                 <span class="glyphicon glyphicon-shopping-cart cart"></span>
                                             </a>
                                          </h5>
                                      </td>
                                    </tr>
                                    <tr>
                                     <td>
                                          <h5 class="text-center">
                                             <a href="">
                                                 <span class="glyphicon glyphicon-play-circle"></span>
                                             </a>
                                          </h5>
                                      </td>
                                      <td class="p-0 hidden-xs">
                                          <img src="img/14508287.jpg" alt="..." class="img-responsive img-74">
                                      </td>
                                      <td >
                                          <h5 class="m-0">Machine Gun</h5>
                                     </td>
                                     <td>
                                         <h5>Matisse&Sadko</h5>
                                     </td>
                                     <td>
                                          <h5 class="m-0 dark"><a href="#">twerk</a></h5>
                                      </td>
                                      <td>
                                         <h5 class="m-0 dark"><a href="#">ableton</a></h5>
                                      </td>
                                     <td class="tx-tr-n">
                                          <h5>C</h5>
                                     </td>
                                     <td class="tx-tr-n">
                                          <h5>128bpm</h5>
                                     </td>
                                     <td class="hidden-xs">
                                          <h5>25.10.2016</h5>
                                      </td>
                                      <td >
                                          <h5 class="m-0">250000 р</h5>
                                      </td>
                                      <td >
                                          <h5 class="m-0">
                                             <a href="">
                                                 <span class="glyphicon glyphicon-shopping-cart cart"></span>
                                             </a>
                                          </h5>
                                      </td>
                                    </tr>
                                    <tr>
                                     <td>
                                          <h5 class="text-center">
                                             <a href="">
                                                 <span class="glyphicon glyphicon-play-circle"></span>
                                             </a>
                                          </h5>
                                      </td>
                                      <td class="p-0 hidden-xs">
                                          <img src="img/14274545.jpg" alt="..." class="img-responsive img-74">
                                      </td>
                                      <td >
                                          <h5 class="m-0">Tarakan</h5>
                                     </td>
                                     <td>
                                         <h5>Cockmachine</h5>
                                     </td>
                                     <td >
                                          <h5 class="m-0 dark"><a href="#">dark techno</a></h5>
                                      </td>
                                      <td>
                                         <h5 class="m-0 dark"><a href="#">logic pro</a></h5>
                                      </td>
                                     <td class="tx-tr-n">
                                          <h5>Am</h5>
                                     </td>
                                     <td class="tx-tr-n">
                                          <h5>130bpm</h5>
                                     </td>
                                     <td class="hidden-xs">
                                          <h5>19.10.2016</h5>
                                      </td>
                                      <td>
                                          <h5 class="m-0">270000 р</h5>
                                      </td>
                                      <td >
                                          <h5 class="m-0">
                                             <a href="">
                                                 <span class="glyphicon glyphicon-shopping-cart cart"></span>
                                             </a>
                                          </h5>
                                      </td>
                                    </tr>
                                    
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
      
        
    <script src="/jquery/dist/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>

