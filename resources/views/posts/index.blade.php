@extends('layots.app')

@section ('content')

    <div class="col-sm-8 col-sm-offset-2 main"  >
        <h1>Modern Music Library from around the World!</h1><hr/>
<ol>
    @foreach($posts as $post)
        <h2><li><a href="{{route('posts.show',$post->id )}}" >{{$post->text}}</a></li></h2>

    @endforeach
</ol>
<h6><a href="{{route('posts.create')}}" >Create New Artist</a></h6>
<h6><a href="{{route('posts.createAlbum')}}" >Create New Album</a></h6>
<h6><a href="{{route('posts.createTrack')}}" >Create New Track</a></h6>
</div>
