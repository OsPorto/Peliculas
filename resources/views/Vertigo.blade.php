@extends('layouts.master')
@section('header')
@stop
@section('content')
</div>
<div  style="background-color: #9265ff; " class="card border-0 shadow my-5">
    <div class="card-body">
        <center>
            <h2><br> {{$title}} {{$user}}</h2>
            <hp>Scottie Ferguson, un detective con problemas de vértigo y retirado de la profesión, es contratado por un compañero, Gavin Elster, para que vigile de cerca a su esposa Madeleine. La mujer presenta trastornos psicológicos que hacen sospechar al marido que está poseída por un espíritu, posiblemente el de su fallecida tía, Carlota Valdés. Los numerosos intentos de suicidio de Madeleine conducen a Elster a contratar al detective, que tendrá que salvarla de la muerte. Scottie sigue a la enigmática mujer allá donde va y empieza a sentir fascinación por todo lo que la rodea. Pero finalmente Madeleine muere arrojándose desde un campanario y Scottie se derrumba.<br><br></hp>
        </center>
    </div>
</div>

<center>
    <img src="/images/vertigo.jpg" width="500" height="300">
</center>
@stop
@section('footer')
    <p id="footer">Derechos reservados {{date('Y')}}</p>
@stop
