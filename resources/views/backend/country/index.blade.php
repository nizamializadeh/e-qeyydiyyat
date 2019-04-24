@component('backend.components.table',$settings)
    {{-- Component content--}}
    @foreach($countries as $country)
        <tr>
            <td>{{$country->id}}</td>
            <td>{{$country->name}}</td>
            <td>
                <form action="{{route('country.destroy',['country' => $country->id])}}" method="post">
                    {{ method_field('delete') }}
                    @csrf
                    <a class="btn bg-blue btn-circle waves-effect waves-circle waves-float" href="{{route('country.edit',['country' => $country->id])}}"><i class="material-icons">edit</i></a>
                    <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endcomponent