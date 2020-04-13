@component('mail::message')
# Congratulations

Votre boutique est maintenant active

@component('mail::button', ['url' => route('shops.show', $shop->id)])
Visitez votre magasin
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
