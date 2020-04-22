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


    <section class="section" id="section-012">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('sendRegisterSubscription') }}" method="POST" data-toggle="validator"
                          data-focus="false">
                        @csrf
                        <div class="content-form-home">
                            <div>
                                <span class="text-form-01">Receba informações sobre o maior delivery de bebidas do mundo!</span>
                            </div>
                            <div class="m-t-10">
                                <span class="text-form-02">se inscreve e receba novidades do mercado de delivery!</span>
                            </div>
                            <div class="m-t-40">
                                <input class="form-control" type="email" name="email"
                                       placeholder="Insira seu e-mail aqui" required>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <a href="https://www.facebook.com/primedrinkoficial" target="_blank"><img
                    class="imgs-socials-footer" style="float: right; width: 30px; height: 30px; margin-top: 5px;"
                    src="{{asset('images/face.png')}}"></a>

            <a href="https://www.instagram.com/primedrinkoficial" target="_blank"><img
                    class="imgs-socials-footer"
                    style="float: right; width: 30px; height: 30px; margin-top: 5px;"
                    src="{{asset('images/insta.png')}}"></a>

            <div class="row m-t-20" style="border-top: 1px solid #4a4a4a; margin-top: 40px">
                <div class="col-md-12">
                    <div>
                        <img style="height: 50px; float: left; margin-top: 5px;" src="{{asset('images/prime.png')}}">
                        <img style="height: 20px; float: left; margin-top: 17px; margin-left: 5px;"
                             src="{{asset('images/socio.png')}}">
                    </div>

                    <div class="m-t-20">
                        <span class="text-bottom-footer" style="color:#000;">
                            Todos os direitos reservados a Prime Drink Company
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('layouts.web.footer-script')

</body>
</html>
