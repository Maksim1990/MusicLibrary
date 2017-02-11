@extends('layots.app')

@section ('content')
    <div class="col-sm-8 col-sm-offset-2 main">
        {!! Form::open(['method'=>'POST','action'=>'AlbumController@store'])!!}

        <div class="form-group">
            <label for="">Choose Artist:</label>
            <select class="form-control input-sm" name="post_id" id="post_id">
                @foreach($artist as $art)
                    <option value="{{$art->id}}">{{$art->text}}     </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {!! Form::label('album','Album Title:') !!}
            {!! Form::text('album', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('year','Year:') !!}
            {!! Form::text('year', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Album') !!}
        </div>
        {!! Form::close() !!}
    </div>