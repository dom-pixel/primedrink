@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Informações da distribuidora/empório '{{$restaurant->trading_name}}'</div>
                    <div class="card-body">
                        <p class="text-dark">Informações da Distribuidora/Empório:</p>
                        <b><p>Razão Social:</b> {{$restaurant->company_name}}</p>
                        <b><p>Fantasia:</b> {{$restaurant->trading_name}}</p>
                        <b><p>CNPJ:</b> {{$restaurant->cnpj}}</p>
                        <b><p>Telefone:</b> {{$restaurant->phone}}</p>
                        <b><p>Endereço:</b> {{$restaurant->street}}, Nº{{$restaurant->number}},
                        Bairro {{$restaurant->neighborhood}}, {{$restaurant->complement}}, {{$restaurant->city}}
                        /{{$restaurant->state}}, {{$restaurant->zipcode}}</p>
                        <b><p>Especialidade:</b> {{$restaurant->business}}</p>
                        <b><p>Possui delivery:</b> {{($restaurant->delivery === 1 ? 'Sim' : 'Não')}}</p>
                        <p class="text-dark">Informações do Dono:</p>
                        <b><p>Nome Completo:</b> {{$restaurant->full_name}}</p>
                        <b><p>CPF:</b> {{$restaurant->document}}</p>
                        <b><p>RG:</b> {{$restaurant->document_secondary}}
                        / {{$restaurant->document_secondary_complement}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
