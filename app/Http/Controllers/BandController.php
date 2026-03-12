<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandController extends Controller
{
    public function getAll()
    {
        $bands = $this->getBands();
        return response()->json($bands);
    }

    public function getById($id)
    {
        $bands = $this->getBands();
        $band = null;

        foreach ($bands as $b) {
           
            if ($b['id'] == $id) {
                $band = $b;
                break; 
            }
        }

     
        if ($band) {
            return response()->json($band);
        } else {
            return response()->json(['mensagem' => 'Banda não encontrada'], 404);
        }
    }

    public function getBandsByGender($gender)
    {
        $bands = [];
        
        foreach ($this->getBands() as $_band) {
            if ($_band['genre'] == $gender)
            {
                $bands[] = $_band;
            }
        }

        return response()->json($bands);
    }

    public function store(Request $request)
    {
      $validate = $request ->validate([
        'name' => 'required',
      ]);

      return response()->json($request->all());
    }


    
    protected function getBands()
    {
        return [
            ['id' => 1, 'name' => 'The Beatles', 'genre' => 'Rock'],
            ['id' => 2, 'name' => 'Led Zeppelin', 'genre' => 'Rock'],
            ['id' => 3, 'name' => 'Pink Floyd', 'genre' => 'Progressive Rock'],
        ];
    }
}