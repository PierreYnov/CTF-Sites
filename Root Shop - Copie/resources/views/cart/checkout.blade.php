@extends('layouts.app')


@section('content')

<h2>Caisse</h2>


<h3>Informations sur l expedition</h3>

<form action="{{route('orders.store')}}" method="post">
    @csrf


    <div class="form-group">
        <label for="">Nom complet</label>
        <input type="text" name="shipping_fullname" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">etat</label>
        <input type="text" name="shipping_state" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Ville</label>
        <input type="text" name="shipping_city" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Code Postal</label>
        <input type="number" name="shipping_zipcode" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Adresse complete</label>
        <input type="text" name="shipping_address" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Mobile</label>
        <input type="text" name="shipping_phone" id="" class="form-control">
    </div>

    <h4>Mode de paiement</h4>

    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="payment_method" id="" value="cash_on_delivery">
            Paiement à la livraison

        </label>

    </div>

    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal">
            Paypal

        </label>

    </div>


    <button type="submit" class="btn btn-primary mt-3">Passer commande</button>


</form>


@endsection
