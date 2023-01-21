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
  <body>
    <table class="table">
        <tbody>
            <tr>
                <td><img src="./../../../image/logo.png" /></td>
                <td class="text-right">
                    BIO CONTROL PRAGAS
                </td>
            </tr>
        
        </tbody>

        <tbody>
            
            <tr>
                <td class="text-center"><h3 class="text-center">CONTRATO BIO CONTROL PRAGAS</h3></td>
            </tr>
            
</tbody>      

    </table>

    <table class="table">
    <thead>
            <tr>
                <th>Cliente</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{$service->name}}</td>
                <td>{{$service->email}}</td>
                <td>{{$service->phone}}</td>
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
                <td>{{$service->street}} nº {{$service->number}} </td>
       
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
                {!! $service->content !!}
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
                <td>{{number_format($service->price,2,"," , ".")}}</td>
                <td>{{$service->payment_method}}</td>
                <td>{{$service->warranty}}</td>
            </tr>
        </tbody>

    </table>
<div class="container_fluid">
<H3>Condições Gerais</H3>
<p>Por este instrumento particular de um lado doravante simplesmente denominada CONTRATADA, a empresa BIO TEC - CONTROL.  DEDETIZADORA E DESENTUPIDORA  ME e, de outro doravante simplesmente denominado CONTRATANTE, o consumidor qualificado no anverso deste, têm entre si justo e contratado.</p>
<h3>1-DO SERVIÇO</h3>
<p>A CONTRATADA se compromete a prestar seus serviços técnicos ao CONTRATANTE no que refere a  DESINSETIZAÇÃO , DESRATIZAÇÃO, DESCUPINIZAÇÃO E DESENTUPIMENTO de acordo com o que foi estipulado no anverso.</p>
<h3>2- DA EXECUÇÃO DO SERVIÇO.</h3>
<p>Uma vez da autorização para execução dos serviços, relatados no anverso, pelo CONTRATANTE, o mesmo poderá acompanhar até a conclusão dos trabalhos efetuados, e firmará recibo fornecido pela  CONTRATADA,  descriminando a  quantidade de material utilizado, a fim de que se evitem dúvidas no que se refere.</p>
<h3>3- DA RESPONSABILIDADE DA CONTRATADA.</h3>
<p>A CONTRATADA se utilizará de equipamentos específicos de acordo com sua moderna tecnologia conforme as necessidades apresentadas para conclusão dos serviços. A CONTRATADA não se responsabiliza pelos danos causados pelas infestações dos insetos tais como: Cupim subterrâneo, cupins de solo, cupins de madeira seca, brocas, carunchos, entre outros, anteriormente à aplicação dos produtos,</p>
<p>A CONTRATADA Responsabiliza-se pela quantidade de produto que exceder a avaliação do orçamento prévio. </p>
<p>A CONTRATADA, não se responsabiliza pelos locais não tratados.</p>
<h3>4- DA RESPONSABILIDADE DO CONTRATANTE.</h3>
<p>As partes poderão rescindir o presente a qualquer momento, conforme o prazo estipulado de 12 meses, discriminado no anverso deste, por tratar-se de controle de pragas urbanas anual, executado mensalmente sem multa para ambas as partes, tendo o contratante o dever de acerto de custos operacionais, decorrentes do mês (caso já tenha sido realizado a manutenção do controle de pragas urbana mensal)</p>
<p>4.1- Para realização dos serviços de Descupinização o CONTRATANTE deverá apresentar ao técnico operacional, as plantas elétrica, hidráulica e de tubulação de gás, antes de iniciarem-se os serviços. Na falta das plantas acima o CONTRATANTE poderá disponibilizar um profissional de sua confiança para indicar os pontos a serem perfurados. </p>
<p>O CONTRATANTE responsabilizar-se-á por eventuais rompimentos de canos, caso não tenha apresentado as plantas solicitadas nem indicado os locais das perfurações. </p>
<h3>5- DO PAGAMENTO.</h3>
<p>O CONTRATANTE terá opção de liquidar seu debito pelo serviço prestado pela CONTRATADA da seguinte forma:</p>
<p>(a) Á vista;</p>
<p>(b) Á prazo;</p>
<h3>6- DO VALOR DOS SERVIÇOS: </h3>
<p>Pagará o CONTRATANTE à CONTRATADO pelo serviço prestado o valor de R${{number_format($service->price,2,"," , ".")}}</p>
<p>Nas condições  {{$service->payment_method}} de acordo com item 5, preço certo e estabelecido, que será pago de acordo com artigo 947 do CC.</p>
<h3>7- DA GARANTIA A CONTRATADA </h3>
<p>garante aos serviços prestados contar da data deste contrato até {{date('d/m/Y',strtotime($service->warranty))}}, para observação da eficácia quanto ao serviço, dependendo para isto estar em dia com os pagamentos das parcelas, conforme a clausula “COND. PAGTO”, no anverso deste. A insatisfação referente à quantidade dos serviços resultara na revisão dos mesmos, sem qualquer ônus para o CONTRATANTE dentro do prazo Estabelecido. A garantia da aplicação para o controle Integrado de Pragas Urbanas está nas condições do local a ser, aplicado, na quantidade da praga alvo e nas orientações dadas pelo aplicador, para que o efeito esperado da garantia possa ser atingido </p>
<h3>8- DA COBRANÇA. </h3>
<p>A COBRANÇA tem conhecimento que a presente contratação dá em caráter irretratável e irrevogável, responsabilizando-se.</p>
<p>O CONTRATANTE pelo pagamento do preço ajustado, caso não efetue o pagamento no prazo pactuado, haverá ainda cobrança das, 0despezas resultantes da falta de pagamento, inclusive custas cartoriais (protesto), processuais, honorários advocatícios e demais combinações legais a serem estipuladas em juízo. Em caso de inadimplemento indicara sobre o valor de multa de 10% (DEZ POR CENTO), conforme autoriza o código de defesa do consumidor.</p>
<p>Fica eleito pelas partes para dirimir conflitos provenientes do presente, como para qualquer ação competente decorrente da relação, o fórum central da capital – SP.</p>
<p>9- estando de acordo com as disposições acima, assinam o presente, para ter validade legal em duas vias de igual teor e forma</p>

<p class="text-center">São Paulo, {{date('d')}}, de {{date('M')}} de {{date('Y')}}</p>

<div class="row">
    <div class="col-4">
    <table class="table">
    <thead>
        <tr>Contratada</tr>
    </thead>
    <tbody>
        <tr>
            <td>.</td>
        </tr>
        <tr>
            <td class="text-info">Bio Tec Control Dedetizadora e Desentupidora Ltda-me</td>
        </tr>
    </tbody>
    </table>
    </div>
    <div class="col-2"></div>
    <div class="col-4">
    <table class="table">
    <thead>
        <tr>Contratante</tr>
    </thead>
    <tbody>
        <tr>
            <td>.</td>
        </tr>
        <tr>
            <td>{{$service->company}} {{$service->name}}</td>
        </tr>
    </tbody>
    </table>
    </div>
</div>


</div>
    

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>