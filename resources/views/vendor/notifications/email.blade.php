@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Olá!')
@endif
@endif

{{-- Intro Lines --}}
Está a receber este e-mail porque recebemos um pedido de alteração da password para a sua conta.


{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
Alterar Password
@endcomponent
@endisset

{{-- Outro Lines --}}
Este link irá expirar dentro de 60min.

Se não solicitou o pedido de alteração de password, não é necessário executar qualquer ação.

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Cumprimentos'),<br>
{{ config('app.name') }}
@endif

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@lang(
    "Se estiver com problemas em aceder ao  \":actionText\" botão, copie e cole o link seguinte\n".
    'no seu navegador da internet:',
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
@endslot
@endisset
@endcomponent
