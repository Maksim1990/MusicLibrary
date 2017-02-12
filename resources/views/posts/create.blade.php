@extends('layots.app')

@section ('content')
    <div class="top" >
        <h1><a href="{{URL::to('/posts')}}">Music Library</a></h1>

        <p>Connecting music World!</p>
    </div>
    <div class="col-sm-8 col-sm-offset-2  main" >
    {!! Form::open(['method'=>'POST','action'=>'PostController@store'])!!}
    {{--{{ csrf_field() }}--}}
    {{--<input type="hidden" name="_method" value="PUT">--}}
    {{--<input type="text" name="text" placeholder="Type your text"  value="{{$post->text}}" >--}}

    {{--<input type="submit" name="submit" value="UPDATE">--}}
    <div class="form-group">
        {!! Form::label('text','Artist Name:') !!}
        {!! Form::text('text', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::submit('Create New Artist') !!}
    </div>
    {!! Form::close() !!}


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>
