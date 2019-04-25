@component('backend.components.form',$settings)
    {{-- Component content--}}
    <form id="form_validation" action="{{route('experience.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="row clearfix">
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="count" type="text" required class="form-control">
                        <label class="form-label">Count</label>
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
                        <input name="desc" type="text" required class="form-control">
                        <label class="form-label">desc</label>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="demo-switch">
                    <button type="submit" class="btn btn-success waves-effect right">Create experience</button>
                </div>
            </div>
    </form>
@endcomponent