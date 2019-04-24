@component('backend.components.form',$setting)
    {{-- Component content--}}

    <form id="form_validation" action="{{route('country.update',['country' => $country->id])}}" method="post" enctype="multipart/form-data">
        {{method_field('PUT')}}
        @csrf
        <div class="row clearfix">
            <div class="col-sm-12">

                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="name" type="text" required class="form-control" value="{{$country->name}}">
                            <label class="form-label">Name</label>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="demo-switch">
                        <button type="submit" class="btn btn-success waves-effect right">Edit Country</button>
                    </div>
                </div>

            </div>
    </form>

    </div>



@endcomponent