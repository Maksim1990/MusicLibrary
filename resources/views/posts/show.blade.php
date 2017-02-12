@extends('layots.app')

@section ('content')

    <div class="col-sm-8 col-sm-offset-2 main">
<h1 class="head"><a href="{{route('posts.edit', compact('post'))}}" >{{$post->text}}</a></h1>
    <ul>
        @if(!$post->albums->isEmpty())
@foreach ($post->albums as $album)
    <li class="link"><h3><a href="{{route('posts.track',$album->id )}}" >{{$album->album}}, [{{$album->year}}]</a></h3>
        <a href="{{route('posts.editAlbum',compact('album') )}}" class="btn btn-success btn-sm">Edit</a></li>
@endforeach
        @else <p class="warning">There are no albums of this user yet!</p>
        @endif
    </ul>
</div>
