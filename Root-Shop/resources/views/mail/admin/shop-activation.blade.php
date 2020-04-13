@component('mail::message')
# Shop activation request

Veuillez activer la boutique. Voici les details de la boutique.

Nom du magasin : {{$shop->name}}
Proprietaire du magasin : {{$shop->owner->name}}

@component('mail::button', ['url' => url('/admin/shops')])
Gerer les magasins
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
