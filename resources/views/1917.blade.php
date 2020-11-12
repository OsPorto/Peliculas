@extends('layouts.master')
@section('header')
@stop
@section('content')
</div>
<div  style="background-color: #9265ff; " class="card border-0 shadow my-5">
    <div class="card-body">
        <center>
            <h2><br> {{$title}} {{$user}}</h2>
            <hp>Primera Guerra Mundial, conocida en su momento como la Gran Guerra. En el frente occidental, el general británico Erinmore (Colin Firth) encomienda a los cabos Schofield (George MacKay) y Blake (Dean-Charles Chapman), dos jóvenes soldados británicos, una misión estrictamente imposible. Deberán entregar un mensaje urgente y decisivo al coronel MacKenzie (Benedict Cumberbatch). <br><br></hp>
        </center>
    </div>
</div>

<center>
    <img src="/images/1917.jpg" width="500" height="300">
</center>
@stop
@section('footer')
    <p id="footer">Derechos reservados {{date('Y')}}</p>
@stop
