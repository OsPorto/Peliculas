@extends('layouts.master')
@section('header')
@stop
@section('content')
    <nav id=nea class="navbar navbar-expand-lg static-top mb-5 shadow">
        <form action="{{action('PruebaController@validacion')}}" method="post">
            {{csrf_field()}}
            <label for="user">Usuario</label>
            <input type="text" name="user">
            <br>
            <label for="pass">Contraseña</label>
            <input type="password" name="pass">
            <br>
            <input type="submit"value="Iniciar sesion">
        </form>
    </nav>
@stop
@section('footer')
    <p id="footer">Derechos reservados {{date('Y')}}</p>
@stop
