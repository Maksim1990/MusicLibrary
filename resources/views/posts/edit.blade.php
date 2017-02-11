@extends('layots.app')

@section ('content')
    <div class="col-sm-8 col-sm-offset-2 main">
    <h1>Edit Artist Name</h1>
    {!! Form::model($post,['method'=>'PATCH','action'=>['PostController@update',$post->id]])!!}
        {{ csrf_field() }}

    <div class="form-group">
        {!! Form::label('text','Artist Name:') !!}
        {!! Form::text('text', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Artist') !!}
    </div>
    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE','action'=>['PostController@destroy',$post->id]])!!}
        {{ csrf_field() }}
    {!! Form::submit('Delete Artist') !!}

    {!! Form::close() !!}
</div>

    @yield('footer')