@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Sócios Prime Drink</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th>E-mail</th>
                                <th>Celular</th>
                                <th>Cidade/Estado</th>
                                <th>Cidade de interesse</th>
                                <th>Mais Informações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subscriptions as $subscription)
                                <tr>
                                    <td>{{$subscription->id}}</td>
                                    <td>{{$subscription->name}}</td>
                                    <td>{{$subscription->surname}}</td>
                                    <td>{{$subscription->email}}</td>
                                    <td>{{$subscription->cell}}</td>
                                    <td>{{$subscription->city}}/ {{$subscription->state}}</td>
                                    <td>{{$subscription->city_of_interest}}</td>
                                    <td>
                                        <a href="{{route('infoPartner', ['id'=>$subscription->id])}}">Sobre
                                            o interessado</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Estabelecimentos/Distribuidoras</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Estabelecimento</th>
                                <th>E-mail</th>
                                <th>Celular</th>
                                <th>Cidade/Estado</th>
                                <th>Mais Informações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->restaurant->trading_name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->cell}}</td>
                                    <td>{{$user->restaurant->city}}/ {{$user->restaurant->state}}</td>
                                    <td>
                                        <a href="{{route('info', ['id'=>$user->restaurant_id])}}">Sobre
                                            o local</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
