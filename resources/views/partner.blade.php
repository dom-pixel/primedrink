@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Informações da distribuidora/empório '{{$subscription->trading_name}}'</div>
                    <div class="card-body">
                        <a class="btn btn-link" href="{{ route('home') }}">
                            Voltar
                        </a>
                        <b><p class="text-dark">Informações da Distribuidora/Empório:</p></b>
                        <p>Razão Social: {{$subscription->company_name}}</p>
                        <p>Fantasia: {{$subscription->trading_name}}</p>
                        <p>CNPJ: {{$subscription->cnpj}}</p>
                        <p>Telefone:{{$subscription->phone}} </p>
                        <p>Endereço: {{$subscription->street}}, Nº{{$subscription->number}},
                            Bairro {{$subscription->neighborhood}}, {{$subscription->complement}}, {{$subscription->city}}
                            /{{$subscription->state}}, {{$subscription->zipcode}}</p>
                        <p>Especialidade: {{$subscription->business}}</p>
                        <p>Possui delivery: {{($subscription->delivery === 1 ? 'Sim' : 'Não')}}</p>
                        <b><p class="text-dark">Informações do Dono:</p></b>
                        <p>Nome Completo: {{$subscription->full_name}}</p>
                        <p>CPF: {{$subscription->document}}</p>
                        <p>RG: {{$subscription->document_secondary}}
                            / {{$subscription->document_secondary_complement}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
