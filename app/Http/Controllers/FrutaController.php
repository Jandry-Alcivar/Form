<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrutaModel;

class FrutaController extends Controller
{

    public function Formula()
    {
        
        return view('FormTable.Formulario');
    }


    public function store(Request $request)
{
        $I = new FrutaModel();
        $I->Nombre = $request->Nombre;
        $I->Cantidad = $request->Cantidad;
        $I->Proveedor = $request->Proveedor ;
        $I->save();
        return back();
}

    public function Delete($id){
        $I = FrutaModel::find($id);
        if($I){
            $I->estado=false;
            $I->save();
        }
        return back();
    }

    public function update($id, Request $request){
        $I=FrutaModel::find($id);
        if($I){
            $I->Nombre=$request->Nombre;
            $I->Cantidad=$request->Cantidad;
            $I->Proveedor=$request->Proveedor;
            $I->save();
        }
         }
         
       public function datosEditar($id){
        $I=FrutaModel::find($id);
        return view('EditarFruta', compact('I'));
    } 
 }



