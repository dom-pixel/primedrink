@extends('layouts.web.master-socio')

@section('css')
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section class="section" id="section-010">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7"></div>

                <div class="col-md-5 col-sm-5">
                    <form action="{{ route('sendRegisterSubscription') }}" method="POST" data-toggle="validator"
                          data-focus="false">
                        @csrf
                        <div class="content-form-socio">
                            <span class="text-form-socio-01">Seja um Sócio Operador!</span>
                            <div class="m-t-40">
                                <input class="form-control" type="text" name="name"
                                       placeholder="Nome" required>
                            </div>
                            <div class="m-t-10">
                                <input class="form-control" type="text" name="surname"
                                       placeholder="Sobrenome" required>
                            </div>
                            <div class="m-t-10">
                                <input class="form-control celular" type="email" name="email"
                                       placeholder="E-mail" required>
                            </div>
                            <div class="m-t-10">
                                <input class="form-control celular" type="text" name="cell"
                                       placeholder="Telefone" required>
                            </div>
                            <div class="m-t-10">
                                <input class="form-control celular" type="text" name="cell"
                                       placeholder="Selecione um estado" required>
                            </div>
                            <div class="m-t-10">
                                <input class="form-control celular" type="text" name="cell"
                                       placeholder="Cidade onde você mora" required>
                            </div>
                            <div class="m-t-10">
                                <input class="form-control celular" type="text" name="cell"
                                       placeholder="Cidade de interesse" required>
                            </div>
                            <div class="m-t-10">
                                <button class="btn-lg btn-yellow btn-block" type="submit">
                                    QUERO SER UM FRANQUEADO
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <img style="width: 100%;" src="{{asset('images/26.png')}}">
@endsection
