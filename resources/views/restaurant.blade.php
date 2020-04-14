@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Informações do {{$restaurant->trading_name}}</div>
                    <div class="card-body">
                        <p class="sub-header">Formulário de edição de dados cadastrais. </p>
                        <b><p>Razão Social:</b> {{$restaurant->company_name}}</p>
                        <b><p>Fantasia:</b> {{$restaurant->trading_name}}</p>
                        <b><p>CNPJ:</b> {{$restaurant->cnpj}}</p>
                        <b><p>Telefone:</b> {{$restaurant->phone}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
