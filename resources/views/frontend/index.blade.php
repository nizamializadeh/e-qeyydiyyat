@extends('layouts.frontend.frontend')
@section('content')



    <div class="slider-area">
        <div class="slider-active">
            @foreach($sliders as $slider)
                <div class="single-slider ">
                    <img src="{{asset('photo/'.$slider->img)}}" alt="" />
                    <div class="slider-content">
                        <div class="table">
                            <div class="table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8  col-xs-12">
                                            <h2>{{$slider->header}}</h2>
                                            <p>
                                                {{$slider->desc}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- slider-area end -->

    <!-- course-area start -->
    <div class="course-area bg-2 ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-xs-12">
                    <div class="course-wrap">
                        <h2 class="section-title">POPULAR COURSES</h2>
                        <div class="row">
                            <div class="course-active next-prev-style">
                                @foreach($univestetys as $univestety)
                                <div class="course-items">
                                        @foreach($univestety as $univestetyx)
                                            <div class="col-xs-12">
                                                <div class="course-item">
                                                    <div class="course-img">
                                                        <img src="{{asset('photo/'.$univestetyx->prflimg)}}" alt="" />
                                                    </div>
                                                    <div class="course-content">
                                                        <h3><a href="#">{{$univestetyx->header}}</a></h3>
                                                        <div class="course-meta">
                                                            <ul>
                                                                <li><i class="fa fa-globe" aria-hidden="true"></i>{{$univestetyx->name}}</li>
                                                                <li><i class="fa fa-clock-o"></i> {{$univestetyx->year}}</li>
                                                            </ul>
                                                        </div>
                                                        <p>
                                                        </p>
                                                        <a href="{{ route('universitydetail', $univestetyx->id) }}" class="btn-style">Ətraflı</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                </div>
                                @endforeach
                                {{--<div class="course-items">--}}
                                    {{--<div class="col-xs-12">--}}
                                        {{--<div class="course-item">--}}
                                            {{--<div class="course-img">--}}
                                                {{--<img src="img/cource/3.jpg" alt="" />--}}
                                            {{--</div>--}}
                                            {{--<div class="course-content">--}}
                                                {{--<h3><a href="#">Agricultural Management</a></h3>--}}
                                                {{--<div class="course-meta">--}}
                                                    {{--<ul>--}}
                                                        {{--<li><i class="fa fa-folder-o"></i> Mathematics, Science</li>--}}
                                                        {{--<li><i class="fa fa-clock-o"></i> 124 Hour</li>--}}
                                                    {{--</ul>--}}
                                                {{--</div>--}}
                                                {{--<p>The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment and instruments are alive.</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-xs-12">--}}
                                        {{--<div class="course-item">--}}
                                            {{--<div class="course-img">--}}
                                                {{--<img src="img/cource/4.jpg" alt="" />--}}
                                            {{--</div>--}}
                                            {{--<div class="course-content">--}}
                                                {{--<h3><a href="#">Actuarial Science</a></h3>--}}
                                                {{--<div class="course-meta">--}}
                                                    {{--<ul>--}}
                                                        {{--<li><i class="fa fa-folder-o"></i> Mathematics, Science</li>--}}
                                                        {{--<li><i class="fa fa-clock-o"></i> 124 Hour</li>--}}
                                                    {{--</ul>--}}
                                                {{--</div>--}}
                                                {{--<p>The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment and instruments are alive.</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-xs-12">
                    <div class="course-sidebar-area">
                        <div style="    height: 1364px" class="course-sidebar-wrap ig">
                            <form method="post" novalidate>
                                <div id="msform">
                                    <!-- progressbar -->
                                    <h2 style="color: white;margin-right: 4%;margin-bottom: 10%" >E-Qeydiyyat</h2>

                                    <ul style="    margin-bottom: 0px" id="progressbar">
                                        <li class="active">Account Setup</li>
                                        <div></div>
                                        <li>test</li>

                                        <li>Social Profiles</li>
                                        <li>Details</li>

                                    </ul>
                                    <!-- fieldsets -->
                                    <fieldset>
                                        <input type="text" name="name" placeholder="Ad" />
                                        <input type="text" name="surname" placeholder="Soyad" />

                                        <input type="text" name="email" placeholder="Email" />
                                        <div class="sd-container">
                                            <input class="sda" type="date" name="selected_date" />
                                            <span class="open-button">
      <button type="button">📅</button>
    </span>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Növbəti" />
                                    </fieldset>
                                    <fieldset>
                                        <input type="text" name="place" placeholder="Hal  hazirda təhsil aldiğiniz muəsisə" />
                                        <div class="sd-container">
                                            <input class="sda" type="date" name="selected_date" placeholder="Bitirdiyiniz ve ya bitireceyiniz tarix" />
                                            <span class="open-button">
      <button type="button">📅</button>
    </span>
                                        </div>
                                        <input style="background-color: white" type="file" name="gplus" placeholder="Atestat ve ya Diplom" />
                                        <input type="text" name="gplus" placeholder="Gwef" />
                                        <input type="button" name="previous" class="previous action-button" value="Əvvələ" />
                                        <input type="button" name="next" class="next action-button" value="Növbəti" />
                                    </fieldset>

                                    <fieldset>
                                        <select name="select1" id="select1" class="fon">
                                            <option value="">Sec..</option>
                                            @foreach($select1s as $select1)
                                                <option value="{{$select1->id}}">{{$select1->name}}</option>
                                            @endforeach
                                        </select>
                                        <select name="select2" id="select2" class="fon">
                                            <option value="">Sec..</option>
                                            <option value=""></option>
                                        </select>
                                        <select name="select3" id="select3" class="fon">
                                            <option value="">Sec..</option>
                                            <option value=""></option>
                                        </select>
                                        <select name="select4" id="select4" class="fon">
                                            <option value="">Sec..</option>
                                            <option value=""></option>
                                        </select>

                                        <input type="button" name="previous" class="previous action-button" value="Əvvələ" />
                                        <input type="button" name="next" class="next action-button" value="Növbəti" />
                                    </fieldset>
                                    <fieldset>
                                        <input type="text" name="city" placeholder="Şəhər" />
                                        <input type="text" name="adress" placeholder="Ünvan" />
                                        <input type="text" name="phone1" placeholder="Telefon1" />
                                        <input type="text" name="phone2" placeholder="Telefon2" />


                                        <input type="button" name="previous" class="previous action-button" value="Əvvələ" />
                                        <input type="submit" name="submit" class="submit action-button" value="Təsdiq" />
                                    </fieldset>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- latest news -->

                </div>
            </div>
        </div>
    </div>


    <!-- vedio-area start -->
    <div class="video-area opacity-background bg-img-2">

        <video  id="example_video_1" class="video-js vjs-default-skin" controls preload="none" data-setup="{}">
            <source src="{{asset('video/'.$video->video)}}" type="video/mp4">
            <source src="mov_bbb.ogg" type="video/ogg">
        </video>
        <div class="container video-wrap">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12">
                    <h2>Take a Virtual Tour!</h2>
                    <p>Almost before we knew it we had left the ground.The face of the moon was in shadow.The spectacle before us was indeed sublime.alive.All their equipment and instruments are alive.I watched the storm, so beautiful yet terrific.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- vedio-area end -->



    <!-- brand-area start -->
    <div class="brand-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="brand-active">
                    @foreach($partners as $partner)
                        <div class="col-xs-12">
                            <div class="brand-item">
                                <img src="{{asset('photo/'.$partner->img)}}"" alt="" />
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>



@endsection