@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Informações da distribuidora/empório '{{$restaurant->trading_name}}'</div>
                    <div class="card-body">
                        <a class="btn btn-link" href="{{ route('home') }}">
                            Voltar
                        </a>
                        <b><p class="text-dark">Informações da Distribuidora/Empório:</p></b>
                        <p>Razão Social: {{$restaurant->company_name}}</p>
                        <p>Fantasia: {{$restaurant->trading_name}}</p>
                        <p>CNPJ: {{$restaurant->cnpj}}</p>
                        <p>Telefone: {{$restaurant->phone}}</p>
                        <p>Endereço: {{$restaurant->street}}, Nº{{$restaurant->number}},
                            Bairro {{$restaurant->neighborhood}}, {{$restaurant->complement}}, {{$restaurant->city}}
                            /{{$restaurant->state}}, {{$restaurant->zipcode}}</p>
                        <p>Especialidade: {{$restaurant->business}}</p>
                        <p>Possui delivery: {{($restaurant->delivery === 1 ? 'Sim' : 'Não')}}</p>
                        <b><p class="text-dark">Informações do Dono:</p></b>
                        <p>Nome Completo: {{$restaurant->full_name}}</p>
                        <p>CPF: {{$restaurant->document}}</p>
                        <p>RG: {{$restaurant->document_secondary}}
                            / {{$restaurant->document_secondary_complement}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
