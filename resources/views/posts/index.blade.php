@extends('layots.app')

@section ('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <div class="col-sm-8 col-sm-offset-2 main"  >

        <h1 class="head">Modern Music Library from around the World!</h1>
        <span class="col-sm-8 col-sm-offset-4 nav"  >
        <a href="{{route('posts.create')}} " class="btn btn-sm btn-success" >Create New Artist</a>
        <a href="{{route('posts.createAlbum')}}" class="btn btn-sm btn-info ">Create New Album</a>
        <a href="{{route('posts.createTrack')}}" class="btn btn-sm btn-warning ">Create New Track</a>

        </span>
        <hr/>
        <div class="border"></div>

<ol>
    @foreach($posts as $post)
        <h2><li class="link"><a href="{{route('posts.show',$post->id )}}" >{{$post->text}}</a>
        <a  class="btn btn-info btn-sm but-{{$post->id}}">Show available Albums</a></li></h2>
<div class="al-list list-{{$post->id}}">
    <ul>
    @foreach($post->albums as $pos)
   <li><a href="{{route('posts.track',$pos->id )}}" >{{$pos->album}}, [{{$pos->year}}]</a>
       <a  class="btn btn-warning btn-sm but-tr-{{$pos->id}}">Show available Tracks</a></li>
            <div class="tr-list list-tr-{{$pos->id}}">
                <ol>
                    @foreach($pos->tracks as $tr)
                   <li>{{$tr->track_title}}</li>
                    @endforeach
                </ol>
            </div>
            <script>
            $( ".but-tr-{{$pos->id}}" ).on( "click", function() {
            $(".list-tr-{{$pos->id}}").toggle();
            });
            </script>
    @endforeach
    </ul>
</div>

  <script>
      $( ".but-{{$post->id}}" ).on( "click", function() {
          $(".list-{{$post->id}}").toggle();
      });
  </script>
    @endforeach
</ol>
        <div class="border"></div>
<h6><a href="{{route('posts.create')}}" >Create New Artist</a></h6>
<h6><a href="{{route('posts.createAlbum')}}" >Create New Album</a></h6>
<h6><a href="{{route('posts.createTrack')}}" >Create New Track</a></h6>
</div>


