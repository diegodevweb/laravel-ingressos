@extends('layouts.main')

@section('title', 'Contato')

@section('content')
    <h1>Entre em contato conosco</h1>
    <form method="get" action="" class="form">
        <label for="email">E-mail </label><input type="email" name="email" id="email"><br><br>
        <label for="email">Senha </label><input type="password" name="password" id="password">
    </form>
@endsection
