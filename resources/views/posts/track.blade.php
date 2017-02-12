@extends('layots.app')

@section ('content')

    <div class="col-sm-8 col-sm-offset-2 main">
    <h2>Songs in this album</h2>
    <ol>
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
</tr>

                @foreach ($tracks as $track)
                @foreach ($post as $pos)
                <tr>
                    <td><li>{{$pos->text}}</li></td>
                    <td>-----------</td>
                    <td>{{$album->album}}</td>
                    <td>-----------</td>
                    <td>{{$album->year}}</td>
                    <td>-----------</td>
                      <td><a href="{{route('posts.editTrack',compact('track') )}}">{{$track->track_title}}</a></td>
                <td>-----------</td>
                <td>{{$track->duration}}</td>
                    <td>
                            <a href="{{route('posts.editTrack',compact('track') )}}" class="btn btn-success btn-sm">Edit Track</a>
                    </td>
                </tr>
                @endforeach
            @endforeach
        </table>
    </ol>
</div>