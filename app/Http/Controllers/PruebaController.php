<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function login(){
        return view('login',[
        ]);
    }

    public function validacion(Request $request){
        $user = $request->input('user');
        $pass = $request->input('pass');
        if($user==='cocowash'){
            if($pass==='12345'){
                return view('index',[
                    'mnsj'=>'Sesion Iniciada',
                    'user'=>$user
                ]);
            }
            else{return view('login',[
                'mnsj'=>'Datos incorrectos, Verificalos'
            ]);}
        }
        else{return view('login',[
            'mnsj'=>'Datos incorrectos, Verificalos'
        ]);}
    }


    public function BakTTF(){
        return view('BackTTF',[
            'title'=>'Volver al Futuro',
            'autor'=>'Osmar Portillo',
            'year'=> '2020'
        ]);
    }


    public function Paras(){
        return view('Parasitos',[
            'title'=>'Parasitos',
            'autor'=>'Osmar Portillo',
            'year'=> '2020'
        ]);
    }


    public function Vert(){
        return view('Vertigo',[
            'title'=>'Vertigo',
            'autor'=>'Osmar Portillo',
            'year'=> '2020'
        ]);
    }


    public function milnueve(){
        return view('1917',[
            'title'=>'1917',
            'autor'=>'Osmar Portillo',
            'year'=> '2020'
        ]);
    }
}
