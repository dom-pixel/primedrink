@extends('layouts.web.master')
@section('css')
    <style>
        /* Style the input fields */
        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        /* Mark the active step: */
        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #4CAF50;
        }
    </style>
@endsection

@section('content')
    <section class="section" id="section-009">
        <div class="container">
            <div class="row">
                <img src="{{asset('images/logo-full.png')}}" class="aligncenter" width="212" alt="alt here">
                <form id="regForm" action="{{ route('sendRegister') }}" method="POST">
                    <div class="col-md-2 col-sm-2"></div>

                    <div class="col-md-8 col-sm-8">
                        <div class="content-form-home">
                        @csrf
                        <!-- Circles which indicates the steps of the form: -->
                            <div style="text-align:center;margin-bottom:20px;">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                            </div>
                            <div class="tab">
                                <h1>Sobre o restaurante:</h1>
                                <div class="m-t-20">
                                    <span class="text-form-03">CNPJ</span>
                                    <input class="form-control" type="text" placeholder="Digite o CNPJ"
                                           required>
                                </div>

                                <div class="m-t-20">
                                    <span class="text-form-03">Razão Social</span>
                                    <input class="form-control" type="text" placeholder="Digite a razão social"
                                           required>
                                </div>

                                <div class="m-t-20">
                                    <span class="text-form-03">Nome da Distribuidora/Empório</span>
                                    <input class="form-control" type="text"
                                           placeholder="Digite o nome da distribuidora/empório"
                                           required>
                                </div>

                                <div class="m-t-20">
                                    <span class="text-form-03">Telefone</span>
                                    <input class="form-control" type="text" placeholder="Digite o telefone"
                                           required>
                                </div>

                                <div class="m-t-20">
                                    <span class="text-form-03">CEP</span>
                                    <input class="form-control" type="text" placeholder="Digite o CEP"
                                           required>
                                </div>

                                <div class="m-t-20">
                                    <span class="text-form-03">Cidade</span>
                                    <input class="form-control" type="text" placeholder="Digite a cidade"
                                           required>
                                </div>

                                <div class="m-t-20">
                                    <span class="text-form-03">Estado</span>
                                    <input class="form-control" type="text" placeholder="Digite o estado"
                                           required>
                                </div>

                                <div class="m-t-20">
                                    <span class="text-form-03">Bairro</span>
                                    <input class="form-control" type="text" placeholder="Digite o bairro"
                                           required>
                                </div>

                                <div class="m-t-20">
                                    <span class="text-form-03">Endereço</span>
                                    <input class="form-control" type="text" placeholder="Digite o endereço"
                                           required>
                                </div>

                                <div class="m-t-20">
                                    <span class="text-form-03">Número</span>
                                    <input class="form-control" type="text" placeholder="Digite o número"
                                           required>
                                </div>

                                <div class="m-t-20">
                                    <span class="text-form-03">Complemento(Opcional)</span>
                                    <input class="form-control" type="text" placeholder="Digite o complemento">
                                </div>

                                <div class="m-t-20">
                                    <div class="form-group">
                                        <span class="text-form-03">Especialidade</span>
                                        <select class="form-control">
                                            <option>Distribuidora</option>
                                            <option>Empório</option>
                                            <option>Conveniência</option>
                                            <option>Mercadinho</option>
                                            <option>Adega</option>
                                            <option>Outro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="m-t-20">
                                    <div class="form-group">
                                        <span class="text-form-03">Você já possui serviço de entrega?</span>
                                        <select class="form-control">
                                            <option>Sim</option>
                                            <option>Não</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="tab"><h1>Planos disponíveis</h1>
                                <div class="m-t-20">
                                    <div class="text-center">
                                        <img src="{{asset('images/2.png')}}" class="aligncenter" width="212"
                                             alt="alt here">
                                        <span class="text-form-00">PRIME PLUS</span>
                                    </div>
                                    <br/>
                                    <p class="text-form-01 m-b-20"><i class="fa fa-check"></i> Entrega realizada atráves dos
                                        nossos parceiros de
                                        logística.</p>
                                    <p class="text-form-01 m-b-20"><i class="fa fa-check"></i> Não possuimos fidelidade,
                                        cancele o plano quando
                                        desejar.</p>
                                    <p class="text-form-01 m-b-20"><i class="fa fa-check"></i> 15% sobre o valor dos pedidos,
                                        incluindo taxa de
                                        entrega. (Mais 3,7% para
                                        pagamento on-line)</p>
                                    <p class="text-form-01 m-b-20"><i class="fa fa-check"></i> Mensalidade de R$150 por mês,
                                        apenas se você faturar
                                        mais que R$5.000,00
                                        mensais.</p>
                                </div>
                            </div>

                            <div class="tab">
                                <h1>Sobre o dono do restaurante</h1>
                                <div class="m-t-20">
                                    <span class="text-form-03">Nome Completo</span>
                                    <input class="form-control" type="text"
                                           placeholder="Digite o nome completo"
                                           required>
                                </div>
                                <div class="m-t-20">
                                    <span class="text-form-03">CPF</span>
                                    <input class="form-control" type="text" placeholder="Digite o CPF"
                                           required>
                                </div>
                                <div class="m-t-20">
                                    <span class="text-form-03">RG</span>
                                    <input class="form-control" type="text" placeholder="Digite o RG" required>
                                </div>
                                <div class="m-t-20">
                                    <span class="text-form-03">Orgão Emissor</span>
                                    <input class="form-control" type="text"
                                           placeholder="Digite o orgão emissor"
                                           required>
                                </div>
                            </div>

                            <div class="tab">
                                <h1>Dados bancários para o recebimento</h1>
                                <span class="text-form-03">Banco</span>
                                <div class="m-t-20">
                                    <input class="form-control" type="text" name="bank_id"
                                           placeholder="Selecione o Banco">
                                </div>
                                <span class="text-form-03">Agência</span>
                                <div class="m-t-20">
                                    <input class="form-control" type="text" name="agency"
                                           placeholder="Digite o código da agência">
                                </div>
                                <span class="text-form-03">Conta</span>
                                <div class="m-t-20">
                                    <input class="form-control" type="text" name="account"
                                           placeholder="Digite o número da conta">
                                </div>
                                <span class="text-form-03">Dígito</span>
                                <div class="m-t-20">
                                    <input class="form-control" type="text" name="email"
                                           placeholder="Digite o dígito da conta">
                                </div>
                                <div class="m-t-20">
                                    <div class="form-group">
                                <span
                                    class="text-form-03">Esta conta bancária está vínculada ao CNPJ do distribuidora?</span>
                                        <select class="form-control">
                                            <option>Sim</option>
                                            <option>Não</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="tab">
                                <h1>Quase pronto! Agora crie sua senha</h1>
                                <div class="m-t-20">
                                    <span class="text-form-03">Login</span>
                                    <input class="form-control" name="email" type="email"
                                           placeholder="Digite o seu email"
                                           required>
                                </div>
                                <div class="m-t-20">
                                    <span class="text-form-03">Senha</span>
                                    <input class="form-control" name="password" type="password"
                                           placeholder="Digite uma senha"
                                           required>
                                </div>
                            </div>

                            <div style="overflow:auto;">
                                <div style="float:right;">
                                    <div class="m-t-10">
                                        <button type="button" class="btn-sm btn-danger" id="prevBtn"
                                                onclick="nextPrev(-1)">
                                            Previous
                                        </button>
                                        <button type="button" class="btn-sm btn-success" id="nextBtn"
                                                onclick="nextPrev(1)">
                                            Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('script-bottom')
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
