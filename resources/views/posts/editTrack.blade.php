@extends('layots.app')

@section ('content')
    <div class="top" >
        <h1><a href="{{URL::to('/posts')}}">Music Library</a></h1>
        <p>Connecting music World!</p>
    </div>
    <div class="col-sm-8 col-sm-offset-2 main">
        <h1>Edit Album</h1>
        {!! Form::model($track,['method'=>'PATCH','action'=>['SongController@update',$track->id]])!!}
        {{ csrf_field() }}

        <div class="form-group">
            {!! Form::label('track_title','Album Name:') !!}
            {!! Form::text('track_title', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('duration','Track Duration:') !!}
            {!! Form::text('duration', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update Track') !!}
        </div>
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE','action'=>['SongController@destroy',$track->id]])!!}
        {{ csrf_field() }}
        {!! Form::submit('Delete Track') !!}

        {!! Form::close() !!}
    </div>

    @yield('footer')