@extends('layouts.streamit.front.master')
@section('content')



    <!-- Slider Start -->
    <section class="iq-main-slider p-0">
        <div id="tvshows-slider">
            @foreach($sliders as $slider)
            <div>
                <a href="">
{{--                    <a href="{{route('show.view',[$slider->name])}}">--}}
                    <div class="shows-img">
                        <img src="{{$slider->banner}}" class="w-100" alt="">
                        <div class="shows-content">
                            <h4 class="text-white mb-1">{{$slider->name}}</h4>
                            <div class="movie-time d-flex align-items-center">
                                <div class="badge badge-secondary p-1 mr-2">{{$slider->age_group}}</div>
                                <span class="text-white">{{$slider->seasons_count .' '. ucfirst($system->path->season) .'s'}}</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
        <div class="dropdown genres-box">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                Genres
            </button>
            <div class="dropdown-menu three-column" aria-labelledby="dropdownMenuButton2">
                @foreach($category as $genre)
                <a class="dropdown-item" href="{{route('category.view',$genre->name)}}">{{$genre->name}}</a>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Slider End -->




    <!-- MainContent -->
    <div class="main-content">
            {{-- Popular--}}
        <section id="iq-favorites">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">Popular {{ucfirst($system->path->show)}}s</h4>
                        </div>
                        <div class="favorites-contens">
                            <ul class="favorites-slider list-inline  row p-0 mb-0">
                                <li class="slide-item">
                                    <a href="show-single.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/01.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>Day of Darkness</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">15+</div>
                                                    <span class="text-white">2 Seasons</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide-item">
                                    <a href="show-single.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/02.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>My True Friends</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">7+</div>
                                                    <span class="text-white">2 Seasons</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide-item">
                                    <a href="show-single.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/03.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>Arrival 1999</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">11+</div>
                                                    <span class="text-white">3 Seasons</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide-item">
                                    <a href="show-single.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/04.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>Night Mare</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">18+</div>
                                                    <span class="text-white">3 Seasons</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide-item">
                                    <a href="show-single.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/05.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>The Marshal King</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">17+</div>
                                                    <span class="text-white">1 Season</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Popular--}}


        {{-- UpComing--}}
        <section id="iq-upcoming-movie">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">Upcoming {{ucfirst($system->path->show)}}s</h4>
                        </div>
                        <div class="upcoming-contens ">
                            <ul class="favorites-slider list-inline  row p-0 mb-0">
                                @foreach($upcoming as $up)
                                <li class="slide-item">
{{--                                    <a href="{{route('show.view',$up->shows->name)}}">--}}
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="{{$up->shows->banner}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>{{$up->shows->name}}</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">{{$up->shows->age_group}}</div>
                                                    <span class="text-white">{{$up->shows->seasons->count() .' '. ucfirst($system->path->season).'s'}} </span>
                                                </div>
                                                <div class="hover-buttons">
                                                    <a href="linkj">
{{--                                                        <a href="{{route('show.view',[$up->shows->name,'aaa'])}}">--}}
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play
                                          Now</span>
                                                    </a>
                                                </div>
                                            </div>
{{--                                                Here Ajax Parts belongs--}}
                                            {{--Ajax Part--}}

                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span class="like_activity" content_id="{{$up->shows->id}}" content_type="show"><i class="ri-thumb-up-fill" ></i></span></li>
                                                    <li><span id="favourite_activity"><i class="ri-heart-fill"></i></span></li>
                                                    <li><span id="watchlist_activity"><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                            {{--Ajax Part--}}


                                        </div>
{{--                                    </a>--}}

                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- UpComing--}}

        <section id="iq-suggestede">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">{{ucfirst($system->path->show)}}s We Recommend</h4>
                        </div>
                        <div class="suggestede-contens">
                            <ul class="favorites-slider list-inline  row p-0 mb-0">
                                <li class="slide-item">
                                    <a href="show-single.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/01.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>Day of Darkness</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">15+</div>
                                                    <span class="text-white">2 Seasons</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                       </span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide-item">
                                    <a href="show-single.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/08.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>Mission Moon</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">18+</div>
                                                    <span class="text-white">3 Seasons</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide-item">
                                    <a href="show-single.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/09.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>Friends</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">10+</div>
                                                    <span class="text-white">1 Season</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide-item">
                                    <a href="show-single.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/05.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>The Marshal King</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">17+</div>
                                                    <span class="text-white">1 Season</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide-item">
                                    <a href="show-single.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/04.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>Knight Mare</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">18+</div>
                                                    <span class="text-white">3 Seasons</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        {{-- Popular Category Shows--}}
        <section id="iq-upcoming-movie">
            <div class="container-fluid">
                <div class="row">
                    @foreach($allCategoryShows as $cat)
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">{{'Best '.ucfirst($cat->name) .' '. ucfirst($system->path->show).'s'}}</h4>
                        </div>
                        <div class="upcoming-contens">
                            <ul class="favorites-slider list-inline  row p-0 mb-0">
                                @foreach($allCategoryShows as $up)
                                    @if($cat->id === $up->id)
                                    <li class="slide-item">
                                        <a href="">
{{--                                            <a href="{{route('show.view',$up->shows->name)}}">--}}




                                            <div class="block-images position-relative">
                                                <div class="img-box">
                                                    <img src="{{$up->shows->banner}}" class="img-fluid" alt="">
                                                </div>
                                                <div class="block-description">
                                                    <h6>{{$up->shows->name}}</h6>
                                                    <div class="movie-time d-flex align-items-center my-2">
                                                        <div class="badge badge-secondary p-1 mr-2">{{$up->shows->age_group}}</div>
                                                        <span class="text-white">{{$up->shows_count}}</span>
                                                    </div>
                                                    <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play
                                          Now</span>
                                                    </div>
                                                </div>
                                                <div class="block-social-info">
                                                    <ul class="list-inline p-0 m-0 music-play-lists">
                                                        <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                        <li><span><i class="ri-heart-fill"></i></span></li>
                                                        <li><span><i class="ri-add-line"></i></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- Popular Category Shows--}}


    </div>






@endsection
