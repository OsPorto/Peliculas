@extends('layouts.master')
@section('header')
@stop
@section('content')
</div>
<div  style="background-color: #9265ff; " class="card border-0 shadow my-5">
    <div class="card-body">
        <center>
            <h2><br> {{$title}} {{$user}}</h2>
            <hp>En su primer viaje en el tiempo, en 1985, Marty McFly (Michael J. Fox) cometió varios errores. En compañía de su amigo Emmett "Doc" Brown (Christopher Lloyd) y de su prometida Jennifer Parker (Elisabeth Shue), Marty tendrá que realizar un viaje hacia el futuro en la máquina del tiempo de Doc, el DeLorean: los tres viajarán al Hill Valley de 2015 para intentar acabar con la catástrofe a la que parece llevarles el destino. <br><br></hp>
        </center>
    </div>
</div>

<center>
    <img src="/images/r.jpg" width="500" height="300">
</center>
@stop
@section('footer')
    <p id="footer">Derechos reservados {{date('Y')}}</p>
@stop
