@extends('template/admin')

@section('content')


<div class="container_fluid">

@if(session('msg'))

<div class='alert alert-info'>{{session('msg')}}</div>

@endif
    <h2>Atualizar Clientes</h2>
    <form name="form" action="./cad" method="post" class="form" enctype="multipart/form-data">
    @csrf
    
    <div class="row">

    <div class="col-md-3">
        <label>Empresa</label>
        <input type="text" name="company" value="{{$customer->company}}" class="form-control" />
    </div>
    <div class="col-md-3">
        <label>Nome</label>
        <input type="text" name="name" value="{{$customer->name}}" class="form-control" />
    </div>
    <div class="col-md-3">
        <label>CNPJ</label>
        <input type="text" name="cnpj" value="{{$customer->cnpj}}" class="form-control" />
    </div>
    <div class="col-md-3">
        <label>CPF</label>
        <input type="text" name="cpf" value="{{$customer->cpf}}" class="form-control" />
    </div>
    <div class="col-md-6">
        <label>E-mail</label>
        <input type="text" name="email" value="{{$customer->email}}" class="form-control" />
    </div>
    <div class="col-md-6">
        <label>Telefone</label>
        <input type="text" name="phone" value="{{$customer->phone}}" class="form-control" />
    </div>
    <div class="form-group col-md-3">
                            <label class="vinte">
                                CEP
                            </label>
                            <input name="cep" type="text" id="cep" value="{{$customer->cep}}" class="form-control" maxlength="9" onblur="pesquisacep(this.value);" />
                        </div>

                        <div class="form-group col-md-7">
                            <label>
                                END.RES: </label>
                            <input name="street" type="text" value="{{$customer->street}}" id="street" class="form-control" />
                        </div>
                        <div class="form-group col-md-2">
                            <label>Numeroº</label>
                            <input name="number" type="text" value="{{$customer->number}}" id="number" class="form-control" />

                        </div>

                        <div class="form-group col-md-5">
                            <label>
                                COMPLEMENTO:
                            </label>
                            <input name="complement" type="text" value="{{$customer->complement}}" id="complement" class="form-control" />
                        </div>

                        <div class="form-group col-md-3">
                            <label> BAIRRO : </label>
                            <input name="counter" type="text" value="{{$customer->counter}}" id="counter" class="form-control" />
                        </div>

                        <div class="form-group col-md-2">
                            <label>CIDADE: </label>

                            <input name="city" type="text" value="{{$customer->city}}" id="city" class="form-control" />
                        </div>

                        <div class="form-group col-md-2">
                            <label>ESTADO: </label>

                            <input name="state" type="text" value="{{$customer->state}}" id="state" class="form-control" />
                        </div>

                        <div class="form-group col-md-12">
                            <input type="hidden" name="id" value="{{$customer->id}}" />
                            <input type="submit" value="+ CADASTRAR" class="btn btn-success p-2" />
                        </div>

    </div>

    </form>
</div>


<!-- Adicionando Javascript -->
<script type="text/javascript">
    function limpa_formulário_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('street').value = ("");
        document.getElementById('counter').value = ("");
        document.getElementById('city').value = ("");
        document.getElementById('state').value = ("");

    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('street').value = (conteudo.logradouro);
            document.getElementById('counter').value = (conteudo.bairro);
            document.getElementById('city').value = (conteudo.localidade);
            document.getElementById('state').value = (conteudo.uf);

        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('street').value = "...";
                document.getElementById('counter').value = "...";
                document.getElementById('city').value = "...";
                document.getElementById('state').value = "...";


                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
</script>

@endsection