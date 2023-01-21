<?php

namespace App\Http\Controllers;

use App\Models\PostCateg;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class PostCategController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/postcateg');
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
        $slug = Str::slug( $request->category , '-');

        $categ = new PostCateg();
        $categ->category = $request->category;
        $categ->slug = $slug;

        $categ->save();

        return redirect('dashboard/post')->with('msg' , 'CATEGORIA CADASTRADA COM SUCESSO');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

        $categoria = PostCateg::findOrFail($id);

        return view('admin/postcategedit' , ['categoria' => $categoria ]);
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
        $slug = Str::slug( $request->category , '-');

        $categoria = PostCateg::find($request->id);
        $categoria->category = $request->category;
        $categoria->slug = $slug;

        $categoria->save();

        return redirect('dashboard/post')->with('msg' , 'CATEGORIA EDITADA COM SUCESSO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = PostCateg::findOrFail($id)->delete();
        return redirect('dashboard/post')->with('msg' , 'CATEGORIA DELETADA COM SUCESSO');
    
    }
}
