@component('mail::message')
# Facture du paiement

Merci pour l'achat cher client

Voici votre reçu

<table class="table">
    <thead>
        <tr>
            <th>Produit(s)</th>
            <th>quantité</th>
            <th>prix</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order->items as $item)
        <tr>
            <td scope="row">{{ $item->name }}</td>
            <td>{{ $item->pivot->quantity }}</td>
            <td>{{ $item->pivot->price }}€</td>
        </tr>
        @endforeach
    </tbody>
</table>

Total : {{$order->grand_total}}€


@component('mail::button', ['url' => ''])
Voir
@endcomponent

Merci,<br>
Root Shop
@endcomponent
