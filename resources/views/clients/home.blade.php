@extends('layout')

@section('title', 'Klanten') 


@section('content')
    @foreach ($clients as $client)
    <li>{{$client->first_name}} {{$client->last_name}}</li>
    @endforeach
@endsection