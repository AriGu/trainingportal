<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Org;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // SQL:
        //$posts = DB::select('SELECT * FROM posts');

        //Eloquent:
        //$posts = Post::all();
        
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        // $alphAscPosts = Post::orderBy('org', 'asc')->get();
        // $alphDescPosts = Post::orderBy('org', 'desc')->get();
        // $dateAscPosts = Post::orderBy('date', 'asc')->get();
        // $dateDescPosts = Post::orderBy('date', 'desc')->get();
        // FETCHES ONY ONE:
        // $dateDescPosts = Post::orderBy('date', 'desc')->take(1)->get();

        return view ('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orgs = Org::all();        
        return view ('posts.create')->with('orgs', $orgs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'clinic' => 'required',
            'date' => 'required',
            'time' => 'required',
            'note' => 'required'
        ]);

        //CREATE POST
        $post = new Post;
        $post ->org_name = $request->input('clinic');
        $post ->date = $request->input('date');
        $post ->time = $request->input('time');
        $post ->content = $request->input('note');
        $post ->user_id = auth()->user()->id;

        $post->save();

        return redirect('/dashboard')->with('success', 'Post Created');
       
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $orgs = Org::all();                
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post)->with('orgs', $orgs); 
        
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
        $this->validate($request, [
            'clinic' => 'required',
            'date' => 'required',
            'time' => 'required',
            'note' => 'required',
        ]);
                    $post = Post::find($id);
                    $post ->org_name = $request->input('clinic');
                    $post->date = $request->input('date');
                    $post->time = $request->input('time');
                    $post->content = $request->input('note');
                    
                    
                    $post->save();
                    return redirect('/dashboard')->with('success', 'Post Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/dashboard')->with('success', 'Post Removed');
    }
}
