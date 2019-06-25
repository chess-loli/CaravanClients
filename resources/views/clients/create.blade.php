@extends('layout')

@section('title', 'Create Client')
@section('content')
<form method="POST" action="/clients">
    {{ csrf_field() }}

    <div class="form-group">
        <div>
            Voornaam:
            <input type="text" class="form-control" name="first_name" placeholder="Voornaam">
        </div>
    </div>

    <div class="form-group">
        <div>
            Achternaam:
            <input type="text" class="form-control" name="last_name" placeholder="Achternaam">
        </div>
    </div>

    <div class="form-group">
        <div>
            Straat en huisnummer:
            <input type="text" class="form-control" name="adress_street" placeholder="straat 1(abc)">
        </div>
    </div>

    <div class="form-group">
        <div>
            Postcode:
            <input type="text" class="form-control" name="adress_zip" placeholder="1234AB">
        </div>
    </div>
    
    <div class="form-group">
        <div>
            Plaats:
            <input type="text" class="form-control" name="adress_city" placeholder="Amsterdam">
        </div>
    </div>

    <div class="form-group">
        <div>
            Email:
            <input type="email" class="form-control" name="email" placeholder="voorbeeld@email.com">
        </div>
    </div>

    <div class="form-group">
        <div>
            Telefoon nr:
            <input type="text" class="form-control" name="phone" placeholder="06-12345678">
        </div>
    </div>

    <div>
        <button class="btn btn-primary" type="submit">Klant aanmaken</button>
    </div>
    
</form>

@endsection