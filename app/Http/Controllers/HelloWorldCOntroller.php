<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

class HelloWorldCOntroller extends Controller
{
    public function hello(Request $request, $name)
    {
        return response()->json([
            'oi' => "Hello World {$name}", 
            'tchau' => "Tchau, {$name}",
            'dados_extras' => $request->all() 
        ]);
    }
}