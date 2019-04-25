@component('backend.components.form',$settings)
    {{-- Component content--}}
    <form id="form_validation" action="{{route('universty.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="row clearfix">

            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="prflimg" type="file" required="required" class="form-control hidden post-image" id="postImage">
                        <label for="postImage" style="cursor: pointer">
                            <img class="img-responsive thumbnail post-img-preview"   src="{{asset('admin/images/image-gallery/thumb/thumb-15.jpg')}}">
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="img" type="file" multiple required class="form-control " >
                        <label  style="cursor: pointer">
                            images
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="header" type="text" required class="form-control">
                        <label class="form-label">Header</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="price" type="text" required class="form-control">
                        <label class="form-label">Price</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="year" type="text" required class="form-control">
                        <label class="form-label">Year</label>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <select name="country_id" id="">
                            @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>

                            @endforeach
                        </select>
                    </div>

                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="demo-radio-button">
                        <input name="type" type="radio" id="radio_1" value="0">
                        <label for="radio_1">popular </label>
                        <input name="type" type="radio" id="radio_2"  checked="" value="1">
                        <label for="radio_2">don't popular</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group form-float">
                    <div class="form-line">
                        <textarea name="desc" id="tinymce" aria-hidden="true"> </textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="demo-switch">
                    <button type="submit" class="btn btn-success waves-effect right">Create category</button>
                </div>
            </div>
    </form>
@endcomponent