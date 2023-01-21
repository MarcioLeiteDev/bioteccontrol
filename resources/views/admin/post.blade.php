@extends('template/admin')

@section('content')

<div class="container_fluid">
    <h3>Post</h3>

    <div class="row">

    <div class="col-md-4">
    <a href="{{url('dashboard/categorias')}}"><button class="btn btn-info">Categorias</button> </a>

    <table class="table">
    <thead>
        <tr>
            <th>Categoria</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categoria as $categorias)
        <tr>
            <td>{{$categorias->category}}</td>
            <td><a href="categorias/edit/{{$categorias->id}}"><button class="btn btn-info">Editar</button></a></td>
            <td><a href="categorias/destroy/{{$categorias->id}}"><button class="btn btn-danger">Deletar</button></a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>    
    <div class="col-md-8">
   <a href="post/create"> <button class="btn btn-warning">Post</button> </a>

   <table class="table">
    <thead>
        <tr>
            <th>Imagem</th>
            <th>Titulo</th>
            <th>Slug</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($post as $posts)
        <tr>
            <td><img src="/image/{{$posts->image}}" width="100%" /></td>
            <td>{{$posts->title}}</td>
            <td>{{$posts->slug}}</td>
            <td><a href="post/edit/{{$posts->id}}"><button class="btn btn-info">Editar</button></a></td>
            <td><a href="post/destroy/{{$posts->id}}"><button class="btn btn-danger">Deletar</button></a></td>
        </tr>
        @endforeach
    </tbody>

   </table>
    </div>
    </div>

   
</div>


@endsection