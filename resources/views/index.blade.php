@extends('layouts.web.master')

@section('content')
    <section class="section" id="section-001">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7"></div>

                <div class="col-md-5 col-sm-5">
                    <form action="{{ route('sendRegister') }}" method="POST" data-toggle="validator" data-focus="false">
                        @csrf
                        <div class="content-form-home">
                            <!-- Mensagem de sucesso no cadastro e envio de e-mail -->
                            @if ($message = Session::get('success'))
                                <div class="alert alert-info alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                        <!-- Mensagem de erro do envio de e-mail -->
                            @if ($message = Session::get('error'))
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                        <!-- Mensagem de erro do Subscription Request -->
                            @if($errors->all())
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $error }}</strong>
                                    </div>
                                @endforeach
                            @endif
                            <div>
                                <span class="text-form-01">Cadastre sua distribuidora e decole!</span>
                            </div>
                            <div class="m-t-10">
                                <span class="text-form-02">Pensou em aumentar a rentabilidade do seu negócio?</span>
                            </div>
                            <div>
                                <span class="text-form-02">Pensou Prime Drink!</span>
                            </div>
                            <div class="m-t-40">
                                <span class="text-form-03">Nome Completo</span>
                                <div>
                                    <input class="form-control" type="text" name="name"
                                           placeholder="Qual o nome completo do dono da distribuidora?" required>
                                </div>
                            </div>
                            <div class="m-t-20">
                                <span class="text-form-03">E-mail</span>
                                <div>
                                    <input class="form-control" type="email" name="email"
                                           placeholder="Qual o e-mail do dono da distribuidora?" required>
                                </div>
                            </div>
                            <div class="m-t-20">
                                <span class="text-form-03">Celular + DDD</span>
                                <div>
                                    <input class="form-control celular" type="text" name="cell"
                                           placeholder="Qual o Celular com DDD do dono da distribuidora?" required>
                                </div>
                            </div>
                            <div class="m-t-30">
                                <span class="text-form-04">Ao continuar, aceito que a Prime Drink entre em contato comigo por telefone, whatsApp ou E-mail (Incluindo mensagens automáticas para credenciamento e ajuda do credenciado).</span>
                            </div>
                            <div class="m-t-10">
                                <button class="btn-lg btn-success btn-block" type="submit">
                                    Iniciar o meu cadastro!
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="section-002">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                    <span class="text-title-sec-2">
                        Venha aumentar seu faturamento com Prime Drink para Distribuidores
                    </span>
                    </div>

                    <div class="text-center m-t-5">
                        <img style="width: 70px;" src="images/024.png">
                    </div>
                </div>
            </div>

            <div class="row m-t-50">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div>
                                <div class="content-info-prime m-t-30">
                                    <div>

                                        <span class="img-info-one"></span>
                                    </div>

                                    <div class="m-t-50">
                                    <span class="text-info-prime-1">
                                        Texto Prime <br>
                                        Texto Prime
                                    </span>
                                    </div>

                                    <div class="m-t-20">
                                    <span class="text-info-prime-2">
                                        Aqui ficará um texto explicativo sobre algum conteúdo importante da Prime Drink Distribuidora
                                    </span>
                                    </div>

                                    <div class="m-t-30">
                                    <span class="text-info-prime-3">
                                        VEJA MAIS
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div>
                                <div class="content-info-prime m-t-30">
                                    <div>

                                        <span class="img-info-two"></span>
                                    </div>

                                    <div class="m-t-50">
                                    <span class="text-info-prime-1">
                                        Texto Prime <br>
                                        Texto Prime
                                    </span>
                                    </div>

                                    <div class="m-t-20">
                                    <span class="text-info-prime-2">
                                        Aqui ficará um texto explicativo sobre algum conteúdo importante da Prime Drink Distribuidora
                                    </span>
                                    </div>

                                    <div class="m-t-30">
                                    <span class="text-info-prime-3">
                                        VEJA MAIS
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div>
                                <div class="content-info-prime m-t-30">
                                    <div>

                                        <span class="img-info-three"></span>
                                    </div>

                                    <div class="m-t-50">
                                    <span class="text-info-prime-1">
                                        Texto Prime <br>
                                        Texto Prime
                                    </span>
                                    </div>

                                    <div class="m-t-20">
                                    <span class="text-info-prime-2">
                                        Aqui ficará um texto explicativo sobre algum conteúdo importante da Prime Drink Distribuidora
                                    </span>
                                    </div>

                                    <div class="m-t-30">
                                    <span class="text-info-prime-3">
                                        VEJA MAIS
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section" id="section-003">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img style="width: 100%;" src="images/023.png">
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="section-004">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                     style="padding: 0px; visibility: visible; animation-duration: 1s; animation-delay: 0.1s;">
                    <div class="module">
                        <div class="blog-image">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <div style="max-width: 380px; margin: auto;">
                                            <div>
                                                <img style="width: 40px; display: inline;" src="images/004.png">

                                                <span class="text-info-visao">
                                                VISÃO
                                            </span>
                                            </div>

                                            <div class="m-t-20" style="text-align: justify;">
                                            <span style="color: #fff;">
                                                Nesse local ficará um texto explicando referente a VISÃO, MISSÃO E VALORES. Aqui é onde vamos explicar sobre todos os pontos que deixam claro quais nosso objetivos no mercado e onde queremos chegar...
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a class="left carousel-control"
                                   href="http://wemoga-001-site42.ftempurl.com/#myCarousel" role="button"
                                   data-slide="prev">
                                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>

                                <a class="right carousel-control"
                                   href="http://wemoga-001-site42.ftempurl.com/#myCarousel" role="button"
                                   data-slide="next">
                                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="section-005">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                    <span class="text-questions-1">
                        <b style="font-weight: 600;">Perguntas</b> frequentes
                    </span>
                    </div>

                    <div class="text-center m-t-5">
                    <span class="text-questions-2">
                        Se você tem dúvidas nós estamos aqui para te ajudar a resolve-las!
                    </span>
                    </div>
                </div>
            </div>

            <div class="row m-t-40">
                <div class="col-md-12">
                    <div class="panel-group" id="accordion" style="max-width: 550px; margin: auto;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-questions">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                       href="http://wemoga-001-site42.ftempurl.com/#collapseOne">
                                        Eu Pago alguma coisa para cadastrar na Prime Drink?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-questions">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                       href="http://wemoga-001-site42.ftempurl.com/#collapseTwo">
                                        Como me cadastro e o que preciso para me cadastrar?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-questions">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                       href="http://wemoga-001-site42.ftempurl.com/#collapseThree">
                                        Tem alguma fidelidade ao me cadastrar?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-questions">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                       href="http://wemoga-001-site42.ftempurl.com/#collapseFor">
                                        Como eu recebo meu dinheiro na Prime Drink?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseFor" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-questions">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                       href="http://wemoga-001-site42.ftempurl.com/#collapseFive">
                                        Quem é o responsável pelas entregas?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section" id="section-006">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <div style="clear: both;">
                            <img style="height: 30px; float: left;" src="images/009.png">

                            <span class="text-footer-1">
                            WHATSAPP - 09H00 - 18H00
                        </span>

                            <br> <br>

                            <span class="text-footer-2">
                            +55 11 94795-0216
                        </span>
                        </div>
                    </div>

                    <div class="m-t-30">
                        <div style="clear: both;">
                            <img style="height: 30px; float: left;" src="images/008.png">

                            <span class="text-footer-1">
                            QUERO FALAR POR E-MAIL!
                        </span>

                            <br> <br>

                            <span class="text-footer-2">
                            serprime@primedrink.com.br
                        </span>
                        </div>
                    </div>

                    <div class="m-t-30">
                        <div style="clear: both;">
                            <img style="height: 30px; float: left;" src="images/010.png">

                            <span class="text-footer-1">
                            SOCIALS NETWORK
                        </span>

                            <br> <br>

                            <ul style="padding: 0; list-style: none; display: inline; margin-left: 15px;">
                                <li style="display: inline;">
                                    <img class="imgs-socials-footer" style="" src="images/013.png">
                                </li>

                                <li style="display: inline;">
                                    <img class="imgs-socials-footer" style="" src="images/012.png">
                                </li>

                                <li style="display: inline;">
                                    <img class="imgs-socials-footer" style="" src="images/011.png">
                                </li>

                                <li style="display: inline;">
                                    <img class="imgs-socials-footer" style="" src="images/007.png">
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <div>
                            <span class="text-footer-menu">
                                Ajuda
                            </span>
                            </div>

                            <div class="m-t-5">
                                <img style="" src="images/006.png">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div>
                            <span class="text-footer-menu">
                                Já sou Prime
                            </span>
                            </div>

                            <div class="m-t-5">
                                <img style="" src="images/006.png">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div>
                            <span class="text-footer-menu">
                                Quero ser Prime
                            </span>
                            </div>

                            <div class="m-t-5">
                                <img style="" src="images/006.png">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="m-t-30">
                                <div>
                                <span class="text-footer-info">
                                    Nesse espaço podemos colocar um texto falando um pouco mais sobre as regras que devem ser seguidas e algo que remete ao contrato geral de credenciamento.
                                </span>
                                </div>

                                <div>
                                <span class="text-footer-info">
                                    Nesse espaço podemos colocar um texto falando um pouco mais sobre as regras que devem ser seguidas e algo que remete ao contrato geral de credenciamento.
                                </span>
                                </div>

                                <div>
                                <span class="text-footer-info">
                                    Nesse espaço podemos colocar um texto falando um pouco mais sobre as regras que devem ser seguidas e algo que remete ao contrato geral de credenciamento.
                                </span>
                                </div>

                                <div>
                                <span class="text-footer-info">
                                    Nesse espaço podemos colocar um texto falando um pouco mais sobre as regras que devem ser seguidas e algo que remete ao contrato geral de credenciamento.
                                </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row m-t-30" style="border-top: 1px solid #4a4a4a; padding-top: 30px;">
                <div class="col-md-12">
                    <div>
                    <span class="text-bottom-footer">
                        *Percentual médio de aumento do faturamento mensal das Distribuidoras.
                    </span>
                    </div>

                    <div class="m-t-5">
                    <span class="text-bottom-footer">
                        A Prime Drink não garante o aumento de 50% (cinquenta por cento) do faturamento mensal das Distribuidoras que se cadastrarem na plataforma.
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
