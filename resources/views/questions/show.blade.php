@extends('template')

@section('content')
    <div class="container">
        <h1>{{$question->title}}</h1>
        <p class="lead">
            {{$question->description}}
        </p>
        <hr>
        <!--display all answer for this questions-->
        @foreach($question->answers as $item)
            <div class="panel panel-default">
                <div class="panel-body">
                    {{$item->content}}
                </div>
            </div>    
        @endforeach

        <!--display form Submit all answer for this questions-->
        <form action="{{route('answers.store')}}" method="POST">
            {{csrf_field()}}
            <h4>Submmit question here:</h4>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
            <input type="hidden" value="{{$question->id}}" name="question_id">
            <button type="submit" class="btn btn-primary">Save answer</button>
        </form>
    </div>
@endsection