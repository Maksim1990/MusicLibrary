@extends('layots.app')

@section ('content')

    <div class="col-sm-8 col-sm-offset-2 main">
    <h2>Songs in this album</h2>
    <ol>
        @foreach ($tracks as $track)
            <li>{{$track->track_title}}  -----  {{$track->duration}}
            <a href="{{route('posts.editTrack',compact('track') )}}" class="btn btn-success btn-sm">Edit</a></li>
        @endforeach
    </ol>


</div>