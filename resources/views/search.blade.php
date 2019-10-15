@extends('layouts.main')

@section('content')

@foreach($searchResults as $searchResults)
<ul>
    <li><a href="{{ $searchResults->url }}">{{ $searchResults->title }}</a></li>
</ul>

@endforeach


@endsection