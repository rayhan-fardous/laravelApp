@extends('layouts.app')
@section('content')
        <h1> Contact Us</h1>
        <h3>Name: {{$contact->name}}</h3>
        <h3>Profession: {{$contact->profession}}</h3>
        <h3>Email: {{$contact->email}}</h3><br>

        <h3>Name: {{$contact2->name}}</h3>
        <h3>Profession: {{$contact2->profession}}</h3>
        <h3>Email: {{$contact2->email}}</h3><br>

        <h3>Name: {{$contact3->name}}</h3>
        <h3>Profession: {{$contact3->profession}}</h3>
        <h3>Email: {{$contact3->email}}</h3>
        
@endsection 