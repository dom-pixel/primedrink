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
                                        GANHE MAIS
                                    </span>
                                    </div>

                                    <div class="m-t-20">
                                    <span class="text-info-prime-2">
                                       Com a Prime Drink é possível aumentar o volume de suas vendas, gerando ainda mais lucro para seu negócio.
                                       <br/>
                                       <br/>
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
                                        LOGÍSTICA DE ENTREGA
                                    </span>
                                    </div>

                                    <div class="m-t-20">
                                    <span class="text-info-prime-2">
                                       Você não precisa de motoboy próprio. Disponibilizamos um sistema inteligente de logística com os maiores players do mercado
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
                                        VISIBILIDADE
                                    </span>
                                    </div>

                                    <div class="m-t-20">
                                    <span class="text-info-prime-2">
                                        Com nosso aplicativo é possível atrair novos clientes na sua região de atuação e garantir mais visibilidade ao seu negócio.
                                      <br/>
                                       <br/>
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
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <div style="max-width: 380px; margin: auto;">
                                            <div>
                                                <img style="width: 40px; display: inline;"
                                                     src="{{asset('images/004.png')}}">

                                                <span class="text-info-visao" style="color: #000;">
                                                MISSÃO
                                            </span>
                                            </div>

                                            <div class="m-t-20" style="text-align: justify;">
                                            <span style="color: #000;">
                                                A Prime Drink está mudando a forma de consumir bebidas.
                                                <br/>
                                                <br/>
                                                Nossa logística de atuação está estruturada para levar até nossos clientes os mais variados tipos de bebidas.
                                                <br/>
                                                <br/>
                                                Fornecemos aos nossos parceiros e clientes diferenciais que fazem da Prime Drink única quando o assunto é segurança, rapidez, conforto e, claro, bebidas.
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div style="max-width: 380px; margin: auto;">
                                            <div>
                                                <img style="width: 40px; display: inline;"
                                                     src="{{asset('images/004.png')}}">

                                                <span class="text-info-visao" style="color: #000;">
                                                VISÃO
                                            </span>
                                            </div>

                                            <div class="m-t-20" style="text-align: justify;">
                                            <span style="color: #000;">
                                                Com mercado consolidado e sucesso nas vendas, em dois anos ampliamos nossa abrangência e distribuidores.
                                                <br/>
                                                <br/>
                                                Atualmente com atuação efetiva em três estados, os planos de expansão em território nacional estão cada vez mais presentes na nossa realidade.
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div style="max-width: 380px; margin: auto;">
                                            <div>
                                                <img style="width: 40px; display: inline;"
                                                     src="{{asset('images/004.png')}}">

                                                <span class="text-info-visao" style="color: #000;">
                                                VALORES
                                            </span>
                                            </div>

                                            <div class="m-t-20" style="text-align: justify;">
                                            <span style="color: #000;">
                                                <b>Segurança</b> - um dos carros chefes da Prime Drink, oferecer um serviço de qualidade a nossos parceiros e clientes é essencial para mover nossa empresa.
                                                <br/>
                                                <br/>
                                                <b>Responsabilidade</b> - com a Prime Drink você pode consumir sua bebida preferida sem precisar sair de casa, você colabora com a redução de acidentes e, acima de tudo, preserva vidas.
                                                 <br/>
                                                 <br/>
                                                <b>Comprometimento</b> - com nossa equipe, parceiros e clientes. A Prime Drink evolui diariamente para cumprir o propósito do nosso negócio, ser simples, fácil e seguro.
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a class="left carousel-control"
                                   href="#myCarousel" role="button"
                                   data-slide="prev">
                                    <span class="fa fa-angle-left" aria-hidden="true" style="color: #000;"></span>
                                    <span class="sr-only">Previous</span>
                                </a>

                                <a class="right carousel-control"
                                   href="#myCarousel" role="button"
                                   data-slide="next">
                                    <span class="fa fa-angle-right" aria-hidden="true" style="color: #000;"></span>
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
                                       href="#collapseOne">
                                        Eu Pago alguma coisa para cadastrar na Prime Drink?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    A Prime Drink possui um plano atualmente isento de mensalidade. É cobrado somente
                                    10% sobre o valor de cada pedido realizado na plataforma. Os pedidos com pagamento
                                    on-line pelo app têm desconto de 3,7% referente a taxa de transação cobrada pelos
                                    cartões. Lembrando que a taxa de 10% por pedido é realizada uma vez a cada mês de
                                    acordo com a negociação comercial.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-questions">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseTwo">
                                        O que preciso para realizar o meu cadastro?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Para fazer parte da Prime Drink é preciso ter CNPJ cadastrado no nome da empresa, um
                                    computador com Windows (a partir do 7) e internet no seu local de trabalho, para
                                    receber os pedidos.
                                    <br/>
                                    <br/>
                                    Para se cadastrar é fácil, rápido e seguro. Inicie o cadastro acima e preenchendo
                                    todas as informações solicitadas, após este processo, nossos especialistas entrarão
                                    em contato para ativação.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-questions">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseThree">
                                        Tem alguma fidelidade ao me cadastrar?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Não temos fidelidade em nosso contrato, podendo ser cancelado a qualquer momento.
                                    Com isso você pode permanecer em nossa plataforma o tempo que desejar.
                                    <br/>
                                    <br/>
                                    *Exceto para parceiros exclusivos Prime Drink.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-questions">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseFor">
                                        Como eu recebo meu dinheiro na Prime Drink?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseFor" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Os pedidos com pagamento realizados pelo app da Prime Drink são repassados ao
                                    restaurante via transferência bancária em até 30 (trinta) dias.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-questions">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseFive">
                                        Quem é o responsável pelas entregas?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Um dos grandes diferenciais da Prime Drink é disponibilizar, em seu plano, a conexão
                                    com os maiores players de logística de entrega para facilitar o dia a dia do nosso
                                    parceiro, mas isso não impede o credenciado ter a sua equipe de entregadores.A
                                    <br/>
                                    <br/>
                                    Testes realizados por nossos especialistas, detectaram que as entregas realizadas
                                    por nossos players geram custo menor e menos preocupação para nossos parceiros.
                                    <br/>
                                    <br/>
                                    Lembramos que a gestão da solicitação do pedido e a pontualidade da entrega é de
                                    responsabilidade do parceiro Prime Drink, evitando qualquer desconforto com o
                                    cliente final.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
