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
                          <li role="presentation"><a href="{{ url('/profile/add_track/{id}') }}">добавить</a></li>
                          <li role="presentation" class="active"><a href="{{ url('/profile/settings/{user}') }}">настройки</a></li>
                        </ul>
                    </div>
                 </div>
             </div>
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="container-fluid">
                    <div class="row">
                        <h2 class="black">
                            настройки
                        </h2>
                     </div>
                     <div class="row">
                        
                            
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="container-fluid">
                                <div class="row">
                                    <div class="jumbotron p-0">
                                     <img class="img-responsive  img-100per" src="img/DDD.jpg" alt="...">
                                     <div class="form-group p-10">
                                            <label for="InputFile">Сменить аватар</label>
                                            <input type="file" name="avatar" id="InputFile">
                                      </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                         <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                             <div class="container-fluid">
                                <div class="row">
                                    <div class="jumbotron">
                                      <div class="container-fluid">
                                       
                                       <div class="row">
                                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                               <h2 class="m-0 mb-10">
                                                    информациия
                                               </h2>
                                           </div>
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              
                                                    <div class="form-group">
                                                     <label for="InputAlias">псевдоним</label>
                                                     <input type="text" class="form-control" id="InputAlias" value="{{ $user->name }}">
                                                    </div>
                                              
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              
                                                    <div class="form-group">
                                                     <label for="InputEmail1">Email</label>
                                                     <input type="email" class="form-control" id="InputEmail1" value="{{ $user->email }}">
                                                    </div>
                                              
                                          </div>
                                           {!! Form::open(['method' => 'POST', 'action'=> ['UserInfoController@update', Request::user()->id]]) !!}
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              
                                                    <div class="form-group">
                                                     <label for="InputPhone">телефон</label>
                                                     <input type="phone" class="form-control" name="phone" id="InputPhone" placeholder="89220506685" value="{{ $user->userinfo->phone }}">
                                                    </div>
                                              
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              
                                                    <div class="form-group">
                                                     <label for="InputSite">WEB-САЙТ</label>
                                                     <input type="phone" class="form-control" name="website" id="InputSite" placeholder="https://www.ghostprducer.com/" value="{{ $user->userinfo->website }}">
                                                    </div>
                                              
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              
                                                    <div class="form-group">
                                                     <label for="InputName">имя</label>
                                                     <input type="text" class="form-control" name="realname" id="InputName" placeholder="НИКОЛАЙ" value="{{ $user->userinfo->realname }}">
                                                    </div>
                                              
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              
                                                    <div class="form-group">
                                                     <label for="InputSecondname">фамилия</label>
                                                     <input type="text" class="form-control" name="patronymic" id="InputSecondname" placeholder="ПУПКИН" value="{{ $user->userinfo->patronymic }}">
                                                    </div>
                                              
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              
                                                    <div class="form-group">
                                                     <label for="InputPatronymic">отчество</label>
                                                     <input type="text" class="form-control" name="surname" id="InputPatronymic" placeholder="ОЛЬГОВИЧ" value="{{ $user->userinfo->surname }}">
                                                    </div>
                                              
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                              
                                                    <div class="form-group">
                                                     <label for="InputDate">дата рождения</label>
                                                     <input type="date" class="form-control" name="birthday" id="InputDate" value="{{ $user->userinfo->birthday }}">
                                                    </div>
                                              
                                          </div>
                                      </div>
                                      <!--<div class="row">
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                               
                                               <label for="InputDate">виды работ:</label>
                                                <div class="btn-group uppercase m-0" data-toggle="buttons">
                                                  <label class="btn btn-default">
                                                    <input type="checkbox" name="optionsCheck" id="trackCheck" value="track" checked> трек
                                                  </label>
                                                  <label class="btn btn-default">
                                                    <input type="checkbox" name="optionsCheck" id="jingleCheck" value="jingle"> джинглы
                                                  </label>
                                                  <label class="btn btn-default">
                                                    <input type="checkbox" name="optionsCheck" id="mashupCheck" value="mashup"> мэшап
                                                  </label>
                                                  <label class="btn btn-default">
                                                    <input type="checkbox" name="optionsCheck" id="remixCheck" value="remix"> ремикс
                                                  </label>
                                                  <label class="btn btn-default">
                                                    <input type="checkbox" name="optionsCheck" id="vocalCheck" value="vocal"> вокал
                                                  </label>
                                                  <label class="btn btn-default">
                                                    <input type="checkbox" name="optionsCheck" id="masteringCheck" value="mastering"> мастеринг
                                                  </label>
                                                  <label class="btn btn-default">
                                                    <input type="checkbox" name="optionsCheck" id="reductionCheck" value="reduction"> сведение
                                                  </label>
                                                  <label class="btn btn-default">
                                                    <input type="checkbox" name="optionsCheck" id="designCheck" value="design"> дизайн
                                                  </label>
                                                </div>
                                               
                                            </div>
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                              
                                               <label for="InputDate">жанры:</label>
                                                <div class="btn-group uppercase m-0" data-toggle="buttons">
                                                  <label class="btn btn-default">
                                                    <input type="checkbox" name="genreCheck" id="tranceCheck" value="trance"> trance
                                                  </label>
                                                  <label class="btn btn-default">
                                                    <input type="checkbox" name="genreCheck" id="houseCheck" value="house"> house
                                                  </label>
                                                  <label class="btn btn-default">
                                                    <input type="checkbox" name="genreCheck" id="technoCheck" value="techno"> techno
                                                  </label>
                                                </div>
                                              
                                          </div>
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                              
                                               <label for="InputDate">секвенсоры:</label>
                                                <div class="btn-group uppercase m-0" data-toggle="buttons">
                                                  <label class="btn btn-default">
                                                    <input type="checkbox" name="programCheck" id="abletonliveCheck" value="abletonlive"> Ableton Live
                                                  </label>
                                                  <label class="btn btn-default">
                                                    <input type="checkbox" name="programCheck" id="fruityloopsCheck" value="fruityloops"> Fruity Loops
                                                  </label>
                                                  <label class="btn btn-default">
                                                    <input type="checkbox" name="programCheck" id="logicproCheck" value="logicpro"> Logic Pro
                                                  </label>
                                                </div>
                                              
                                          </div>
                                      </div>-->
                                      <div class="row">
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          
                                               <label for="InputDate">о себе:</label>
                                               <textarea class="form-control" name="about" rows="3" value="{{ $user->userinfo->about }}"></textarea>
                                              
                                          </div>
                                      </div>
                                      {!! Form::submit('сохранить', ['class' => 'btn btn-default btn-lg pull-right']) !!}
                                      {!! Form::close() !!}
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