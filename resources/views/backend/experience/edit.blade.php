@component('backend.components.form',$setting)
    {{-- Component content--}}

    <form id="form_validation" action="{{route('experience.update',['experience' => $experience->id])}}" method="post" enctype="multipart/form-data">
        {{method_field('PUT')}}
        @csrf
        <div class="row clearfix">
            <div class="col-sm-12">

                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="count" type="text" required class="form-control" value="{{$experience->count}}">
                            <label class="form-label">count</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="header" type="text" required class="form-control" value="{{$experience->header}}">
                            <label class="form-label">header</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="desc" type="text" required class="form-control" value="{{$experience->desc}}">
                            <label class="form-label">desc</label>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="demo-switch">
                        <button type="submit" class="btn btn-success waves-effect right">Edit Experience</button>
                    </div>
                </div>

            </div>
    </form>

    </div>



@endcomponent