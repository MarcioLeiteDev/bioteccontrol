@extends('template/admin')

@section('content')

<div class="container_fluid">
    <h3>Categorias de Post</h3>

    <form action="{{url('dashboard/categorias/update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Categoria</label>
            <input type="text" name="category" value="{{$categoria->category}}" class="form-control" />
        </div>
        <div class="form-group">
            <input type="hidden" name="id" value="{{$categoria->id}}" />
            <input type="submit" class="btn btn-success" value="CADASTRAR" />
        </div>
    </form>


   
</div>


@endsection