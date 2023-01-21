@extends('template/admin')

@section('content')

<div class="container_fluid">
    <h3>Cadastrar Post</h3>
    <form action="store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Categoria</label>
            <select class="form-control" name="category">
                @foreach($categoria as $categorias)
                <option value="{{$categorias->category}}">{{$categorias->category}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" name="title" class="form-control" />
        </div>

        <div class="form-group">
            <label>Conteudo</label>
            <textarea name="content" id="mytextarea" class="form-control" ></textarea>
        </div>

        <div class="form-group">
            <label>Imagem</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success"  value="CADASTRAR"/>
        </div>

    </form>
</div>

<script src="https://cdn.tiny.cloud/1/m3hz4cg05xyawh6oij7oqfhs82e3sbhwud17vgxco9lbbg4j/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
@endsection