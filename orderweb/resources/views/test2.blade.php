@extends('templates.base')
@section('title', 'Test')
@section('content')

    <h1>Test</h1>
    <q>No soy hombre de plegarias, 
        pero si estas en el cielo ayudame Superman!</q>
        <small>Homero J. Simpson</small>
        <button onclick="show_alert()">Click!</button>
@endsection

@section('scripts')
        <script src="{{ asset('js/test.js') }}"></script>
@endsection