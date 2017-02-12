<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Album;
use App\Song;
use App\Http\Requests;
use Illuminate\View\Middleware\ErrorBinder;
use App\Http\Requests\CreatePostRequest;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function track($id){
        $album=Album::findOrFail($id);
        $tracks=$album->tracks;
        $post=Post::where('id',$album->post_id)->get();
        $posts=Post::all();
        return view('posts.track', compact('tracks','posts','album','post'));
    }

    public function index()
    {
      $posts=Post::all();

      return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts=Post::all();

        return view('posts.create',compact('posts'));
    }
    public function createTrack(){
        $album=Album::all();
        $posts=Post::all();
        return view('posts.createTrack',compact('album','posts'));
    }

    public function createAlbum(){
     $artist=Post::all();
        $posts=Post::all();
        return view('posts.createAlbum',compact('artist','posts'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
     // return $request->all();
//           $this->validate($request, [
//            'text'=>'required',
//            'body'=>'required'
//        ]);
        Post::create($request->all());
        return redirect('/posts');
    }
    public function storeTrack(CreatePostRequest $request)
    {
        Song::create($request->all());
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::findOrFail($id);
        $posts=Post::all();

      return view('posts.show', compact('post','posts'));
    }
    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::findOrFail($id);
        $posts=Post::all();
        return view('posts.edit', compact('post','posts'));
    }
    public function editAlbum($id)
    {
        $album=Album::findOrFail($id);
        $posts=Post::all();
        return view('posts.editAlbum', compact('album','posts'));
    }
    public function editTrack($id)
    {
        $track=Song::findOrFail($id);
        $posts=Post::all();
        return view('posts.editTrack', compact('track','posts'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $post=Post::findOrFail($id);
       $post->update($request->all());
       return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::findOrFail($id);
        $post->delete();
        return redirect('/posts');
    }

    public function home()
    {
        return view('/posts');
    }


  
}
