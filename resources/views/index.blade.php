@extends('layouts.web.master')

@section('content')
    <section class="section" id="section-001">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7"></div>

                <div class="col-md-5 col-sm-5">
                    <form action="{{ route('sendRegisterSubscription') }}" method="POST" data-toggle="validator"
                          data-focus="false">
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
                        <img style="width: 70px;" src="{{asset('images/024.png')}}">
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
                                        CADASTRO
                                    </span>
                                    </div>

                                    <div class="m-t-20">
                                    <span class="text-info-prime-2">
                                       Rápido, fácil e seguro. Você envia suas informações e um de nossos especialistas entra em contato com você!
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
                                        Ativação
                                    </span>
                                    </div>

                                    <div class="m-t-20">
                                    <span class="text-info-prime-2">
                                       Você tem sua loja vendendo em menos de 24h. É só seguir todas as nossas dicas para configurar sua loja na Prime Drink.
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
                                        Vendas
                                    </span>
                                    </div>

                                    <div class="m-t-20">
                                    <span class="text-info-prime-2">
                                        Aumente o seu volume de vendas em até 30% através de um canal inovador.
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
                    <img style="width: 100%;" src="{{asset('images/023.png')}}">
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
                            <div class=" slide" data-ride="">
                                <div class="inner" role="listbox">
                                    <div class="item active">
                                        <div style="max-width: 380px; margin: auto;">
                                            <div>
                                                <img style="width: 40px; display: inline;"
                                                     src="{{asset('images/004.png')}}">

                                                <span class="text-info-visao">
                                                Quem Somos
                                            </span>
                                            </div>

                                            <div class="m-t-20" style="text-align: justify;">
                                            <span style="color: #fff;">
                                              A Prime Drink está mudando a forma do consumo de bebidas.
                                                Com mercador consolidado e sucesso nas vendas, em dois anos ampliamos nossa abrangência e distribuidores.
                                                Atualmente com atuação efetiva em três estados, os planos de expansâo em território nacional estão cada ves mais presentes na nossa realidade.
                                                Munidos de muita tecnologia e um time formado com os profissionais mais feras do mercado, fornecemos aos nossos parceiros e clientes diferenciais que fazem da Prime Drink única quando o assunto é segurança, rapidez, conforto e, claro, bebidas.
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
