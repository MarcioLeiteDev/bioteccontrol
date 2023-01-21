@extends('template/admin')

@section('content')

<div class="container_fluid">
    <h3>Atualizar Serviços</h3>
    <form method="post" action="update_service" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-3">
                <label>Empresa</label>
                <input type="text" name="company" value="{{$service->company}}" class="form-control" />
            </div>
            <div class="col-md-3">
                <label>Cliente</label>
                <input type="text" name="name" value="{{$service->name}}" class="form-control" />
            </div>
            <div class="col-md-3">
                <label>CPF</label>
                <input type="text" name="cpf" value="{{$service->cpf}}" class="form-control" />
            </div>
            <div class="col-md-3">
                <label>CNPJ</label>
                <input type="text" name="cnpj" value="{{$service->cnpj}}" class="form-control" />
            </div>
            <div class="col-md-6">
                <label>E-mail</label>
                <input type="text" name="email" value="{{$service->email}}" class="form-control" />
            </div>
            <div class="col-md-6">
                <label>Telefone</label>
                <input type="text" name="phone" value="{{$service->phone}}" class="form-control" />
            </div>
            <div class="form-group col-md-3">
                            <label class="vinte">
                                CEP
                            </label>
                            <input name="cep" type="text" id="cep" value="{{$service->cep}}"  class="form-control" maxlength="9" onblur="pesquisacep(this.value);" />
                        </div>

                        <div class="form-group col-md-7">
                            <label>
                                END.RES: </label>
                            <input name="street" type="text" value="{{$service->street}}"  id="street" class="form-control" />
                        </div>
                        <div class="form-group col-md-2">
                            <label>Numeroº</label>
                            <input name="number" type="text" value="{{$service->number}}"  id="number" class="form-control" />

                        </div>

                        <div class="form-group col-md-5">
                            <label>
                                COMPLEMENTO:
                            </label>
                            <input name="complement" type="text" value="{{$service->complement}}"  id="complement" class="form-control" />
                        </div>

                        <div class="form-group col-md-3">
                            <label> BAIRRO : </label>
                            <input name="counter" type="text" value="{{$service->counter}}" id="counter" class="form-control" />
                        </div>

                        <div class="form-group col-md-2">
                            <label>CIDADE: </label>

                            <input name="city" type="text" value="{{$service->city}}"  id="city" class="form-control" />
                        </div>

                        <div class="form-group col-md-2">
                            <label>ESTADO: </label>

                            <input name="state" type="text" value="{{$service->state}}"  id="state" class="form-control" />
                        </div>
            <div class="col-md-6">
                <label>Tipo Serviço</label>
                <select name="service" class="form-control">
                    <option value="{{$service->service}}">{{$service->service}}</option>
                        <option value="DEDETIZAÇÃO">DEDETIZAÇÃO</option>
                        <option value="DESENTUPIMENTO">DESENTUPIMENTO</option>
                        <option value="OUTROS">OUTROS</option>
                </select>
            </div>
            <div class="col-md-6">
                <label>Garantia</label>
                <input type="text" value="{{$service->warranty}}" name="warranty" class="form-control" />
            </div>

            <div class="col-md-12">
                <label>Orçamento</label>
                <textarea name="content" id="mytextarea" class="form-control" >
                {{$service->content}}
                </textarea>
            </div>
            <div class="col-md-4">
                <label>Preço</label>
                <input type="text" value="{{$service->price}}" name="price" class="form-control" />
            </div>
            <div class="col-md-4">
                <label>Forma de Pagamento</label>
                <input type="text" value="{{$service->payment_method}}" name="payment_method" class="form-control" />
            </div>
            <div class="col-md-4">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="1">Aguardando execução</option>
                    <option value="2">Executado</option>
                    <option value="3">Cancelado</option>

                </select>
            </div>
            <div class="col-md-12 p-3">
                <input type="hidden" name="id" value="{{$service->id}}" />
                <input type="submit" value="+ CADASTRAR" class="btn btn-success" />
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