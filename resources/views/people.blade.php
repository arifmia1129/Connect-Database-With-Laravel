@foreach ($data as $people)
    {{ $people->id.'-'.$people->name }}
    <br>

@endforeach

{{ $data->links() }}
