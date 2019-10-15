@extends('layouts.main')
@section('content')

<h1>AI</h1>
@foreach ($aiitem as $aiitem)
    <li><a href="{{ $aiitem->routes }}">{{ $aiitem->name }}</a></li>
    <form action="/item/ai/{{ $aiitem->item_id }}/edit" method="GET">
        <button type="submit">Update</button>
    </form>
    <form action="/item/ai/{{ $aiitem->item_id }}/delete" method="POST">
    @method('delete')
    @csrf
    <button type="submit">Delete</button>
    </form>

@endforeach
<h2>Equipment</h2>
@foreach ($equipitem as $equipitem)
<li><a href="{{ $equipitem->routes }}">{{ $equipitem->name }}</a></li>
@endforeach



@endsection