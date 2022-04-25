<?php

namespace App\Http\Controllers;

use App\Models\Inmueble;
use Illuminate\Http\Request;

class InmuebleController extends Controller
{
   
    public function index(){
        $inmuebles = Inmueble::orderBy('id','asc')->get();
        return view('inicio', compact('inmuebles')); 
    }


    public function store(Request $request)
    {
        if ($request->hasFile('foto')) {
            $file           = $request->file('foto');  
            $nombrearchivo  = time()."_".$file->getClientOriginalName();  
            $file->move(public_path('/fotos_inmuebles/'),$nombrearchivo); 

            $data = new Inmueble([
                'tipo_inmueble'=>$request->get('tipo_inmueble'),
                'direccion'=>$request->get('direccion'),
                'numero_habitacion'=>$request->get('numero_habitacion'),
                'numero_bano'=>$request->get('numero_bano'),
                'numero_area'=>$request->get('numero_area'),
                'precio'=>$request->get('precio'),
                'codigo'=>$request->get('codigo'),
                'estatus'=>$request->get('estatus'),
                'foto'=>$nombrearchivo
            ]);
            $data->save(); 
        }

        $inmuebles = Inmueble::orderBy('id','asc')->get();
        $msjInmueble = "Bien";
        return redirect('/')->with(['inmuebles' => $inmuebles, 'msjInmueble' =>$msjInmueble]);

    }

    
}
