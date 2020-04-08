<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <title>Prime Drink</title>
    @include('layouts.web.head')
    @yield('css')
</head>
<body style="overflow: visible;">
<div id="wrapper">
    <header class="header">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-offset-1 col-md-10">
                    <nav class="navbar yamm navbar-default">
                        <div class="container-full">
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    @yield('content')


    <section class="section" id="section-006">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <div style="clear: both;">
                            <img style="height: 30px; float: left;" src="{{asset('images/009.png')}}">

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
                            <img style="height: 30px; float: left;" src="{{asset('images/008.png')}}">

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
                            <img style="height: 30px; float: left;" src="{{asset('images/010.png')}}">

                            <span class="text-footer-1">
                            SOCIALS NETWORK
                        </span>

                            <br> <br>

                            <ul style="padding: 0; list-style: none; display: inline; margin-left: 15px;">
                                <li style="display: inline;">
                                    <img class="imgs-socials-footer" style="" src="{{asset('images/013.png')}}">
                                </li>

                                <li style="display: inline;">
                                    <img class="imgs-socials-footer" style="" src="{{asset('images/012.png')}}">
                                </li>

                                <li style="display: inline;">
                                    <img class="imgs-socials-footer" style="" src="{{asset('images/011.png')}}">
                                </li>

                                <li style="display: inline;">
                                    <img class="imgs-socials-footer" style="" src="{{asset('images/007.png')}}">
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
                                <img style="" src="{{asset('images/006.png')}}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div>
                            <span class="text-footer-menu">
                                Já sou Prime
                            </span>
                            </div>

                            <div class="m-t-5">
                                <img style="" src="{{asset('images/006.png')}}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div>
                            <span class="text-footer-menu">
                                Quero ser Prime
                            </span>
                            </div>

                            <div class="m-t-5">
                                <img style="" src="{{asset('images/006.png')}}">
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
    <footer>
        <div class="container">
            <div class="row">

            </div>
        </div>
    </footer>
</div>

@include('layouts.web.footer-script')

</body>
</html>
