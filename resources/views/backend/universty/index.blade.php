@component('backend.components.table',$settings)
    {{-- Component content--}}
    @foreach($univestetys as $univestety)
        <tr>
            <td>{{$univestety->id}}</td>
            <td><img width="75  " class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$univestety->prflimg)}}"></td>
            <td><img width="75  " class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$univestety->img)}}"></td>
            <td>{{$univestety->header}}</td>
            <td>{!! $univestety->desc !!}</td>
            <td>{{$univestety->price}}</td>
            <td>{{$univestety->year}}</td>
            <td>{{$univestety->name}}</td>
            <td>
                <form action="{{route('universty.destroy',['universty' => $univestety->id])}}" method="post">
                    {{ method_field('delete') }}
                    @csrf
                    <a class="btn bg-blue btn-circle waves-effect waves-circle waves-float" href="{{route('universty.edit',['slider' => $univestety->id])}}"><i class="material-icons">edit</i></a>
                    <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endcomponent