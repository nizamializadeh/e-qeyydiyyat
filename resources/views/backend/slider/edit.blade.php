@component('backend.components.form',$setting)
    {{-- Component content--}}

    <form id="form_validation" action="{{route('slider.update',['slider' => $slider->id])}}" method="post" enctype="multipart/form-data">
        {{method_field('PUT')}}
        @csrf
        <div class="row clearfix">
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="img" type="file" required class="form-control hidden post-image" id="postImage">
                        <label for="postImage" style="cursor: pointer">
                            <img width="150px;" class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$slider->img)}}">
                        </label>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="header" value="{{$slider->header}}" type="text" required class="form-control">
                            <label class="form-label">Header</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="desc" value="{{$slider->desc}}" type="text" required class="form-control">
                            <label class="form-label">Desc</label>
                        </div>
                    </div>
                </div>




            <div class="col-sm-12">
                <div class="demo-switch">
                    <button type="submit" class="btn btn-success waves-effect right">Edit Slider</button>
                </div>
            </div>

        </div>

    <hr>
</div>




@endcomponent