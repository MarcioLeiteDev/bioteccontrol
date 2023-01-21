@extends('template/admin')

@section('content')


<div class="conteiner_fluid">
    <h2>EDITAR ORÇAMENTO</h2>

    <form action="update_budget" method="post">
        @csrf
        <div class="row">
            <div class="col-md-3">
                <label>Nome</label>
                <input type="text" name="name" value="{{$budget->name}}" class="form-control" />
            </div>
            <div class="col-md-3">
                <label>Empresa</label>
                <input type="text" name="company" value="{{$budget->company}}" class="form-control" />
            </div>
            <div class="col-md-3">
                <label>E-mail</label>
                <input type="text" name="email" value="{{$budget->email}}"  class="form-control" />
            </div>
            <div class="col-md-3">
                <label>Telefone</label>
                <input type="text" name="phone" value="{{$budget->phone}}"  class="form-control" />
            </div>
            <div class="form-group col-md-3">
                            <label class="vinte">
                                CEP
                            </label>
                            <input name="cep" type="text" value="{{$budget->cep}}" id="cep"  class="form-control" maxlength="9" onblur="pesquisacep(this.value);" />
                        </div>

                        <div class="form-group col-md-7">
                            <label>
                                END.RES: </label>
                            <input name="street" type="text" value="{{$budget->street}}"  id="street" class="form-control" />
                        </div>
                        <div class="form-group col-md-2">
                            <label>Numeroº</label>
                            <input name="number" type="text" value="{{$budget->number}}"  id="number" class="form-control" />

                        </div>

                        <div class="form-group col-md-5">
                            <label>
                                COMPLEMENTO:
                            </label>
                            <input name="complement" type="text" value="{{$budget->complement}}"  id="complement" class="form-control" />
                        </div>

                        <div class="form-group col-md-3">
                            <label> BAIRRO : </label>
                            <input name="counter" type="text" value="{{$budget->counter}}" id="counter" class="form-control" />
                        </div>

                        <div class="form-group col-md-2">
                            <label>CIDADE: </label>

                            <input name="city" type="text" value="{{$budget->city}}" id="city" class="form-control" />
                        </div>

                        <div class="form-group col-md-2">
                            <label>ESTADO: </label>

                            <input name="state" type="text" value="{{$budget->state}}"  id="state" class="form-control" />
                        </div>
            <div class="col-md-3">
                <label>Tipo Serviço</label>
                <select name="service" class="form-control">
                    <option value="{{$budget->service}}">{{$budget->service}}</option>
                        <option value="DEDETIZAÇÃO">DEDETIZAÇÃO</option>
                        <option value="DESENTUPIMENTO">DESENTUPIMENTO</option>
                        <option value="OUTROS">OUTROS</option>
                </select>
            </div>
            <div class="col-md-3">
                <label>Garantia</label>
                <input type="text" name="warranty" value="{{$budget->warranty}}" class="form-control" />
            </div>

            <div class="col-md-12">
                <label>Orçamento</label>
                <textarea name="content" id="mytextarea" class="form-control" >
                {{$budget->content}}
                </textarea>
            </div>
            <div class="col-md-4">
                <label>Preço</label>
                <input type="text" name="price" value="{{$budget->price}}" class="form-control" />
            </div>
            <div class="col-md-4">
                <label>Forma de Pagamento</label>
                <input type="text" name="payment_method" value="{{$budget->payment_method}}" class="form-control" />
            </div>
            <div class="col-md-4">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="{{$budget->status}}">{{$budget->status}}</option>
                    <option value="1">Em Analise (1)</option>
                    <option value="2">Aprovado (2)</option>
                    <option value="3">Cancelado (3)</option>
            </select>
            </div>
            <div class="col-md-12 p-3">
                <input type="hidden" name="id" value="{{$budget->id}}"  />
                <input type="submit" value="+ ATUALIZAR" class="btn btn-success" />
            </div>


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