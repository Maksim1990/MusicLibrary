@extends('layots.app')

@section ('content')
    <div class="top" >
        <h1><a href="{{URL::to('/posts')}}">Music Library</a></h1>
        <p>Connecting music World!</p>
    </div>
    <div class="col-sm-8 col-sm-offset-2 main">
        <h1>Edit Album</h1>
        {!! Form::model($album,['method'=>'PATCH','action'=>['AlbumController@update',$album->id]])!!}
        {{ csrf_field() }}

        <div class="form-group">
            {!! Form::label('album','Album Name:') !!}
            {!! Form::text('album', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update Album') !!}
        </div>
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE','action'=>['AlbumController@destroy',$album->id]])!!}
        {{ csrf_field() }}
        {!! Form::submit('Delete Album') !!}

        {!! Form::close() !!}
    </div>

    @yield('footer')