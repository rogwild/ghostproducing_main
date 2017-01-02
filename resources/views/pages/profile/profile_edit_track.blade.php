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
                          <li role="presentation"><a href="{{ url('/profile/purchases/{id}') }}">покупки</a></li>
                          <li role="presentation"><a href="profile_orders.html">заказы<span class="badge">2</span></a></li>
                          <li role="presentation"><a href="profile_messages.html">сообщения</a></li>
                          <li role="presentation" class="active"><a href="{{ url('/profile/add_track/{id}') }}">добавить</a></li>
                          <li role="presentation"><a href="profile_settings.html">настройки</a></li>
                        </ul>
                    </div>
                 </div>
             </div>
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="container-fluid">
                    <div class="row">
                        <h2 class="black">
                            работы
                        </h2>
                     </div>
                     <div class="row">
                         <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                             <div class="container-fluid">
                                <div class="row">
                                    <div class="jumbotron">
                                      <div class="container-fluid">
                                       <div class="row">
                                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                               <h2 class="m-0 mb-10">
                                                    изменить
                                               </h2>
                                           </div>
                                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                               <h4 class="m-0">
                                                     тип:
                                               </h4>
                                           </div>
                                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-10">
                                                <form role="form" class="mb-10">
                                                    <div class="btn-group uppercase m-0" data-toggle="buttons">
                                                      <label class="btn btn-default" data-toggle=" " data-target="#track">
                                                        <input type="radio" name="optionsRadio" value="track"> трек
                                                      </label>
                                                    </div>
                                                </form>
                                            </div>
                                          </div>
                                          <div class="panel-group" id="accordion">
                                              <div class="panel panel-default">
                                                <div class="row panel-collapse " data-parent="#accordion"  id="track">
                                                    <form method='POST' action="{{action('TrackController@update',['tracks'=>$track->id])}}" enctype="multipart/form-data">
                                                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                                <label for="TrackInputFile">Добавить материал</label>
                                                                <input type="file" name="track" id="TrackInputFile">
                                                            </div>
                                                        </div>
                                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                             <label for="InputNameTrack">название</label>
                                                             <input type="text" name="name" class="form-control" id="InputNameTrack" value="{{$track->name}}">
                                                            </div>
                                                      </div> 
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label for="InputSpeed">жанр:</label>
                                                                <select name="genre" class="form-control" value="{{$track->genre}}">
                                                                    <option>trance</option>
                                                                    <option>house</option>
                                                                    <option>techno</option>
                                                                </select>
                                                             </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label for="InputSpeed">секвенсор:</label>
                                                                <select name="sequencer" class="form-control" value="{{$track->sequencer}}">
                                                                    <option>Ableton Live</option>
                                                                    <option>Fruity Loops</option>
                                                                    <option>Logic Pro</option>
                                                                </select>
                                                             </div>
                                                        </div>
                                                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                             <label for="InputSpeedTrack">скорость трека</label>
                                                             <input type="number" name="bpm" class="form-control" id="InputSpeedTrack" placeholder="BPM" value="{{$track->bpm}}">
                                                            </div>
                                                       </div>
                                                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                                 <label for="InputSpeed">тональность</label>
                                                                 <select name="key" class="form-control" value="{{$track->key}}">
                                                                      <option>A</option>
                                                                      <option>Bb</option>
                                                                      <option>B</option>
                                                                      <option>C</option>
                                                                      <option>Db</option>
                                                                      <option>D</option>
                                                                      <option>Eb</option>
                                                                      <option>E</option>
                                                                      <option>F</option>
                                                                      <option>Gb</option>
                                                                      <option>G</option>
                                                                      <option>Ab</option>
                                                                      <option>Am</option>
                                                                      <option>Bbm</option>
                                                                      <option>Bm</option>
                                                                      <option>Cm</option>
                                                                      <option>Dbm</option>
                                                                      <option>Dm</option>
                                                                      <option>Ebm</option>
                                                                      <option>Em</option>
                                                                      <option>Fm</option>
                                                                      <option>Gbm</option>
                                                                      <option>Gm</option>
                                                                      <option>Abm</option>
                                                                 </select>
                                                            </div>
                                                       </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                                <label for="InputCover">Добавить обложку</label>
                                                                <input enctype="multipart/form-data " type="file" name="cover" id="InputCover">
                                                            </div>
                                                       </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                             <label for="MegaLink">ссылка на MEGA</label>
                                                             <input type="text" name="megalink" class="form-control" id="MegaLink" placeholder="MEGA Link" value="{{$track->megalink}}">
                                                            </div>
                                                       </div>
                                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                             <label for="InputPriceTrack">стоимость</label>
                                                             <input type="number" name="price" class="form-control" id="InputPriceTrack" placeholder="РУБЛЕЙ" value="{{$track->price}}">
                                                            </div>
                                                       </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-default btn-lg pull-right">добавить</button>
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
         </div>
     </div>
      
        
    
  </body>
    

@endsection