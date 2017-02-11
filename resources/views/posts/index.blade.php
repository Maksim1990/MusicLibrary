@extends('layots.app')

@section ('content')
    <link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <div class="col-sm-8 col-sm-offset-2 main"  >
<ol>
    @foreach($posts as $post)
        <h1><li><a href="{{route('posts.show',$post->id )}}" >{{$post->text}}</a></li></h1>

    @endforeach
</ol>
<h6><a href="{{route('posts.create')}}" >Create New Artist</a></h6>
<h6><a href="{{route('posts.createAlbum')}}" >Create New Album</a></h6>
<h6><a href="{{route('posts.createTrack')}}" >Create New Track</a></h6>
</div>
