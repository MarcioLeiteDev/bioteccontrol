<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Orçamento Bio Control Pragas</title>
</head>
<style type="text/css">
    body {
        font-size: 0.8em;
    }
</style>

<body>
    <table class="table">
        <tbody>
            <tr>
                <td>
                    <!--img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsnTZJ8INd8lV0MxujVoQDPmPc8Q4PFPGMsg&usqp=CAU" /-->
                    <H3 class="text-right">DEDETIZADORA E DESENTUPIDORA </H3>
                </td>
               
            </tr>

        </tbody>
    </table>
    <table class="table">
        <tbody>

            <tr>
                <td class="text-center">
                    <h3 class="text-center">ORÇAMENTO BIO TEC CONTROL </h3>
                    <p class="text-center">www.bioteccontrol.com.br</p>
                </td>
            </tr>

        </tbody>

    </table>

    <table class="table">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Empresa</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{$budget->name}}</td>
                <td>{{$budget->company}}</td>
                <td>{{$budget->email}}</td>
                <td>{{$budget->phone}}</td>
            </tr>
        </tbody>

    </table>

    <table class="table">
        <thead>
            <tr>
                <th>Endereço</th>

            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{$budget->street}} Nº {{$budget->number}} - {{ $budget->complement}} - {{ $budget->counter }} - {{ $budget->city }}</td>

            </tr>
        </tbody>
    </table>

    <table class="table">
        <thead>
            <tr>
                <th>Orçamento</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    {!! $budget->content !!}
                </td>
            </tr>
        </tbody>
    </table>

    <table class="table">
        <thead>
            <tr>
                <th>Preço</th>
                <th>Forma de Pagamento</th>
                <th>Garantia</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{number_format($budget->price,2,"," , ".")}}</td>
                <td>{{$budget->payment_method}}</td>
                <td>{{$budget->warranty}}</td>
            </tr>
        </tbody>

    </table>

    <table class="table">
        <tbody>
            <tr>
                <td>
                    <p>Orçamento Válido por 15 dias...</p>
                    <p>BIO TEC CONTROL (11) 94858-3294</p>
            
            </td>
            </tr>
        </tbody>
    </table>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>