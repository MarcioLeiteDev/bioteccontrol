@extends('template/template')

@section('title' , 'Dedetização de Pulgas')

@section('description' , 'Dedetização de Pulgas')

@section('content')

<div class="container p-4 bg-white">
        <img src="image/pulgas.png" width="100%" alt="dedetização de pulgas" title="dedetização de pulgas" /> 
<h3 class="bordinha text-success p-2"><i class="fa-solid fa-ban text-success"></i> Dedetização de Pulga Tratamento Especial</h3>

<p>As pulgas transmitem a peste bubônica e o tifo, contudo, as pulgas representam um problema para os humanos não só pelo seu potencial transmissor de doenças, mas pelo terível incômodo que podem causar. As pulgas dos cães e gatos podem literalmente infernizar a vida de um pobre mortal!
</p>
<p>Há cerca de 2.000 espécies de pulgas, em todo o globo, parasitando diferentes animais.</p>
<p>A pulga, essa criaturinha minúscula, pode pôr até 2.000 ovos em sua vida!! Esses ovos passam por uma série de transformações que chamamos de ciclo da pulga. É importante saber alguma coisas a respeito das fases da pulga para entender como ocorre a reinfestação.
</p>

<h4>Em seu ciclo a pulga assume quatro formas:</h4>
<table class="table">
    <tbody>
        <tr>
            <td><img src="image/ovo_pulga.gif" width="150" /></td>
            <td>
                <p class="text-danger"><strong>Ovo</strong></p>
                <p>Apesar de serem depositados na pelagem do hospedeiro (um cachorro), os ovos não aderem nem à pele nem aos pêlos do cachorro. Como são escorregadios, eles caem logo no chão, ficando nas frestas do piso, cerdas dos tapetes e carpetes do ambiente. Portanto, podem ser encontrados em qualquer lugar por onde passe um cachorro infestado por pulgas. Os ovos da pulga adulta se transformam em larvas.</p>
            </td>
        </tr>
        <tr>
            <td><img src="image/larva_pulga.gif" width="150" /></td>
            <td>
                <p class="text-danger"><strong>Larva</strong></p>
                <p>As larvas de pulgas evitam a luz, se movimentando para baixo. Portanto, ficam bem escondidas num nível mais profundo dos tapetes, frestas e camas dos cachorros, assim como os ovos. Ao eclodirem, elas passam por duas mudas (transformações) e depois se transformam em pupas. A larva madura transforma-se em pupa.</p>
            </td>
        </tr>
        <tr>
            <td><img src="image/pupa_pulga.gif" width="150" /></td>
            <td>
            <p class="text-danger"><strong>Pupa</strong></p>
                <p>Pouco falamos nesta forma, mas ela é muito importante! A pupa é uma forma dentro de um casulo capaz de sobreviver no ambiente por mais de 6 meses. Por ser viscoso, o casulo é rapidamente coberto com resíduos do ambiente que servem para camuflá-lo. A pupa também se esconde da luz e na maioria das vezes fica tão escondida que por mais que se limpe a casa ou utilize aspirador de pó, é muito difícil acabar com ela.</p></td>
        </tr>
        <tr>
            <td><img src="image/adulta_pulga.gif" width="150" /></td>
            <td>
            <p class="text-danger"><strong>Pulga Adulta</strong></p>  
             <p>A pulga adulta é a que vemos geralmente no cachorro. Ela também pode estar na casinha, na cama ou na coberta do cachorro. A pulga põe ovos e se alimenta de sangue, sendo que sua preferência é pelo sangue dos cachorros que é mais quente que o do ser humano. Ao contrário das larvas, as pulgas recém-eclodidas se movem em direção à luz, ou seja, para a parte superior dos pêlos dos tapetes e da cama dos animais e ficam à espera de um hospedeiro, por exemplo, um cachorro. Também podem subir em capas de sofás, pernas de cadeiras, cortinas e outros móveis.</p>
            </td>
        </tr>
    </tbody>

</table>

<p class="text-danger">Por que vemos mais pulgas somente numa determinada época do ano?
</p>
<p>Condições ideais de temperatura e umidade fazem com que a pupa se transforme em pulga, ou seja, na forma que você vê, que é a pulga adulta. Isso acontece em períodos de calor e umidade! É por isso que notamos a presença de pulgas muito mais no verão! Mas essa á a infestação da forma visível, ou seja, da pulga adulta. Nos outros períodos do ano também ocorre infestação com as outras formas, ou seja, a pupa, a larva e os ovos</p>

<p class="text-danger">As pulgas podem subir nas pessoas?
</p>
<p>Sim. Isso acontece quando o animal / ambiente está muito infestado ou quando o cachorro sai de casa por um período de tempo. Nesse caso, a pulga, precisando alimentar-se e não tendo a presença do animal, acaba subindo nas pessoas.</p>

<div class="row flex">
<div class="col-md-4 col-md-offset-5">
<img src="image/piramide_pulga.gif" width="100%" />
</div>
</div>

<table class="table">
    <tr>
        <td><img src="image/adulta_pulga.gif" width="150" /></td>
        <td>
        <p class="text-danger"><strong>Pulga Adulta</strong></p> 
        <p>Somente 5% do problema são as pulgas adultas que estão no cachorro e que são visíveis. Elas conseguem pôr de 20 a 50 ovos por dia.</p>
        </td>
    </tr>
    <tr>
        <td><img src="image/ovo_pulga.gif" width="150" /></td>
        <td>
        <p class="text-danger"><strong>Ovo</strong></p> 
        <p>50% do problema são os ovos que são depositados pelas pulgas adultas no cachorro. Eles logo caem no ambiente e eclodem dentro de 1 a 6 dias, formando as larvas.</p>
        </td>
    </tr>
    <tr>
        <td><img src="image/larva_pulga.gif" width="150" /></td>
        <td>
        <p class="text-danger"><strong>Larva</strong></p> 
        <p>35% do problema são as larvas que possuem fototropismo negativo e geotropismo positivo, buscando assim lugares profundos e escuros para se protegerem da luz e ressecação. As larvas se transformam em pupas dentro de 7 a 15 dias.</p>
        </td>
    </tr>
    <tr>
    <td><img src="image/pupa_pulga.gif" width="150" /></td>
    <td>
    <p class="text-danger"><strong>Pupa</strong></p> 
    <p>10% do problema são as pupas que se assemelham ao casulo do bicho-da-seda. Como as pupas são pegajosas, partículas do ambiente grudam nelas, o que as torna praticamente impermeáveis e as protegem dos produtos de limpeza e de dedetizações. Além disso, elas podem permanecer no ambiente por até 6 meses, antes de se transformarem em pulgas jovens novamente, o que dificulta bastante seu controle ambiental.</p>
    </td>
    </tr>
</table>



</div>

@endsection