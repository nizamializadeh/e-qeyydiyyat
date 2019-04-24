@component('backend.components.form',$setting)
    {{-- Component content--}}

    <form id="form_validation" action="{{route('universty.update',['universty' => $universty->id])}}" method="post" enctype="multipart/form-data">
        {{method_field('PUT')}}
        @csrf
        <div class="row clearfix">
            <div class="col-sm-12">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="image" type="file" required class="form-control hidden post-image" id="postImage">
                        <label for="postImage" style="cursor: pointer">
                            <img width="150px;" class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$universty->prflimg)}}">
                        </label>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group form-float">
                        <div class="col-sm-6">
                            <img  style="max-height:250px" width="150px"  class="img-responsive thumbnai" src="{{asset('photo/'.$universty->img)}}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="img" type="file"  class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="header" type="text" required class="form-control" value="{{$universty->header}}">
                            <label class="form-label">Header</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="price" type="text" required class="form-control" value="{{$universty->price}}">
                            <label class="form-label">Price</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="year" type="text" required class="form-control" value="{{$universty->year}}">
                            <label class="form-label">Year</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <select name="country_id" id="">

                                @foreach($countries as $country)
                                        <option {{($universty->country_id == $country->id) ? "selected" : ""}} value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                            </select>
                        </div>

                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <textarea name="desc" id="tinymce" aria-hidden="true">{{$universty->desc}} </textarea>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="demo-switch">
                        <button type="submit" class="btn btn-success waves-effect right">Edit Universty</button>
                    </div>
                </div>

            </div>
    </form>
    <hr>
    <div class="col-sm-12 col-md-12 col-lg-12">

    </div>



@endcomponent