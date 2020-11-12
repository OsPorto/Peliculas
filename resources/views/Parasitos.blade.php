@extends('layouts.master')
@section('header')
@stop
@section('content')
</div>
<div  style="background-color: #9265ff; " class="card border-0 shadow my-5">
    <div class="card-body">
        <center>
            <h2><br> {{$title}} {{$user}}</h2>
            <hp>Ki-taek (Kang-ho Song) es el patriarca de una familia pobre que malvive en un piso bajo en Seúl, pagando las facturas a base de trabajos precarios y robando el wi-fi de los vecinos. Su situación cambia un día en el que su hijo logra que le recomienden para dar clases particulares de inglés en casa de los Park, una familia acaudalada. Utilizando su ingenio, el joven conseguirá ganarse la confianza de la señora de la casa, y así irá introduciendo, poco a poco, al resto de sus familiares en distintos trabajos del servicio doméstico. Será el comienzo de un engranaje incontrolable, del cual nadie saldrá realmente indemne.<br><br></hp>
        </center>
    </div>
</div>

<center>
    <img src="/images/parasitos.jpg" width="500" height="300">
</center>
@stop
@section('footer')
    <p id="footer">Derechos reservados {{date('Y')}}</p>
@stop
