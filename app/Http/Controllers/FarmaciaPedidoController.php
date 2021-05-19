<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class FarmaciaPedidoController extends Controller
{
    public function index()
    {
        $farmaciaPedido= App\FarmaciaPedido::all();
        
        return view('/Negocio/FarmaciaPedido', compact('farmaciaPedido'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            //'idFarmaciaPedido' => 'required',
            'idFarmaciaPedido' => 'required',
            'archivo' => 'required',
        ]);

        if($validator->fails())
        {
            return response()->json($validator->errors(), 400);
        }

        try
        {
            $estadoFarmaciaPedido = FarmaciaPedido::find($request->id);
            $estadoFarmaciaPedido->idFarmaciaPedido = $request->idFarmaciaPedido;
            $estadoFarmaciaPedido->archivo = $request->archivo;
            $estadoFarmaciaPedido->update();
            
            return response()->json([
                'status' => 'update_ok',
                'message' => 'Se ha modificado correctamente',
                'data' => $pedidoFarmaciaPedido
            ], 201);
        }
        catch(Exception $e)
        {
            return response()->json([
                'status' => 'update_error',
                'message' => 'Algo salió mal. Inténtalo de nuevo más tarde',
                'error' => $e
            ], 500);
        }
    }
    

}
