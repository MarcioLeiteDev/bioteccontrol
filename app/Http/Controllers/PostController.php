<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCateg;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = PostCateg::orderBy('id', 'DESC')->get();

        $post = Post::orderBy('id', 'DESC')->get();

        return view('admin/post' , ['categoria' => $categoria , 'post' => $post ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function input()
    {
       
        $categoria = PostCateg::all();

        return view('admin/postcreate' , [ 'categoria' => $categoria ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $slug = Str::slug( $request->title , '-');

        $post = new Post();
        $post->category = $request->category;
        $post->title = $request->title;
        $post->slug = $slug;
        $post->content = $request->content;

        if($request->hasFile('image') ** $request->file('image')->isValid()){

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $request->image->move(public_path('image/') , $imageName);

            $post->image = $imageName;
        }else{
            null;
        }

        $post->save();

        return redirect('dashboard/post')->with('msg' , 'POST CADASTRADO COM SUCESSO');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = PostCateg::all();
        $post = Post::findOrFail($id);
        return view('admin/postedit' , ['categoria' => $categoria , 'post' => $post ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function post()
    {
      
        $server = $_SERVER['REQUEST_URI'];
        $trata = explode('/' , $server);
        $parametro = $trata['2'];

        $conteudo = Post::where('slug' , $parametro )->get();

        return view('post' , ['conteudo' => $conteudo ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $slug = Str::slug( $request->title , '-');

        $post = Post::findOrFail($request->id);
        $post->category = $request->category;
        $post->title = $request->title;
        $post->slug = $slug;
        $post->content = $request->content;

        if($request->hasFile('image') ** $request->file('image')->isValid()){

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $request->image->move(public_path('image/') , $imageName);

            $post->image = $imageName;
        }else{
            null;
        }

        $post->save();

        return redirect('dashboard/post')->with('msg' , 'POST EDITADO COM SUCESSO');

     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id)->delete();

        return view('admin/post')->with('msg','Post DELETADO COM SUCESSO');
    }
}
