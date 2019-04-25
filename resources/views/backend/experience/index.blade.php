@component('backend.components.table',$settings)
    {{-- Component content--}}
    @foreach($experiences as $country)
        <tr>
            <td>{{$country->id}}</td>
            <td>{{$country->count}}</td>
            <td>{{$country->header}}</td>
            <td>{{$country->desc}}</td>
            <td>
                <form action="{{route('experience.destroy',['experience' => $country->id])}}" method="post">
                    {{ method_field('delete') }}
                    @csrf
                    <a class="btn bg-blue btn-circle waves-effect waves-circle waves-float" href="{{route('experience.edit',['experience' => $country->id])}}"><i class="material-icons">edit</i></a>
                    <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endcomponent