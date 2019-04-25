@extends('layouts.frontend.frontend')
@section('content')
    <div class="course-details-area bg-2 ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="course-wrap mb-50">
                        <img src="{{asset('photo/'.$univestetys->img)}}" alt="" />
                        <h3>{{$univestetys->header}}</h3>
                        <div class="course-meta">
                            <ul>
                                <li><i class="fa fa-globe" aria-hidden="true"></i> {{$univestetys->name}}</li>
                                <li><i class="fa fa-clock-o"></i> {{$univestetys->year}}</li>
                                <li><i class="fa fa-usd" aria-hidden="true"></i>
                                    {{$univestetys->price}}</li>
                            </ul>
                        </div>

                        <p>
                        {!! $univestetys->desc !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection