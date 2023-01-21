<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

use Illuminate\Http\Response;


class EventController extends Controller
{
    function home(){
        return view('welcome');
    }

    function empresa(){
        return view('empresa');
    }

    function barata(){
        return view('dedetizacao_baratas');
    }

    function cupim(){
        return view('dedetizacao_cupim');
    }

    function escorpiao(){
        return view('escorpiao');
    }

    function formiga(){
        return view('formiga');
    }

    function carrapato(){
        return view('carrapato');
    }

    function percevejo(){
        return view('percevejo');
    }

    function pombo(){
        return view('pombo');
    }

    function pulga(){
        return view('pulga');
    }

    function rato(){
        return view('rato');
    }

    function caixa_agua(){
        return view('caixa_agua');
    }

    function desentupimento(){
        return view('desentupimento');
    }

    function localizacao(){
        return view('localizacao');
    }

    function area(){
        $post = Post::all();
        return view('area' , ['post' => $post]);
    }


        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function post(){

        $server = $_SERVER['REQUEST_URI'];
        $trata = explode('/' , $server);
        $parametro = $trata['2'];

       $conteudo = Post::where('slug' , $parametro )->get();

        return view('post' , ['conteudo' => $conteudo ]);
    }

    function contato(){
        return view('contato');
    }

    function adminHome(){
        
        return view('admin/home');
    }
}
