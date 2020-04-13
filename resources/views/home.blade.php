@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-responsive-lg table-responsive">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Estabelecimento</th>
                                <th>E-mail</th>
                                <th>Celular</th>
                                <th>Cidade/Estado
                                <th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->restaurant->trading_name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td class="celular">{{$user->cell}}</td>
                                    <td>{{$user->restaurant->city}}/ {{$user->restaurant->state}}</td>
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
