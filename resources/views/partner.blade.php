@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Informações do '{{$subscription->name}}'</div>
                    <div class="card-body">
                        <a class="btn btn-link" href="{{ route('home') }}">
                            Voltar
                        </a>
                        <b><p class="text-dark">Informações do interessado em ser sócio Prime:</p></b>
                        <p>Nome Completo: {{$subscription->name}} {{$subscription->surname}}</p>
                        <p>Telefone:{{$subscription->cell}} </p>
                        <p>E-mail: {{$subscription->email}}</p>
                        <p>Cidade e Estado: {{$subscription->city}}/{{$subscription->state}}</p>
                        <p>Cidade de interesse: {{$subscription->city_of_interest}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
