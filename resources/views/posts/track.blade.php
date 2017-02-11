@extends('layots.app')

@section ('content')

    <div class="col-sm-8 col-sm-offset-2 main">
    <h2>Songs in this album</h2>
    <ol>
        <table style="width:100%">

@if(empty($tracks))
                @foreach ($tracks as $track)
                <tr>
                      <td><li><a href="{{route('posts.editTrack',compact('track') )}}">{{$track->track_title}}</a></li></td>
                <td>------------------</td>
                <td>{{$track->duration}}</td>
                    <td>

                            <a href="{{route('posts.editTrack',compact('track') )}}" class="btn btn-success btn-sm">Edit</a>
                    </td>
                </tr>
                @endforeach
@else <h3 class="warning">There is no any tracks in this album.</h3>
            @endif
        </table>
    </ol>
</div>