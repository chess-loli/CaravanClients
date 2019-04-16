@extends('layout')

@section('title', 'Create Client')
@section('content')
<form method="POST" action="/clients">
    {{ csrf_field() }}

    <div>
        <input type="text" name="first_name" placeholder="First Name">
    </div>

    <div>
        <input type="text" name="last_name" placeholder="Last Name">
    </div>

    <div>
        <input type="text" name="adress_street" placeholder="street name and number">
    </div>

    <div>
        <input type="text" name="adress_zip" placeholder="postal code/zip">
    </div>

    <div>
        <input type="text" name="adress_city" placeholder="city name">
    </div>

    <div>
        <input type="text" name="email" placeholder="email adress">
    </div>

    <div>
        <input type="text" name="phone" placeholder="phone number">
    </div>

    <div>
        <button type="submit">Create Client</button>
    </div>
    
</form>

@endsection