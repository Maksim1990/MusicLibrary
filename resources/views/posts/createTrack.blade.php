@extends('layots.app')

@section ('content')
    <div class="top" >
        <h1><a href="{{URL::to('/posts')}}">Music Library</a></h1>
        <p>Connecting music World!</p>
    </div>
    <div class="col-sm-8 col-sm-offset-2 main">
        {!! Form::open(['method'=>'POST','action'=>'SongController@store'])!!}
        <div class="form-group">
            <label for="">Choose Album:</label>
            <select class="form-control input-sm" name="album_id" id="album_id">
                @foreach($album as $alb)
                    <option value="{{$alb->id}}">{{$alb->album}}     </option>
                @endforeach
            </select>
        </div>
    <div class="form-group">
        {!! Form::label('track_title','Track Title:') !!}
        {!! Form::text('track_title', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('duration','Duration:') !!}
        {!! Form::text('duration', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create Track') !!}
    </div>
    {!! Form::close() !!}
    </div>