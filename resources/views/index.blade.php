@extends('layouts.master')
@section('header')
@stop
@section('content')
    <div style="background-color: #9265ff;"  class="card border-0 shadow my-5" >
       <center>
           <br>
        <p>{{$mnsj}}</p>
       </center>
    </div>
    <div  style="background-color: #9265ff; " class="card border-0 shadow my-5">
        <div class="card-body">
            <center>
    <h2><br> QUIUBOLE {{$user}}</h2>
    <hp>En esta pagina pura pelicula chida me cae que si, ni en la cineteca broder <br><br></hp>
            </center>
            </div>
        </div>

    <center>
    <img src="/images/cine.jpg" width="500" height="300">
    </center>
@stop
@section('footer')
    <p id="footer">Derechos reservados {{date('Y')}}</p>
@stop
