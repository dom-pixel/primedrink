@component('mail::message')
    <h1>Pré-inscrição feita com sucesso!</h1>
    <p> Olá, {{ $name }}. Estamos muito felizes em seu interesse no Prime Drink!</p>
    <p>Agora para confirmar seu registro clique abaixo:</p>
    @component('mail::button', ['url'=>'https://google.com'])
        Confirmar inscrição
    @endcomponent
    *E-mail enviado automático através do sistema.
@endcomponent
