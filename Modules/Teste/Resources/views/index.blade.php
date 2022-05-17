@extends('teste::layouts.master')

@section('content')
    <h1>Hello World - Teste utilizando Módulos Laravel 9</h1>

    <p>
        This view is loaded from module: {!! config('teste.name') !!}
    </p>
@endsection
