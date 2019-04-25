@extends('layouts.frontend.frontend')
@section('content')
    <div class="breadcumb-area bg-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Universitet</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcumb-area end -->
    <div class="course-area ptb-120 bg-2">
        <div class="course-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-6 col-sm-10">
                        <div class="course-form">
                            <ul>
                                <li>
                                    <select class="select-form" name="" id="country">
                                        <option value="">Ölkə seç</option>
                                    @foreach($countries as $country)
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="grid">
                        <div class="course-active2 course-col3" id="unis">
                            @foreach($univestetys as $univestety)
                                <div class="col-xs-12">
                                    <div class="course-item">
                                        <div class="course-img">
                                            <img src="{{asset('photo/'.$univestety->img)}}" alt="" />
                                        </div>
                                        <div class="course-content">
                                            <h3><a href="#">{{$univestety->header}}</a></h3>
                                            <div class="course-meta">
                                                <ul>
                                                    <li><i class="fa fa-globe" aria-hidden="true"></i>{{$univestety->name}}</li>
                                                    <li><i class="fa fa-clock-o"></i>{{$univestety->year}}</li>
                                                </ul>
                                            </div>
                                            <a href="{{ route('universitydetail', $univestety->id) }}" class="btn-style">Ətraflı</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
