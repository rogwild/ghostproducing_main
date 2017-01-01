    @section('title', 'Треки')
    
    @extends('layout')

    @section('content')
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="container-fluid">
                    <div class="row">
                        <h2  class="black">
                            треки
                        </h2>
                    </div>
                    <div class="row">
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="btn-group uppercase mt-0 mb-15" data-toggle="buttons">
                          <label class="btn btn-default">
                            <input type="checkbox" autocomplete="off"> trance
                          </label>
                          <label class="btn btn-default">
                            <input type="checkbox" autocomplete="off"> House
                          </label>
                          <label class="btn btn-default">
                            <input type="checkbox" autocomplete="off"> techno
                          </label>
                        </div>
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
                                             <a href="">
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
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <nav aria-label="Page navigation">
                  <ul class="pagination">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
            </div>
         </div>
     </div>
@endsection