@extends('layouts.web.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('front/formulario.css')}}">
@endsection

@section('content')
    <section class="section" id="section-009">
        <div class="container">
            <div class="row">
                <img src="{{asset('images/logo-full.png')}}" class="aligncenter" width="212" alt="alt here">
                <div class="col-md-2 col-sm-2"></div>
                <div class="col-md-8 col-sm-8">
                    <div class="content-form-home">
                        <div class="m-t-20">
                            <div class="text-center">
                                <img src="{{asset('images/2.png')}}" class="aligncenter" width="212"
                                     alt="alt here">
                                <span class="text-form-00">Cadastro finalizado!</span>
                            </div>
                            <br/>
                            <p class="m-b-20">Isso aí, {{session()->get('full_name') ?? 'Membro Prime'}}! .</p>
                            <p class="m-b-20">Seu cadastro foi enviado para nossos
                                especialistas
                                e você receberá um e-mail de confirmação referente ao seu credenciamento.
                                Agora falta pouco para ser PRIME!
                                Aguarde o contato de um de nossos especialistas em seu número de contato ou através
                                do
                                e-mail para finalizar seu credenciamento!
                            </p>
                            <p class="m-b-20">Um abraço 😉</p>
                            <div class="m-t-20">
                                <a href="{{route('landingPage')}}" class="btn-sm btn-success">
                                    Voltar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script-bottom')

@endsection
