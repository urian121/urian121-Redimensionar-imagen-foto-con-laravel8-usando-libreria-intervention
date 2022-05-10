<?php
namespace App\Http\Controllers;
use App\Models\Inmueble;
use Illuminate\Http\Request;

//IMPORTANTE, despues de haber instalado la libreria ya podemos hacer uso de la misma asi a traves de su instancia;
//use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

class InmuebleController extends Controller
{
   
    public function index(){
        $inmuebles = Inmueble::orderBy('id','DESC')->get();
        return view('inicio', compact('inmuebles')); 
    }


    public function store(Request $request){
        if ($request->hasFile('foto')) {
            $photo              = $request->file('foto');
            $nombrearchivo      = time() . '.' . $photo->getClientOriginalExtension();

            $destinationPath = public_path('/fotos_inmuebles');
            if (!File::isDirectory($destinationPath)) {
                File::makeDirectory($destinationPath, 0777, true, true);
            }

            $thumb_img = Image::make($photo->getRealPath())->resize(600, 400);
            $thumb_img->save($destinationPath .'/'. $nombrearchivo, 100); 
        

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

        
        $inmuebles = Inmueble::orderBy('id','DESC')->get();
        $msjInmueble = "Bien";
        return redirect('/')->with(['inmuebles' => $inmuebles, 'msjInmueble' =>$msjInmueble]);

    }

    
}
