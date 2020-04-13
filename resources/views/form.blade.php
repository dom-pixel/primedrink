@extends('layouts.web.master')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('front/formulario.css')}}">
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
                                <h1>Sobre a Distribuidora/Empório:</h1>
                                <div class="m-t-20">
                                    <span class="text-form-03">CNPJ</span>
                                    <input class="form-control" type="text" name="cnpj" placeholder="Digite o CNPJ"
                                           required>
                                </div>

                                <div class="m-t-20">
                                    <span class="text-form-03">Razão Social</span>
                                    <input class="form-control" type="text" name="company_name"
                                           placeholder="Digite a razão social"
                                           required>
                                </div>

                                <div class="m-t-20">
                                    <span class="text-form-03">Nome da Distribuidora/Empório</span>
                                    <input class="form-control" type="text" name="trading_name"
                                           placeholder="Digite o nome da distribuidora/empório"
                                           required>
                                </div>

                                <div class="m-t-20">
                                    <span class="text-form-03">Telefone</span>
                                    <input class="form-control" type="text" name="phone" placeholder="Digite o telefone"
                                           required>
                                </div>

                                <div class="m-t-20">
                                    <span class="text-form-03">CEP</span>
                                    <input class="form-control" type="text" name="zipcode" placeholder="Digite o CEP"
                                           required>
                                </div>

                                <div class="m-t-20">
                                    <span class="text-form-03">Cidade</span>
                                    <input class="form-control" type="text" name="city" placeholder="Digite a cidade"
                                           required>
                                </div>

                                <div class="m-t-20">
                                    <span class="text-form-03">Estado</span>
                                    <input class="form-control" type="text" name="state" placeholder="Digite o estado"
                                           required>
                                </div>

                                <div class="m-t-20">
                                    <span class="text-form-03">Bairro</span>
                                    <input class="form-control" type="text" name="neighborhood"
                                           placeholder="Digite o bairro"
                                           required>
                                </div>

                                <div class="m-t-20">
                                    <span class="text-form-03">Endereço</span>
                                    <input class="form-control" type="text" name="street"
                                           placeholder="Digite o endereço"
                                           required>
                                </div>

                                <div class="m-t-20">
                                    <span class="text-form-03">Número</span>
                                    <input class="form-control" type="text" name="number" placeholder="Digite o número"
                                           required>
                                </div>

                                <div class="m-t-20">
                                    <span class="text-form-03">Complemento(Opcional)</span>
                                    <input class="form-control" type="text" name="complement"
                                           placeholder="Digite o complemento">
                                </div>

                                <div class="m-t-20">
                                    <div class="form-group">
                                        <span class="text-form-03">Especialidade</span>
                                        <select class="form-control" name="business">
                                            <option value="Distribuidora">Distribuidora</option>
                                            <option value="Empório">Empório</option>
                                            <option value="Conveniência">Conveniência</option>
                                            <option value="Mercadinho">Mercadinho</option>
                                            <option value="Adega">Adega</option>
                                            <option value="Outro">Outro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="m-t-20">
                                    <div class="form-group">
                                        <span class="text-form-03">Você já possui serviço de entrega?</span>
                                        <select class="form-control" name="delivery">
                                            <option value="on">Sim</option>
                                            <option value="off">Não</option>
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
                                    <p class="text-form-01 m-b-20"><i class="fa fa-check"></i> Entrega realizada atráves
                                        dos
                                        nossos parceiros de
                                        logística.</p>
                                    <p class="text-form-01 m-b-20"><i class="fa fa-check"></i> Não possuimos fidelidade,
                                        cancele o plano quando
                                        desejar.</p>
                                    <p class="text-form-01 m-b-20"><i class="fa fa-check"></i> 15% sobre o valor dos
                                        pedidos,
                                        incluindo taxa de
                                        entrega. (Mais 3,7% para
                                        pagamento on-line)</p>
                                    <p class="text-form-01 m-b-20"><i class="fa fa-check"></i> Mensalidade de R$150 por
                                        mês,
                                        apenas se você faturar
                                        mais que R$5.000,00
                                        mensais.</p>
                                    <input type="hidden" name="plan_id" value="1"/>
                                </div>
                            </div>

                            <div class="tab">
                                <h1>Sobre o dono da distribuidora/empório</h1>
                                <div class="m-t-20">
                                    <span class="text-form-03">Nome Completo</span>
                                    <input class="form-control" type="text"
                                           name="full_name"
                                           placeholder="Digite o nome completo"
                                           required>
                                </div>
                                <div class="m-t-20">
                                    <span class="text-form-03">CPF</span>
                                    <input class="form-control" type="text" name="document" placeholder="Digite o CPF"
                                           required>
                                </div>
                                <div class="m-t-20">
                                    <span class="text-form-03">RG</span>
                                    <input class="form-control" type="text" name="document_secondary"
                                           placeholder="Digite o RG" required>
                                </div>
                                <div class="m-t-20">
                                    <span class="text-form-03">Orgão Emissor</span>
                                    <input class="form-control" type="text" name="document_secondary_complement"
                                           placeholder="Digite o orgão emissor"
                                           required>
                                </div>
                            </div>

                            <div class="tab">
                                <h1>Dados bancários para o recebimento</h1>
                                <div class="m-t-20">
                                    <span class="text-form-03">Banco</span>
                                    <select class="form-control" name="bank_id">
                                        @foreach($banks as $bank)
                                            <option value="{{$bank->id}}">{{$bank->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="m-t-20">
                                    <span class="text-form-03">Agência</span>
                                    <input class="form-control" type="text" name="agency"
                                           placeholder="Digite o código da agência">
                                </div>
                                <div class="m-t-20">
                                    <span class="text-form-03">Conta</span>
                                    <input class="form-control" type="text" name="account"
                                           placeholder="Digite o número da conta">
                                </div>
                                <div class="m-t-20">
                                    <span class="text-form-03">Dígito</span>
                                    <input class="form-control" type="text" name="digit"
                                           placeholder="Digite o dígito da conta">
                                </div>
                                <div class="m-t-20">
                                    <div class="form-group">
                                <span
                                    class="text-form-03">Esta conta bancária está vínculada ao CNPJ do distribuidora?</span>
                                        <select class="form-control" name="is_linked">
                                            <option value="true">Sim</option>
                                            <option value="false">Não</option>
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
                                            Voltar
                                        </button>
                                        <button type="button" class="btn-sm btn-success" id="nextBtn"
                                                onclick="nextPrev(1)">
                                            Próximo passo
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
