@extends('template')

@section('content')
<div class="container">
    <h1>Recent questions</h1>
    <hr/>
    @foreach($questions as $item)
        <div class="well">
            <h2> {{$item->title}}</h2>
            <p>  {{$item->description}}</p>
            <a href="{{route('questions.show', $item->id)}}" class="btn btn-success">Show details</a>
        </div>
    @endforeach
    {{$questions->links()}}
</div>
@endsection