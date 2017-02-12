@extends('layots.app')

@section ('content')
    <div class="top" >
        <h1><a href="{{URL::to('/posts')}}">Music Library</a></h1>
        <p>Connecting music World!</p>
    </div>
    <div class="col-sm-8 col-sm-offset-2 main">
    <h2>Songs in this album</h2>
    <ol>
        @if(!$tracks->isEmpty())
        <table style="width:100%">
<tr>
    <th>Artist</th>
    <th></th>
    <th>Album</th>
    <th></th>
    <th>Year</th>
    <th></th>
    <th>Track Name</th>
    <th></th>
    <th>Duration</th>
    <th>Actions</th>
</tr>

                @foreach ($tracks as $track)
                @foreach ($post as $pos)
                <tr>
                    <td><li><a href="{{route('posts.edit', compact('pos'))}}" >{{$pos->text}}</a></li></td>
                    <td>---------</td>
                    <td><a href="{{route('posts.editAlbum',compact('album') )}}">{{$album->album}}</a></td>
                    <td>---------</td>
                    <td>{{$album->year}}</td>
                    <td>---------</td>
                      <td><a href="{{route('posts.editTrack',compact('track') )}}">{{$track->track_title}}</a></td>
                <td>---------</td>
                <td>{{$track->duration}}</td>
                    <td>
                        <a href="{{route('posts.edit', compact('pos'))}}" class="btn btn-info btn-sm but">Edit Artist</a>
                        <a href="{{route('posts.create')}}" class="btn btn-info btn-sm but">Create Artist</a><br>
                        <a href="{{route('posts.editAlbum',compact('album') )}}" class="btn btn-warning btn-sm but">Edit Album</a>
                        <a href="{{route('posts.createAlbum' )}}" class="btn btn-warning btn-sm but">Create Album</a><br>
                            <a href="{{route('posts.editTrack',compact('track') )}}" class="btn btn-success btn-sm but">Edit Track</a>
                        <a href="{{route('posts.createTrack' )}}" class="btn btn-success btn-sm but">Create Track</a>
                    </td>

                </tr>

                @endforeach
            @endforeach
            <hr>
        </table>
        @else <p class="warning">There are no tracks in this album yet!
            <a href="{{route('posts.createTrack')}}" class="btn btn-sm btn-danger dan">Create New Track</a>
        </p>
        @endif
    </ol>
</div>